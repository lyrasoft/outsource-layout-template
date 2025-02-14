<?php

declare(strict_types=1);

return [
    'project' => [
        'name' => 'Vaseman'
    ],

    // Which folders you want to generate (Array)
    'folders' => [
        'entries' => '',
        'assets' => 'assets'
    ],

    'links' => [
        //
    ],

    // Plugin classes with namespace (Array)
    'plugins' => [
        //
    ],

    'components' => [
        'hero-banner' => 'components.hero-banner',
        'breadcrumb' => 'components.breadcrumb',
        'pagination' => 'components.pagination',
    ],

    'system' => [
        'debug' => 0,
        'timezone' => 'UTC',
        'error_reporting' => -1,
    ],
    
    'assets' => [
        'append_version' => true
    ]
];
