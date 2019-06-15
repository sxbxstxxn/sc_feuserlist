<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Scvendor.Scextensionkey',
            'Pluginkey',
            'Pluginname'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('scextensionkey', 'Configuration/TypoScript', 'sctitle');

    }
);
