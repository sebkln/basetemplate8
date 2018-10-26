<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Template Foundation TYPO3 v8 LTS',
    'description' => 'Use it as a base for your website configuration. Add all your Stylesheets, JavaScripts and Templates.',
    'version' => '1.0.3',
    'state' => 'stable',
    'category' => 'templates',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sklein-medien.de',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.2-8.7.99',
            'recycler' => '',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
