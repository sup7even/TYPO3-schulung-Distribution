<?php
defined('TYPO3_MODE') || die('Access denied.');


// Register Page TSConfig file
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'theme',
        'Configuration/PageTSConfig/page.tsc',
        'EXT:theme :: General PageTSConfig'
);
