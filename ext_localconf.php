<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Scvendor.Scextensionkey',
            'Pluginkey',
            [
                
            ],
            // non-cacheable actions
            [
                
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pluginkey {
                        iconIdentifier = scextensionkey-plugin-pluginkey
                        title = LLL:EXT:scextensionkey/Resources/Private/Language/locallang_db.xlf:tx_scextensionkey_pluginkey.name
                        description = LLL:EXT:scextensionkey/Resources/Private/Language/locallang_db.xlf:tx_scextensionkey_pluginkey.description
                        tt_content_defValues {
                            CType = list
                            list_type = scextensionkey_pluginkey
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'scextensionkey-plugin-pluginkey',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:scextensionkey/Resources/Public/Icons/user_plugin_pluginkey.svg']
			);
		
    }
);
