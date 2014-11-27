<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "templatedisplay".
 *
 * Auto generated 27-11-2014 10:38
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'HTML-based Data Consumer - Tesseract project',
	'description' => 'Use HTML-based templates to display any kind of data returned by a Data Provider, thanks a to user-friendly mapping interface. More info on http://www.typo3-tesseract.com',
	'category' => 'fe',
	'author' => 'Francois Suter (Cobweb) / Fabien Udriot',
	'author_email' => 'typo3@cobweb.ch',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'author_company' => '',
	'version' => '1.8.0',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '4.5.0-6.2.99',
			'tesseract' => '1.7.0-0.0.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:78:{s:9:"ChangeLog";s:4:"683f";s:10:"README.txt";s:4:"db38";s:28:"class.tx_templatedisplay.php";s:4:"4893";s:33:"class.tx_templatedisplay_ajax.php";s:4:"dfd5";s:37:"class.tx_templatedisplay_tceforms.php";s:4:"6a8c";s:16:"ext_autoload.php";s:4:"a833";s:12:"ext_icon.gif";s:4:"e0c8";s:12:"ext_icon.png";s:4:"aaa6";s:17:"ext_localconf.php";s:4:"a2ba";s:14:"ext_tables.php";s:4:"db33";s:14:"ext_tables.sql";s:4:"45d3";s:36:"icon_tx_templatedisplay_displays.png";s:4:"3dbb";s:7:"tca.php";s:4:"45cc";s:15:"wizard_icon.gif";s:4:"3075";s:39:"Classes/Service/SoftReferenceParser.php";s:4:"a9b6";s:26:"Documentation/Includes.txt";s:4:"c83c";s:23:"Documentation/Index.rst";s:4:"e294";s:26:"Documentation/Settings.yml";s:4:"e8d7";s:25:"Documentation/Targets.rst";s:4:"cc7b";s:37:"Documentation/Configuration/Index.rst";s:4:"0d20";s:54:"Documentation/Configuration/AvailableMarkers/Index.rst";s:4:"84e0";s:50:"Documentation/Configuration/ElementTypes/Index.rst";s:4:"3bef";s:50:"Documentation/Configuration/HtmlTemplate/Index.rst";s:4:"4c98";s:34:"Documentation/Developers/Index.rst";s:4:"18df";s:46:"Documentation/Developers/CustomTypes/Index.rst";s:4:"b389";s:40:"Documentation/Developers/Hooks/Index.rst";s:4:"07ff";s:44:"Documentation/Images/ElementTypeSelector.png";s:4:"c0e8";s:41:"Documentation/Images/MappingIterfance.png";s:4:"89e2";s:42:"Documentation/Images/MappingTypoScript.png";s:4:"f3db";s:36:"Documentation/Installation/Index.rst";s:4:"1785";s:36:"Documentation/Introduction/Index.rst";s:4:"5b73";s:35:"Documentation/KnownIssues/Index.rst";s:4:"209e";s:47:"Documentation/TyposcriptConfiguration/Index.rst";s:4:"63a2";s:64:"Documentation/TyposcriptConfiguration/DefaultRendering/Index.rst";s:4:"fc0a";s:61:"Documentation/TyposcriptConfiguration/OtherExamples/Index.rst";s:4:"c4c5";s:57:"Documentation/TyposcriptConfiguration/Reference/Index.rst";s:4:"9a60";s:70:"Resources/Private/Language/locallang_csh_txtemplatedisplaydisplays.xml";s:4:"5e33";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"359a";s:39:"Resources/Private/Snippets/snippets.xml";s:4:"c231";s:48:"Resources/Private/Templates/templatedisplay.html";s:4:"496c";s:34:"Resources/Public/images/accept.png";s:4:"036a";s:33:"Resources/Public/images/email.png";s:4:"e7f6";s:33:"Resources/Public/images/empty.png";s:4:"81a2";s:33:"Resources/Public/images/error.png";s:4:"c847";s:39:"Resources/Public/images/exclamation.png";s:4:"1ee9";s:33:"Resources/Public/images/files.png";s:4:"596d";s:33:"Resources/Public/images/image.png";s:4:"c2fe";s:41:"Resources/Public/images/imageResource.png";s:4:"d928";s:32:"Resources/Public/images/link.png";s:4:"49be";s:40:"Resources/Public/images/linkToDetail.png";s:4:"49be";s:38:"Resources/Public/images/linkToFile.png";s:4:"49be";s:38:"Resources/Public/images/linkToPage.png";s:4:"49be";s:35:"Resources/Public/images/loading.gif";s:4:"9c92";s:47:"Resources/Public/images/mappings_screenshot.png";s:4:"b9fb";s:33:"Resources/Public/images/media.png";s:4:"5ad1";s:41:"Resources/Public/images/missing_image.png";s:4:"279d";s:38:"Resources/Public/images/paintbrush.png";s:4:"247e";s:34:"Resources/Public/images/pencil.png";s:4:"a34e";s:31:"Resources/Public/images/raw.png";s:4:"dfcf";s:35:"Resources/Public/images/records.png";s:4:"655c";s:36:"Resources/Public/images/richtext.png";s:4:"97d0";s:36:"Resources/Public/images/tag_blue.png";s:4:"0824";s:37:"Resources/Public/images/tag_green.png";s:4:"8205";s:38:"Resources/Public/images/tag_orange.png";s:4:"97ce";s:36:"Resources/Public/images/tag_pink.png";s:4:"30f8";s:38:"Resources/Public/images/tag_purple.png";s:4:"af7c";s:35:"Resources/Public/images/tag_red.png";s:4:"5d63";s:38:"Resources/Public/images/tag_yellow.png";s:4:"c8a1";s:32:"Resources/Public/images/text.png";s:4:"2039";s:35:"Resources/Public/images/unknown.png";s:4:"b6ee";s:32:"Resources/Public/images/user.png";s:4:"3d3c";s:42:"Resources/Public/javascripts/formatJson.js";s:4:"15f6";s:47:"Resources/Public/javascripts/templatedisplay.js";s:4:"d284";s:48:"Resources/Public/stylesheets/templatedisplay.css";s:4:"3d4d";s:54:"interfaces/interface.tx_templatedisplay_customtype.php";s:4:"b174";s:41:"samples/class.tx_templatedisplay_hook.php";s:4:"24a5";s:46:"samples/class.tx_templatedisplay_phonetype.php";s:4:"7ec2";s:16:"static/setup.txt";s:4:"d038";}',
	'user' => 'francois',
	'comment' => 'Fixed bug with numerical markers in IF conditions; added multiple parameters capability to user functions; moved documentation to reST.',
);

