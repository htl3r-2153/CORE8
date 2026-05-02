<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FC Bigfoot',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HtlRennweg\\FcBigfoot\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Oliver Rinner',
    'author_email' => '2153@htl.rennweg.at',
    'author_company' => 'HTL Rennweg',
    'version' => '1.0.0',
];
