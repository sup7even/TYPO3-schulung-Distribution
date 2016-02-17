<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$GLOBALS['TCA']['tt_content']['types']['theme_jumbotron'] = array(
    'showitem' => 'header,bodytext',
    'columnsOverrides' => ['bodytext' => ['defaultExtras' => 'richtext:rte_transform[mode=ts_css]']]
);
