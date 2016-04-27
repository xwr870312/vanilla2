<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.2';

// Database
$Configuration['Database']['Name'] = 'vanilla_new';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = '';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';
$Configuration['EnabledApplications']['Yaga'] = 'yaga';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['CreativeCLEditor'] = true;
$Configuration['EnabledPlugins']['CustomHomepage'] = true;
$Configuration['EnabledPlugins']['CustomPages'] = true;
$Configuration['EnabledPlugins']['DiscussionEvent'] = true;
$Configuration['EnabledPlugins']['IndexPhotos'] = true;
$Configuration['EnabledPlugins']['EasyReply'] = true;
$Configuration['EnabledPlugins']['EmojiExtender'] = true;
$Configuration['EnabledPlugins']['Flagging'] = true;
$Configuration['EnabledPlugins']['GooglePlus'] = true;
$Configuration['EnabledPlugins']['Gravatar'] = true;
$Configuration['EnabledPlugins']['Groups'] = true;
$Configuration['EnabledPlugins']['HotThreads'] = true;
$Configuration['EnabledPlugins']['LatestPostList'] = true;
$Configuration['EnabledPlugins']['MembersListEnh'] = true;
$Configuration['EnabledPlugins']['Memberships'] = true;
$Configuration['EnabledPlugins']['ProfileExtender'] = true;
$Configuration['EnabledPlugins']['Quotes'] = true;
$Configuration['EnabledPlugins']['RecentActivity'] = true;
$Configuration['EnabledPlugins']['RegistrationGroup'] = true;
$Configuration['EnabledPlugins']['Tagging'] = true;
$Configuration['EnabledPlugins']['TopPosters'] = true;
$Configuration['EnabledPlugins']['Twitter'] = true;
$Configuration['EnabledPlugins']['VanillaStats'] = true;
$Configuration['EnabledPlugins']['vanillicon'] = true;
$Configuration['EnabledPlugins']['VSlider'] = true;
$Configuration['EnabledPlugins']['YagaDiscussionHeaderBadges'] = true;
$Configuration['EnabledPlugins']['Facebook'] = true;

// Garden
$Configuration['Garden']['Title'] = 'Vanilla 2';
$Configuration['Garden']['Cookie']['Salt'] = 'oGBpHe7rEputKcH9';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Approval';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6Lcgch4TAAAAAIuHEAKDU9Lo_Be8DK87sQ58ZJjQ';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6Lcgch4TAAAAAC8yULwFARrPtBjDBe-WOzIjFLHS';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Registration']['SendConnectEmail'] = false;
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla 2';
$Configuration['Garden']['Email']['SupportAddress'] = 'im.ryanxue@gmail.com';
$Configuration['Garden']['Email']['UseSmtp'] = '1';
$Configuration['Garden']['Email']['SmtpHost'] = 'smtp.gmail.com';
$Configuration['Garden']['Email']['SmtpUser'] = 'im.ryanxue@gmail.com';
$Configuration['Garden']['Email']['SmtpPassword'] = 'Xwr19870312';
$Configuration['Garden']['Email']['SmtpPort'] = '25';
$Configuration['Garden']['Email']['SmtpSecurity'] = 'tls';
$Configuration['Garden']['SystemUserID'] = 1;
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Version'] = '2.2';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['Theme'] = 'bittersweet';
$Configuration['Garden']['Html']['SafeStyles'] = false;
$Configuration['Garden']['HomepageTitle'] = 'Vanilla 2';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['Logo'] = 'N7NSMRF4VVJV.jpg';
$Configuration['Garden']['FavIcon'] = 'favicon_908a379a42533c69.ico';
$Configuration['Garden']['Analytics']['AllowLocal'] = true;
$Configuration['Garden']['InstallationID'] = '5BB7-CB0D1289-8FFB449B';
$Configuration['Garden']['InstallationSecret'] = 'e31ad384aa76104d03960ccd60ab91f6db66872c';

// Plugin
$Configuration['Plugin']['HotThreads']['HideIfEmpty'] = '1';
$Configuration['Plugin']['HotThreads']['AutoUpdateDelay'] = '120';
$Configuration['Plugin']['HotThreads']['MaxEntriesToDisplay'] = '10';
$Configuration['Plugin']['HotThreads']['DisplayPageSet'] = 'all';
$Configuration['Plugin']['HotThreads']['AgeThreshold'] = '30';
$Configuration['Plugin']['HotThreads']['ViewsThreshold'] = '1';
$Configuration['Plugin']['HotThreads']['CommentsThreshold'] = '0';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['DiscussionEvent']['DisplayInSidepanel'] = true;
$Configuration['Plugins']['DiscussionEvent']['MaxDiscussionEvents'] = 10;
$Configuration['Plugins']['Groups']['Enabled'] = true;
$Configuration['Plugins']['LatestPostList']['Frequency'] = 120;
$Configuration['Plugins']['LatestPostList']['Effects'] = 'none';
$Configuration['Plugins']['LatestPostList']['Count'] = 5;
$Configuration['Plugins']['LatestPostList']['Pages'] = 'all';
$Configuration['Plugins']['LatestPostList']['Link'] = 'discussions';
$Configuration['Plugins']['Memberships']['Enabled'] = true;
$Configuration['Plugins']['Vanillicon']['Type'] = 'v2';
$Configuration['Plugins']['Facebook']['ApplicationID'] = '1759000574330736';
$Configuration['Plugins']['Facebook']['Secret'] = '6968ca381ad7a689563b8f892036e965';
$Configuration['Plugins']['Facebook']['UseFacebookNames'] = '1';
$Configuration['Plugins']['Facebook']['SocialSignIn'] = '1';
$Configuration['Plugins']['Facebook']['SocialReactions'] = false;
$Configuration['Plugins']['Facebook']['SocialSharing'] = false;
$Configuration['Plugins']['GooglePlus']['ClientID'] = '955199721175-reqqv0elvjq744n5hqiuob4e6npahi6r.apps.googleusercontent.com';
$Configuration['Plugins']['GooglePlus']['Secret'] = 'vXSw49cMjb9W9EKD-WBA6i50';
$Configuration['Plugins']['GooglePlus']['SocialReactions'] = '1';
$Configuration['Plugins']['GooglePlus']['SocialSharing'] = '1';
$Configuration['Plugins']['GooglePlus']['UseAvatars'] = '1';
$Configuration['Plugins']['GooglePlus']['Default'] = '';
$Configuration['Plugins']['Twitter']['ConsumerKey'] = 'SWUsxwcR21H4B0Dqu1RLbeV3T';
$Configuration['Plugins']['Twitter']['Secret'] = 'wHFMOtKsr9aUw62WkrW39h30ETDK5IuNlknUbQYSHWMSmVTyEi';
$Configuration['Plugins']['Twitter']['SocialSignIn'] = '1';
$Configuration['Plugins']['Twitter']['SocialReactions'] = '1';
$Configuration['Plugins']['Twitter']['SocialSharing'] = '1';

// ProfileExtender
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['FormType'] = 'DateOfBirth';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['Label'] = 'DateOfBirth';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['OnProfile'] = false;
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['Name'] = 'DateOfBirth';
$Configuration['ProfileExtender']['Fields']['FirstName']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['FirstName']['Label'] = 'First Name';
$Configuration['ProfileExtender']['Fields']['FirstName']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['FirstName']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['FirstName']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['FirstName']['OnProfile'] = false;
$Configuration['ProfileExtender']['Fields']['Surname']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['Surname']['Label'] = 'Surname';
$Configuration['ProfileExtender']['Fields']['Surname']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['Surname']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['Surname']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['Surname']['OnProfile'] = false;
$Configuration['ProfileExtender']['Fields']['School']['FormType'] = 'Dropdown';
$Configuration['ProfileExtender']['Fields']['School']['Label'] = 'School';
$Configuration['ProfileExtender']['Fields']['School']['Options'] = array('Albany Senior High School', 'Albany Secondary Ed Sup Ctre', 'All Saints College', 'Alta-1 College', 'Applecross Senior High School', 'Aquinas College', 'Aranmore Catholic College', 'Armadale Christian College', 'Armadale Education Support Centre', 'Armadale Senior High School', 'Ashdale Secondary College', 'Atwell College', 'Australian Christian College - Southlands', 'Australian Islamic College - Kewdale', 'Australian Islamic College - North', 'Australian Islamic College - Perth', 'Australian Technical College - Perth', 'Australind Senior High School', 'Balcatta Senior High School', 'Balga Senior High School', 'Ballajura Community College', 'Belmont City College', 'Belridge Senior High School', 'Bethel Christian School', 'Bible Baptist Christian Academy', 'Birlirr Ngawiyiwu Catholic School', 'Boddington District High School', 'Bridgetown High School', 'Brookton District High School', 'Broome Senior High School', 'Bullsbrook District High School', 'Bunbury Cathedral Grammar School', 'Bunbury Catholic College', 'Bunbury Senior High School', 'Burbridge School', 'Burringurrah Remote Community School', 'Busselton Senior High School', 'Canning College', 'Cannington Community College', 'Canning Vale College', 'Cape Naturaliste College', 'Career Enterprise Centre', 'Carey Baptist College', 'Carine Senior High School', 'Carmel Adventist College', 'Carmel School', 'Carnamah District High School', 'Carnarvon Senior High School', 'Castlereagh School', 'Catholic Agricultural College Bindoon', 'Cecil Andrews Senior High School', 'Central Midlands Senior High School', 'Chisholm Catholic College', 'Christ Church Grammar School', 'Christian Aboriginal Pd School', 'Christian Brothers Agricultural School', 'Christian Brothers College Fremantle', 'Christmas Island District High School', 'Churchlands Senior High School', 'Clarkson Community High School', 'Clontarf Aboriginal College', 'Cocos Island District High School', 'Collie Catholic College', 'Collie Senior High School', 'Comet Bay College', 'Como Secondary College', 'Coodanup Community College', 'Cornerstone Christian College', 'Corpus Christi College', 'Corridors College', 'Corrigin District High School', 'Cue Primary School', 'Cyril Jackson Senior Campus', 'Dale Christan School', 'Dalwallinu District High School', 'Dalyellup College', 'Darling Range Sports College', 'Dawul Remote Community School', 'Denmark High School', 'Derby District High School', 'Divine Mercy College (Yangebup)', 'Dongara District High School', 'Donnybrook District High School', 'Duncraig Senior High School', 'Durham Road School', 'Eastern Goldfields College', 'Eastern Hills Senior High School', 'Eaton Community College', 'El Shaddai College (The Kings College)', 'Ellenbrook Christian College', 'Ellenbrook Secondary College', 'Emmanuel Catholic College', 'Esperance Anglican Community School', 'Esperance Senior High School', 'Exmouth District High School', 'Fitzroy Valley District High School', 'Foundation Christian College', 'Frederick Irwin Anglican School', 'Gascoyne Junction Remote Comm School', 'Georgiana Molloy Anglican School', 'Geraldton Grammar School', 'Geraldton Senior College', 'Gilmore College', 'Gingin District High School', 'Girrawheen Senior High School', 'Gladys Newton School', 'Gnowangerup District High School', 'Goldfields Baptist College', 'Governor Stirling Senior High School', 'Grace Christian School', 'Great Southern Grammar', 'Greenwood Senior High School', 'Guildford Grammar School', 'Hale School', 'Halls Creek District High School', 'Halls Head Community College', 'Hamilton Senior High School', 'Hampton Senior High School', 'Harvey Senior High School', 'Hedland Senior High School', 'Helena College Senior School', 'Heritage College', 'Hillside Christian College', 'Holland Street School', 'Holy Cross Catholic College', 'Hope Christian College', 'Hospital School Services', 'International School of WA', 'Iona Presentation College', 'Irene McCormack Catholic College', 'Jigalong Remote Community School', 'John Calvin Christian College', 'John Curtin College of the Arts', 'John Forrest Senior High School', 'John Paul College', 'John Septimus Roe Anglican Community School', 'John Tonkin College', 'John Wollaston Anglican Community School', 'John XXIII College', 'John Willcock College', 'Jurien Bay District High School', 'Kalamunda Senior High School', 'Kalbarri District High School', 'Kalgoorlie-Boulder Community High School', 'Kalumburu Remote Community School', 'Kambalda West District High School', 'Karalundi Aboriginal Education Centre', 'Karratha Senior High School', 'Katanning Senior High School', 'Kearnan College', 'Kelmscott Senior High School', 'Kennedy Baptist College', 'Kensington Secondary School', 'Kent Street Senior High School', 'Kenwick School', 'Kids Open Learning School', 'Kingsway Christian College', 'Kinross College', 'Kojonup District High School', 'Kolbe Catholic College', 'Kulkarriya Community School', 'Kununurra District High School', 'Kwinana Christian School', 'La Grange Remote Community School', 'La Salle College', 'Lake Grace District High School', 'Lake Joondalup Baptist College', 'Lakeland Senior High School', 'Langford Islamic College', 'Leeming Senior High School', 'Leonora District High School', 'Lesmurdie Senior High School', 'Living Waters Lutheran College', 'Lockridge Senior High School', 'Looma Remote Community School', 'Lumen Christi College', 'Lynwood Senior High School', 'MacKillop Catholic College', 'Malibu School', 'Mandurah Baptist College', 'Mandurah Catholic College', 'Mandurah Senior College', 'Manea Senior College', 'Manjimup Senior High School', 'Maranatha Christian College', 'Marble Bar Primary School', 'Margaret River Senior High School', 'Mater Dei College', 'Mazenod College', 'Meekatharra District High School', 'Melville Senior High School', 'Mercedes College', 'Mercy College', 'Merredin Senior High School', 'Methodist Ladies College', 'Mindarie Senior College', 'Mirrabooka Senior High School', 'Morawa District High School', 'Morley Senior High School', 'Mount Barker Community College', 'Mount Lawley Senior High School', 'Mount Magnet District High School', 'Mukinbudin District High School', 'Mullewa District High School', 'Mundaring Christian College', 'Murdoch College', 'Muslim Ladies College of Australia', 'Nagle Catholic College', 'Narembeen District High School', 'Narrogin Senior High School', 'Newman College', 'Newman Senior High School', 'Newton Moore Senior High School', 'Ngurrawaana Remote Community School', 'Nollamara Christian Academy', 'Norseman District High School', 'North Albany Senior High School', 'North Lake Senior Campus', 'Northam Senior High School', 'Northcliffe District High School', 'Nullagine Primary School', 'Ocean Forest Lutheran College', 'Ocean Reef Senior High School', 'One Arm Point Remote Community School', 'Oombulgurri Remote Community School', 'Padbury Senior High School', 'Pannawonica Primary School', 'Parnngurr Community School', 'Pemberton District High School', 'Penrhos College', 'Perth College', 'Perth Modern School', 'Perth Waldorf School', 'Peter Carnley Anglican Community School', 'Peter Moyes Anglican Community School', 'Phoenix West Vocational College', 'Pia Wadjarri Remote Community School', 'Pinjarra Senior High School', 'Port School', 'Prendiville Catholic College', 'Presbyterian Ladies College', 'Quairading District High School', 'Quinns Baptist College', 'Ravensthorpe District High School', 'Rawa Community School', 'Redlynch State College', 'Rehoboth Christian College', 'Rockingham Senior High School', 'Roebourne District High School', 'Rossmoyne Senior High School', 'Roleystone District High School', 'Sacred Heart College', 'Safety Bay Senior High School', 'Santa Maria College', 'Schools of Isolated and Distance Education', 'Scotch College', 'Serpentine Jarrahdale Grammar School', 'Servite College', 'Seton Catholic College', 'Sevenoaks Senior College', 'Shark Bay Primary School', 'Shenton College', 'Shenton College Deaf Education Centre', 'Sir David Brand School', 'Somerville Baptist College', 'South Fremantle Senior High School', 'Southern Cross District High School', 'Southern River College', 'Sowilo Community High School', 'St Andrews Grammar', 'St Augustines School', 'St Brigids College', 'St Clares School', 'St Hildas Anglican School for Girls', 'St Josephs College', 'St Lukes College', 'St Marks Anglican Community School', 'St Marys Anglican Girls School', 'St Marys College', 'St Norbert College', 'St Pauls Grammar School', 'St Stephens School - Carramar', 'St Stephens School - Duncraig', 'Strathalbyn Christian College', 'Strelley Community School', 'Swan Christian College', 'Swan Valley Anglican Community School', 'Swan View Senior High School', 'Taylors College (Claremont)', 'The Kings College', 'The Montessori School', 'Thornlie Christian College', 'Thornlie Senior High School', 'Tjuntjunjara Remote Community School', 'Tom Price Senior High School', 'Tranby College', 'Treetops Montessori School', 'Trinity College', 'Tuart College', 'Ursula Frayne Catholic College', 'WA College of Agriculture - Cunderdin', 'WA College of Agriculture - Denmark', 'WA College of Agriculture - Harvey', 'WA College of Agriculture - Morawa', 'WA College of Agriculture - Narrogin', 'Wagin District High School', 'Wananami Remote Community School', 'Wangkatjungka Remote Community School', 'Wanneroo Senior High School', 'Warnbro Community High School', 'Warwick Senior High School', 'Wesley College', 'Willetton Senior High School', 'Wiluna Remote Community School', 'Winthrop Baptist College', 'Wongutha Christian Aboriginal Parent Directed School', 'Woodthorpe Drive Secondary School', 'Woodvale Senior High School', 'Wyalkatchem District High School', 'Wyndham District High School', 'Yanchep District High School', 'Yandeyarra Remote Community School', 'Yiyili Aboriginal Community School', 'York District High School', 'Yule Brook College', 'Other');
$Configuration['ProfileExtender']['Fields']['School']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['School']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['School']['OnProfile'] = false;
$Configuration['ProfileExtender']['Fields']['WhatYearofSchoolareyouin']['FormType'] = 'Dropdown';
$Configuration['ProfileExtender']['Fields']['WhatYearofSchoolareyouin']['Label'] = 'What Year of School are you in?';
$Configuration['ProfileExtender']['Fields']['WhatYearofSchoolareyouin']['Options'] = array('Other', 'Year 10', 'Year 11', 'Year 12');
$Configuration['ProfileExtender']['Fields']['WhatYearofSchoolareyouin']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['WhatYearofSchoolareyouin']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['WhatYearofSchoolareyouin']['OnProfile'] = false;
$Configuration['ProfileExtender']['Fields']['WhatisyourSCSAnumber']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['WhatisyourSCSAnumber']['Label'] = 'What is your SCSA number?';
$Configuration['ProfileExtender']['Fields']['WhatisyourSCSAnumber']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['WhatisyourSCSAnumber']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['WhatisyourSCSAnumber']['Required'] = false;
$Configuration['ProfileExtender']['Fields']['WhatisyourSCSAnumber']['OnProfile'] = false;

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';
$Configuration['Routes']['Xm1lbWJlcnMoLy4qKT8k'] = array('plugin/MembersListEnh$1', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.2';

// Yaga
$Configuration['Yaga']['Version'] = '1.1';

// Last edited by admin (127.0.0.1)2016-04-27 08:46:44