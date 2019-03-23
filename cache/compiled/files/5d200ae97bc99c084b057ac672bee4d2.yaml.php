<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/minidino/Sites/luxury-villas/system/config/site.yaml',
    'modified' => 1553377660,
    'data' => [
        'title' => 'Luxury Villas in Italy',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Daniel Wrightson',
            'email' => 'dan@invitationto.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'type'
        ],
        'metadata' => [
            'description' => 'Luxury Villas in Italy'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'villa' => [
            'route' => '/villa'
        ]
    ]
];
