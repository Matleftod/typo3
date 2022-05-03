<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'BeerNtmjm',
        'Pi1',
        [
            \Matleftod\BeerNtmjm\Controller\BeerController::class => 'list, show, search',
            \Matleftod\BeerNtmjm\Controller\ReviewController::class => 'new, create'
        ],
        // non-cacheable actions
        [
            \Matleftod\BeerNtmjm\Controller\BeerController::class => 'search',
            \Matleftod\BeerNtmjm\Controller\ReviewController::class => 'create'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'BeerNtmjm',
        'Pi2',
        [
            \Matleftod\BeerNtmjm\Controller\BeerController::class => 'focus'
        ],
        // non-cacheable actions
        [
            \Matleftod\BeerNtmjm\Controller\BeerController::class => '',
            \Matleftod\BeerNtmjm\Controller\ReviewController::class => 'create',
            \Matleftod\BeerNtmjm\Controller\BrandController::class => ''
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'BeerNtmjm',
        'Pi3',
        [
            \Matleftod\BeerNtmjm\Controller\BrandController::class => 'list'
        ],
        // non-cacheable actions
        [
            \Matleftod\BeerNtmjm\Controller\BeerController::class => '',
            \Matleftod\BeerNtmjm\Controller\ReviewController::class => 'create',
            \Matleftod\BeerNtmjm\Controller\BrandController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = beer_ntmjm-plugin-pi1
                        title = LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beer_ntmjm_pi1.name
                        description = LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beer_ntmjm_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = beerntmjm_pi1
                        }
                    }
                    pi2 {
                        iconIdentifier = beer_ntmjm-plugin-pi2
                        title = LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beer_ntmjm_pi2.name
                        description = LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beer_ntmjm_pi2.description
                        tt_content_defValues {
                            CType = list
                            list_type = beerntmjm_pi2
                        }
                    }
                    pi3 {
                        iconIdentifier = beer_ntmjm-plugin-pi3
                        title = LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beer_ntmjm_pi3.name
                        description = LLL:EXT:beer_ntmjm/Resources/Private/Language/locallang_db.xlf:tx_beer_ntmjm_pi3.description
                        tt_content_defValues {
                            CType = list
                            list_type = beerntmjm_pi3
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
