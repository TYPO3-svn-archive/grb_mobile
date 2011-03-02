<?php

########################################################################
# Extension Manager/Repository config file for ext "grb_mobile".
#
# Auto generated 28-02-2011 08:35
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'grb_mobile',
	'description' => 'Mobile-Website',
	'category' => 'plugin',
	'author' => 'Juerg Langhard (CH)',
	'author_email' => 'langhard@greenbanana.ch',
	'author_company' => 'GreenBanana GmbH - www.greenbanana.ch',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.7',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:60:{s:21:"ext_conf_template.txt";s:4:"ebbf";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"553a";s:14:"ext_tables.php";s:4:"0833";s:14:"ext_tables.sql";s:4:"881c";s:16:"kickstarter.json";s:4:"af1c";s:34:"Classes/Service/user_grbmobile.php";s:4:"0971";s:45:"Configuration/TypoScript/config/constants.txt";s:4:"0e53";s:41:"Configuration/TypoScript/config/setup.txt";s:4:"c7b0";s:43:"Configuration/TypoScript/config/setup__.txt";s:4:"0c9e";s:62:"Configuration/TypoScript/Extensions/html5videoplayer/setup.txt";s:4:"9d0e";s:83:"Configuration/TypoScript/Extensions/templavoila/grb_mobile.records.mobile.slide.txt";s:4:"8a44";s:77:"Configuration/TypoScript/Extensions/templavoila/grb_mobile.records.mobile.txt";s:4:"7c94";s:76:"Configuration/TypoScript/Extensions/templavoila/grb_mobile.records.slide.txt";s:4:"d905";s:70:"Configuration/TypoScript/Extensions/templavoila/grb_mobile.records.txt";s:4:"ebbb";s:57:"Configuration/TypoScript/Extensions/tt_news/constants.txt";s:4:"e826";s:53:"Configuration/TypoScript/Extensions/tt_news/setup.txt";s:4:"df40";s:63:"Configuration/TypoScript/lib/grb_mobile.footercontent/setup.txt";s:4:"c0d4";s:59:"Configuration/TypoScript/lib/grb_mobile.footernav/setup.txt";s:4:"1d53";s:57:"Configuration/TypoScript/lib/grb_mobile.langnav/setup.txt";s:4:"1da9";s:54:"Configuration/TypoScript/lib/grb_mobile.logo/setup.txt";s:4:"691d";s:58:"Configuration/TypoScript/lib/grb_mobile.morelink/setup.txt";s:4:"6008";s:53:"Configuration/TypoScript/lib/grb_mobile.nav/setup.txt";s:4:"ba7f";s:59:"Configuration/TypoScript/lib/grb_mobile.selectnav/setup.txt";s:4:"db76";s:59:"Configuration/TypoScript/lib/grb_mobile.switchnav/setup.txt";s:4:"7a38";s:39:"Configuration/TypoScript/page/setup.txt";s:4:"ed33";s:49:"Configuration/TypoScript/StaticFile/constants.txt";s:4:"8494";s:45:"Configuration/TypoScript/StaticFile/setup.txt";s:4:"224d";s:53:"Configuration/TypoScript/styles.content/constants.txt";s:4:"c2ed";s:44:"Configuration/TypoScript/TsCleaner/setup.txt";s:4:"d41d";s:52:"Configuration/TypoScript/TsTemplate/pageTsConfig.txt";s:4:"37ae";s:40:"Resources/Private/Language/locallang.xml";s:4:"3d2e";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"b1b0";s:41:"Resources/Private/Layouts/grb_mobile.html";s:4:"4fc8";s:57:"Resources/Public/CSS/grb_mobile-moreslider-nonemobile.css";s:4:"4129";s:46:"Resources/Public/CSS/grb_mobile-moreslider.css";s:4:"2b14";s:35:"Resources/Public/CSS/grb_mobile.css";s:4:"814c";s:47:"Resources/Public/Icons/icon_mobile_darkgray.png";s:4:"31a8";s:44:"Resources/Public/Icons/icon_mobile_white.png";s:4:"5d31";s:63:"Resources/Public/JavaScripts/grb_mobile-jquery.mobile.custom.js";s:4:"6784";s:53:"Resources/Public/JavaScripts/grb_mobile-moreslider.js";s:4:"62c0";s:55:"Resources/Public/JavaScripts/grb_mobile-showdialogJs.js";s:4:"ecc6";s:51:"Resources/Public/JavaScripts/jquery/jquery-1.4.4.js";s:4:"ede3";s:55:"Resources/Public/JavaScripts/jquery/jquery-1.4.4.min.js";s:4:"73a9";s:63:"Resources/Public/JavaScripts/jquery.cookie/jquery.cookie-1.0.js";s:4:"3847";s:66:"Resources/Public/JavaScripts/jquery.mobile/jquery.mobile-1.0a2.css";s:4:"91d1";s:65:"Resources/Public/JavaScripts/jquery.mobile/jquery.mobile-1.0a2.js";s:4:"ad88";s:70:"Resources/Public/JavaScripts/jquery.mobile/jquery.mobile-1.0a2.min.css";s:4:"361c";s:69:"Resources/Public/JavaScripts/jquery.mobile/jquery.mobile-1.0a2.min.js";s:4:"2df9";s:65:"Resources/Public/JavaScripts/jquery.mobile/images/ajax-loader.png";s:4:"5673";s:68:"Resources/Public/JavaScripts/jquery.mobile/images/form-check-off.png";s:4:"8075";s:67:"Resources/Public/JavaScripts/jquery.mobile/images/form-check-on.png";s:4:"344e";s:68:"Resources/Public/JavaScripts/jquery.mobile/images/form-radio-off.png";s:4:"cf8f";s:67:"Resources/Public/JavaScripts/jquery.mobile/images/form-radio-on.png";s:4:"b995";s:71:"Resources/Public/JavaScripts/jquery.mobile/images/icon-search-black.png";s:4:"9b2d";s:68:"Resources/Public/JavaScripts/jquery.mobile/images/icons-18-black.png";s:4:"0462";s:68:"Resources/Public/JavaScripts/jquery.mobile/images/icons-18-white.png";s:4:"6144";s:68:"Resources/Public/JavaScripts/jquery.mobile/images/icons-36-black.png";s:4:"c9b8";s:68:"Resources/Public/JavaScripts/jquery.mobile/images/icons-36-white.png";s:4:"b7cd";s:53:"Resources/Public/Templates/grb_mobile-moreslider.html";s:4:"e146";}',
);

?>