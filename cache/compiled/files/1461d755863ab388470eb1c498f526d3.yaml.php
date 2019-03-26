<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/minidino/Sites/luxury-villas/user/config/site.yaml',
    'modified' => 1553377802,
    'data' => [
        'title' => 'Villas in Italy',
        'author' => [
            'name' => 'Daniel Wrightson',
            'email' => 'dan@casole.com'
        ],
        'villa' => [
            'route' => ''
        ],
        'metadata' => [
            'description' => 'Hand picked luxury villas in Italy'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month',
            3 => 'type'
        ],
        'redirects' => [
            '/changelog' => '/villa/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/villa/focus-and-blur',
            '/another/one/(.*)' => '/villa/$1'
        ]
    ]
];
