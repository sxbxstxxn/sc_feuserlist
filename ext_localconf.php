<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'sc_feuserlist.sc_feuserlist',
    'Pi1',
    [
        'sc_feuserlist' => 'list',
    ],
    // non-cacheable actions
    [
        'sc_feuserlist' => 'list',
    ]
);