<?php
defined('TYPO3_MODE') or die ('Access denied.');

\HDNET\Autoloader\Loader::extTables(
    'MediaEssenz',
    'vue_typo3_app',
    [
        'StaticTyposcript',
        'Plugins'
    ]
);