<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/minidino/Sites/blog-site/user/config/site.yaml',
    'modified' => 1553291743,
    'data' => [
        'title' => 'Grav',
        'author' => [
            'name' => 'Joe villags',
            'email' => 'joe@test.com'
        ],
        'villa' => [
            'route' => ''
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month'
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
