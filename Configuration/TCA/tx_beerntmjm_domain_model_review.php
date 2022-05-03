<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beerntmjm_domain_model_review',
        'label' => 'content',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'content,username',
        'iconfile' => 'EXT:beer_ntmjm/Resources/Public/Icons/tx_beerntmjm_domain_model_review.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'content, mark, username, date, validated, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_beerntmjm_domain_model_review',
                'foreign_table_where' => 'AND {#tx_beerntmjm_domain_model_review}.{#pid}=###CURRENT_PID### AND {#tx_beerntmjm_domain_model_review}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'content' => [
            'exclude' => true,
            'label' => 'LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beerntmjm_domain_model_review.content',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'mark' => [
            'exclude' => true,
            'label' => 'LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beerntmjm_domain_model_review.mark',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required',
                'default' => 0
            ]
        ],
        'username' => [
            'exclude' => true,
            'label' => 'LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beerntmjm_domain_model_review.username',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beerntmjm_domain_model_review.date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 10,
                'eval' => 'datetime',
                'default' => time()
            ],
        ],
        'validated' => [
            'exclude' => true,
            'label' => 'LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beerntmjm_domain_model_review.validated',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
    
        'beer' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
