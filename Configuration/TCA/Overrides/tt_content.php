<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'SebastianChristoph.sc_feuserlist',
    'feuserlist',
    'Frontend Userliste',
    'EXT:sc_feuserlist/Resources/Public/Icons/user_plugin_feuserlist.svg'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'sc_feuserlist_feuserlist',
    'FILE:EXT:sc_feuserlist/Configuration/FlexForms/list.xml'
);