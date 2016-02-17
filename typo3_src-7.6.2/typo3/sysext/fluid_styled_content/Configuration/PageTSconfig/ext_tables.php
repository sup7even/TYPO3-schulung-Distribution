<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Adds the content element "jumbotron" to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
                'Jumbotron',
                'theme_jumbotron',
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY)
                . 'Resources/Public/Icons/jumbotron.gif'
        ),
        'CType'
);
