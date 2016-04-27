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

class LatestPostListModule extends Gdn_Module {

    protected $_LatestPosts;
    protected $_Link = 'discussions';

    public function __construct($Sender = '') {
        $this->SetData(
                C('Plugins.LatestPostList.Count', 5),
                C('Plugins.LatestPostList.Link', 'discussions') );
        parent::__construct($Sender);
    }

    // Using the discussion model makes my life easy
    public function SetData($Limit = 5, $Link = 'discussions') {
        $DiscussionModel = new DiscussionModel();
        $this->_LatestPosts = $DiscussionModel->Get(0, $Limit, 'all');
        $this->_Link = $Link;
    }

    // Required for modules. Tells the controller where to render the module.
    public function AssetTarget() {
        if ($_SERVER['PHP_SELF'].'?'.$_SERVER["QUERY_STRING"] == '/vanilla/index.php?p=/plugin/page/topnews'){
            return 'Content';
        }
        else {
            return 'Panel';
        }
    }

    // Convenience function used to mark the lists date
    public function GetDate() {
        if ($this->_LatestPosts->NumRows() < 1) {
            return 0;
        }
        $Posts = $this->_LatestPosts->Result();
        return $Posts[0]->DateLastComment;
    }

    // Returns an html string ready for rendering
  /**  public function PostList() {
        $Posts = '';
        if ($this->_LatestPosts->NumRows() >= 1) {
            foreach ($this->_LatestPosts->Result() as $Post) {
                $PostTitle = Anchor(Gdn_Format::Text($Post->Name), 'discussion/' . $Post->DiscussionID . '/' . Gdn_Format::Url($Post->Name) . '#latest', 'PostTitle');

                // If there is a comment, let's use that, otherwise use the original poster
                if ($Post->LastName) {
                    $LastPoster = Anchor(Gdn_Format::Text($Post->LastName), 'profile/' . $Post->LastUserID . '/' . Gdn_Format::Url($Post->LastName), 'PostAuthor');
                } else {
                    $LastPoster = Anchor(Gdn_Format::Text($Post->FirstName), 'profile/' . $Post->InsertUserID . '/' . Gdn_Format::Url($Post->FirstName), 'PostAuthor');
                }
                $Posttest='posted a discussion';
                //$PostData = Wrap(T('on ') . Gdn_Format::Date($Post->DateLastComment), 'span', array('class' => 'PostDate'));
                // $Posts .= Wrap($PostTitle . Wrap($LastPoster . ' ' . $PostData, 'div', array('class' => 'Condensed')), 'li', array('class' => ($Post->CountUnreadComments > 0) ? 'New' : ''));
                $Posts .= Wrap($LastPoster . Wrap( $Posttest .'</br>'.$Post->CountCommentWatch.'</br>'.$PostTitle.'</br>'.Gdn_Format::Date($Post->DateLastComment), 'div', array('class' => 'Condensed')), 'li', array('class' => ($Post->CountUnreadComments > 0) ? 'New' : ''));
            }
        }
        return $Posts;
    } **/

    // Returns an html string ready for rendering
    public function PostList() {
        $Posts = '';
        $Postdiscussion='posted a discussion';
        if ($this->_LatestPosts->NumRows() >= 1) {
            foreach ($this->_LatestPosts->Result() as $Post) {
                $PostTitle = Anchor(Gdn_Format::Text($Post->Name), 'discussion/' . $Post->DiscussionID . '/' . Gdn_Format::Url($Post->Name) . '#latest', 'PostTitle');

                // If there is a comment, let's use that, otherwise use the original poster
                if ($Post->LastName) {
                    $LastPoster = Anchor(Gdn_Format::Text($Post->LastName), 'profile/' . $Post->LastUserID . '/' . Gdn_Format::Url($Post->LastName), 'PostAuthor');
                    $FirstPoster = Anchor(Gdn_Format::Text($Post->FirstName), 'profile/' . $Post->FirsttUserID . '/' . Gdn_Format::Url($Post->FirstName), 'PostAuthor');
                    $Posts .= Wrap($LastPoster . Wrap( 'Reply to '.$FirstPoster.'\'s discussion'.'</br>'.$PostTitle.'</br>'.Gdn_Format::Date($Post->DateLastComment), 'div', array('class' => 'Condensed')), 'li', array('class' => ($Post->CountUnreadComments > 0) ? 'New' : ''));
                } else {
                    $LastPoster = Anchor(Gdn_Format::Text($Post->FirstName), 'profile/' . $Post->InsertUserID . '/' . Gdn_Format::Url($Post->FirstName), 'PostAuthor');
                    $FirstPoster = Anchor(Gdn_Format::Text($Post->FirstName), 'profile/' . $Post->FirsttUserID . '/' . Gdn_Format::Url($Post->FirstName), 'PostAuthor');
                    $Posts .= Wrap($LastPoster . Wrap( $Postdiscussion .'</br>'.$PostTitle.'</br>'.Gdn_Format::Date($Post->DateLastComment), 'div', array('class' => 'Condensed')), 'li', array('class' => ($Post->CountUnreadComments > 0) ? 'New' : ''));
                }
                
                //$PostData = Wrap(T('on ') . Gdn_Format::Date($Post->DateLastComment), 'span', array('class' => 'PostDate'));
                // $Posts .= Wrap($PostTitle . Wrap($LastPoster . ' ' . $PostData, 'div', array('class' => 'Condensed')), 'li', array('class' => ($Post->CountUnreadComments > 0) ? 'New' : ''));
                //$Posts .= Wrap($LastPoster . Wrap( $Postdiscussion .'</br>'.$Post->CountCommentWatch.'</br>'.$PostTitle.'</br>'.Gdn_Format::Date($Post->DateLastComment), 'div', array('class' => 'Condensed')), 'li', array('class' => ($Post->CountUnreadComments > 0) ? 'New' : ''));
            }
        }
        return $Posts;
    }

    // Required for module to render something
    public function ToString() {
        $String = '';
        if ($this->_LatestPosts->NumRows() >= 1) {
            ob_start();
            ?>
            <div id="LatestPostList" class="Box"><?php
                if ($this->_Link) {
                    echo Wrap(Anchor(T('Top News'), 'plugin/page/topnews').' · Everything', 'p style="font-size:100%;"');
                } else {
                    echo Wrap(T('Top News').' · Everything', 'h3');
                }

                echo Wrap($this->PostList(), 'ul', array('id' => 'LPLUl', 'class' => 'PanelInfo'));
                ?>
            </div>
            <?php
            $String = ob_get_contents();
            @ob_end_clean();
            return $String;
        }
        return $String;
    }

}
