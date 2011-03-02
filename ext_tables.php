<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

/**
Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'grb_mobile'
);
**/

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/StaticFile'  , 'grb_mobile');

$tempColumns = array (
    'tx_grbmobile_show_only_on_mobile' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_mobile/Resources/Private/Language/locallang_db.xml:tt_content.tx_grbmobile_show_only_on_mobile',        
        'config' => array (
            'type' => 'check',
        )
    ),
    'tx_grbmobile_hide_on_mobile' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_mobile/Resources/Private/Language/locallang_db.xml:tt_content.tx_grbmobile_hide_on_mobile',        
        'config' => array (
            'type' => 'check',
        )
    ),
);


t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_content','tx_grbmobile_show_only_on_mobile;;;;1-1-1, tx_grbmobile_hide_on_mobile','','after:hide');
 
?>