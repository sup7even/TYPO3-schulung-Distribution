<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/',
    'SAE Provider Extension Static TypoScript');


// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
                'Jumbotron',
                'theme_jumbotron',
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY)
                . 'Resources/Public/Icons/jumbotron.gif'
        ),
        'CType'
);
