<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "interconnection".
 *
 * Auto generated 28-10-2014 00:04
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Vue-typo3-app',
    'description' => 'Vue.js TYPO3 Demo App',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Alexander Grein',
    'author_email' => 'alexander.grein@gmail.com',
    'author_company' => 'MEDIA::ESSENZ',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.1-',
            'bootstrap_package' => '8.0.0-',
            'realurl' => '2.2.1-',
            'autoloader' => '3.1.0-',
            'typoscript_rendering' => '2.0.1-',
            'vhs' => '4.0.0-',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'MediaEssenz\\VueTypo3App\\' => 'Classes',
        ],
    ],
];
