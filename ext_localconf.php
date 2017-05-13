<?php
defined('TYPO3_MODE') or die ('Access denied.');

\HDNET\Autoloader\Loader::extLocalconf(
    'MediaEssenz',
    'vue_typo3_app',
    [
        'StaticTyposcript',
        'Plugins'
    ]
);

/*
 * Register vhs namespace "v" for use in fluid globally
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['v'][0] = 'FluidTYPO3\\Vhs\\ViewHelpers';

/*
 * Register vhs namespace "tsr" for use in fluid globally
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['tsr'][0] = 'Helhum\\TyposcriptRendering\\ViewHelpers';
