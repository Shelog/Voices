<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_voices_domain_model_part'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_voices_domain_model_part']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ja, nein, vielleicht, comment, konzert, singer',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, ja, nein, vielleicht, comment, konzert, singer, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_voices_domain_model_part',
				'foreign_table_where' => 'AND tx_voices_domain_model_part.pid=###CURRENT_PID### AND tx_voices_domain_model_part.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'ja' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_part.ja',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'nein' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_part.nein',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'vielleicht' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_part.vielleicht',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'comment' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_part.comment',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'konzert' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_part.konzert',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_voices_domain_model_konzert',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'singer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:voices/Resources/Private/Language/locallang_db.xlf:tx_voices_domain_model_part.singer',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_voices_domain_model_singer',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
		'konzert' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
