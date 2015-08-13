<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Schilke.' . $_EXTKEY,
	'Voices',
	array(
		'Konzertplan' => 'list, show',
		'Part' => 'list, show, addForm, add, edit, update, delete',
		'Konzert' => 'list, show',
		'Singer' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Konzertplan' => '',
		'Part' => 'add, update, delete',
		'Konzert' => '',
		'Singer' => '',
		
	)
);
