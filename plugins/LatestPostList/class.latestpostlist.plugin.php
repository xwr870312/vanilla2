<?php if (!defined('APPLICATION')) exit();
/* 	Copyright 2013-2015 Zachary Doll
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details
 *
 * 	You should have received a copy of the GNU General Public License
 * 	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
$PluginInfo['LatestPostList'] = array(
    'Name' => 'Latest Post List',
    'Description' => 'Lists the latest posts in the panel. Respects permissions, has an AJAX refresh, and is configurable.',
    'Version' => '1.5.5',
    'RequiredApplications' => array('Vanilla' => '2.1.9'),
    'RequiredTheme' => FALSE,
    'RequiredPlugins' => FALSE,
    'HasLocale' => FALSE,
    'SettingsUrl' => '/plugin/latestpostlist',
    'SettingsPermission' => 'Garden.Settings.Manage',
    'Author' => "Zachary Doll",
    'AuthorEmail' => 'hgtonight@daklutz.com',
    'AuthorUrl' => 'http://www.daklutz.com',
    'License' => 'GPLv2'
);

class LatestPostList extends Gdn_Plugin {

    // Creates a method called "LatestPostList" on the PluginController that acts like a controller
    public function PluginController_LatestPostList_Create($Sender) {
        $Sender->Title('Latest Post List Plugin');
        $Sender->AddSideMenu('plugin/latestpostlist');

        // get sub-pages forms ready
        $Sender->Form = new Gdn_Form();
        $this->Dispatch($Sender, $Sender->RequestArgs);
    }
    
    private function DisallowedPage($Sender) {
        $Result = FALSE;
        // Get the config and controller name for comparison
        $Pages = C('Plugins.LatestPostList.Pages', 'both');
        $Controller = $Sender->ControllerName;

        // Enumerate what preference relates to which controller
        switch ($Pages) {
            case 'announcements':
                $ShowOnController = array('profilecontroller', 'activitycontroller');
                break;
            case 'discussions':
                $ShowOnController = array('discussioncontroller', 'discussionscontroller', 'categoriescontroller', 'draftscontroller');
                break;
            case 'both':
            default:
                $ShowOnController = array('discussioncontroller', 'categoriescontroller', 'discussionscontroller', 'draftscontroller', 'profilecontroller', 'activitycontroller');
                break;
        }

        // leave if we aren't in an approved controller
        if ($Pages != 'all' && !InArrayI($Controller, $ShowOnController)) {
            $Result = TRUE;
        }
        return $Result;
    }

    //This is a common hook that fires for all controllers on the Render method
    public function Base_Render_Before($Sender) {
        // Never show on admin pages
        if ($Sender->MasterView == 'admin' || $this->DisallowedPage($Sender)) {
            return;
        }

        // bring in the module into this controller
        $Module = new LatestPostListModule($Sender);
        $Sender->AddModule($Module);

        // Only add the JS file and definition if needed
        $Frequency = C('Plugins.LatestPostList.Frequency', 120);
        if ($Frequency > 0) {
            $Sender->AddJsFile($this->GetResource('js/latestpostlist.js', FALSE, FALSE));
            $Sender->AddDefinition('LatestPostListFrequency', $Frequency);
            $Sender->AddDefinition('LatestPostListLastDate', $Module->GetDate());
            $Sender->AddDefinition('LatestPostListEffects', C('Plugins.LatestPostList.Effects', 'none'));
        }
    }

    // Used to make the ajax refresh intelligent
    // This gets the latest post date, the latest post list and returns it as json object
    public function Controller_GetNewList($Sender) {
        $LPL = new LatestPostListModule($Sender);
        $Data = array('date' => $LPL->GetDate(), 'list' => $LPL->PostList());
        echo json_encode($Data);
    }

    // Treat our mini-controller as a settings page (plugin/latestpostlist)
    public function Controller_Index($Sender) {
        // Admins only
        $Sender->Permission('Garden.Settings.Manage');

        // Set data used by the view
        $Sender->SetData('PluginDescription', $this->GetPluginKey('Description'));

        $Validation = new Gdn_Validation();
        $ConfigurationModel = new Gdn_ConfigurationModel($Validation);
        $ConfigurationModel->SetField(array(
            'Plugins.LatestPostList.Pages' => 'all',
            'Plugins.LatestPostList.Frequency' => 120,
            'Plugins.LatestPostList.Count' => 5,
            'Plugins.LatestPostList.Link' => 'discussions',
            'Plugins.LatestPostList.Effects' => 'none',
        ));

        // Set the model on the form.
        $Sender->Form->SetModel($ConfigurationModel);

        // If seeing the form for the first time...
        if ($Sender->Form->AuthenticatedPostBack() === FALSE) {
            // Apply the config settings to the form.
            $Sender->Form->SetData($ConfigurationModel->Data);
        } else {
            $ConfigurationModel->Validation->ApplyRules(array(
                        array('Name' => 'Plugins.LatestPostList.Pages', 'Validation' => 'Required'),
                        array('Name' => 'Plugins.LatestPostList.Frequency', 'Validation' => array('Required', 'Integer') ),
                        array('Name' => 'Plugins.LatestPostList.Count', 'Validation' => array('Required', 'Integer')),
                        array('Name' => 'Plugins.LatestPostList.Effects', 'Validation' => 'Required') ) );

            $Saved = $Sender->Form->Save();
            if ($Saved) {
                $Sender->InformMessage('<span class="InformSprite Sliders"></span>' . T('Your changes have been saved.'), 'HasSprite');
            }
        }

        // Add the javascript needed for a live preview
        $Sender->AddJsFile($this->GetResource('js/preview.js', FALSE, FALSE));
        // Render the settings view
        $Sender->Render($this->GetView('settings.php'));
    }

    // Add a link to the dashboard menu
    public function Base_GetAppSettingsMenuItems_Handler($Sender) {
        $Menu = &$Sender->EventArguments['SideMenu'];
        $Menu->AddLink('Add-ons', 'Latest Post List', 'plugin/latestpostlist', 'Garden.Settings.Manage');
    }

    // fired on install (once)
    public function Setup() {
        // Set up the plugin's default values
        SaveToConfig('Plugins.LatestPostList.Frequency', 120);
        SaveToConfig('Plugins.LatestPostList.Effects', 'none');
        SaveToConfig('Plugins.LatestPostList.Count', 5);
        SaveToConfig('Plugins.LatestPostList.Pages', 'all');
        SaveToConfig('Plugins.LatestPostList.Link', 'discussions');
    }

    // fired on disable (removal)
    public function OnDisable() {
        RemoveFromConfig('Plugins.LatestPostList.Frequency');
        RemoveFromConfig('Plugins.LatestPostList.Effects');
        RemoveFromConfig('Plugins.LatestPostList.Count');
        RemoveFromConfig('Plugins.LatestPostList.Pages');
        RemoveFromConfig('Plugins.LatestPostList.Link');
    }

}
