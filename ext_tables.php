<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Voices',
	'Konzertplan'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Voices');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_voices_domain_model_konzertplan', 'EXT:voices/Resources/Private/Language/locallang_csh_tx_voices_domain_model_konzertplan.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_voices_domain_model_konzertplan');
$GLOBALS['TCA']['tx_voices_domain_model_konzertplan'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_konzertplan',
		'label' => 'bezeichnung',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'bezeichnung,konzerts,singers,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Konzertplan.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_voices_domain_model_konzertplan.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_voices_domain_model_part', 'EXT:voices/Resources/Private/Language/locallang_csh_tx_voices_domain_model_part.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_voices_domain_model_part');
$GLOBALS['TCA']['tx_voices_domain_model_part'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_part',
		'label' => 'ja',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'ja,nein,vielleicht,comment,konzert,singer,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Part.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_voices_domain_model_part.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_voices_domain_model_konzert', 'EXT:voices/Resources/Private/Language/locallang_csh_tx_voices_domain_model_konzert.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_voices_domain_model_konzert');
$GLOBALS['TCA']['tx_voices_domain_model_konzert'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_konzert',
		'label' => 'datum',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'datum,beginn,place,address,remark,leitung_r,leitun_l,zusagen,absagen,vielleichts,parts,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Konzert.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_voices_domain_model_konzert.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_voices_domain_model_singer', 'EXT:voices/Resources/Private/Language/locallang_csh_tx_voices_domain_model_singer.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_voices_domain_model_singer');
$GLOBALS['TCA']['tx_voices_domain_model_singer'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_singer',
		'label' => 'nachname',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'nachname,vorname,stimme,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Singer.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_voices_domain_model_singer.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_voices_domain_model_singer'
);
