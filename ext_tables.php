<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_beerntmjm_domain_model_beer', 'EXT:beer_ntmjm/Resources/Private/Language/locallang_csh_tx_beerntmjm_domain_model_beer.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beerntmjm_domain_model_beer');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_beerntmjm_domain_model_type', 'EXT:beer_ntmjm/Resources/Private/Language/locallang_csh_tx_beerntmjm_domain_model_type.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beerntmjm_domain_model_type');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_beerntmjm_domain_model_ingredient', 'EXT:beer_ntmjm/Resources/Private/Language/locallang_csh_tx_beerntmjm_domain_model_ingredient.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beerntmjm_domain_model_ingredient');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_beerntmjm_domain_model_country', 'EXT:beer_ntmjm/Resources/Private/Language/locallang_csh_tx_beerntmjm_domain_model_country.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beerntmjm_domain_model_country');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_beerntmjm_domain_model_review', 'EXT:beer_ntmjm/Resources/Private/Language/locallang_csh_tx_beerntmjm_domain_model_review.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beerntmjm_domain_model_review');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_beerntmjm_domain_model_brand', 'EXT:beer_ntmjm/Resources/Private/Language/locallang_csh_tx_beerntmjm_domain_model_brand.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beerntmjm_domain_model_brand');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_beerntmjm_domain_model_theme', 'EXT:beer_ntmjm/Resources/Private/Language/locallang_csh_tx_beerntmjm_domain_model_theme.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beerntmjm_domain_model_theme');
})();
