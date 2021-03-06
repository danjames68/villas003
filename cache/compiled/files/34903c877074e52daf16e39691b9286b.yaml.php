<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/minidino/Sites/luxury-villas/user/themes/quark/blueprints.yaml',
    'modified' => 1553291746,
    'data' => [
        'name' => 'Quark',
        'version' => '1.2.5',
        'description' => 'New Grav Default Theme',
        'icon' => 'microchip',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-quark',
        'demo' => 'https://demo.getgrav.org/onepage-skeleton',
        'keywords' => 'quark, spectre, theme, core, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-quark/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'production-mode' => [
                    'type' => 'toggle',
                    'label' => 'Production mode',
                    'help' => 'When enabled, Quark will render with minified CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'grid-size' => [
                    'type' => 'select',
                    'label' => 'Grid size',
                    'help' => 'The maximum width of the theme',
                    'size' => 'small',
                    'options' => [
                        '' => 'None (full width)',
                        'grid-xl' => 'Extra Large',
                        'grid-lg' => 'Large',
                        'grid-md' => 'Medium'
                    ]
                ],
                'header_section' => [
                    'type' => 'section',
                    'title' => 'Header Defaults',
                    'underline' => true
                ],
                'custom_logo' => [
                    'type' => 'file',
                    'label' => 'Custom Logo',
                    'size' => 'large',
                    'destination' => 'theme://images/logo',
                    'multiple' => false,
                    'markdown' => true,
                    'description' => 'Will be used instead of default logo `theme://images/grav-logo.svg`',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'custom_logo_mobile' => [
                    'type' => 'file',
                    'label' => 'Mobile Custom Logo',
                    'size' => 'large',
                    'destination' => 'theme://images/logo',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'header-fixed' => [
                    'type' => 'toggle',
                    'label' => 'Fixed header',
                    'help' => 'When enabled, the header will be fixed at the top of the browser',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header-animated' => [
                    'type' => 'toggle',
                    'label' => 'Animated',
                    'help' => 'When enabled, the header will animate to a smaller header when scrolling',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header-dark' => [
                    'type' => 'toggle',
                    'label' => 'Dark Style',
                    'help' => 'When enabled, a dark-friendly style will be used',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header-transparent' => [
                    'type' => 'toggle',
                    'label' => 'Transparent',
                    'help' => 'When enabled, a transparent style will be used',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'footer_section' => [
                    'type' => 'section',
                    'title' => 'Footer Defaults',
                    'underline' => true
                ],
                'sticky-footer' => [
                    'type' => 'toggle',
                    'label' => 'Sticky footer',
                    'help' => 'When enabled, the footer will be sticky at the bottom of the browser',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'villa_section' => [
                    'type' => 'section',
                    'title' => 'villa Defaults',
                    'underline' => true
                ],
                'villa-page' => [
                    'type' => 'text',
                    'label' => 'villa Page',
                    'help' => 'The route to the villa page when working with villa sidebar',
                    'size' => 'medium',
                    'default' => '/villa'
                ],
                'spectre_section' => [
                    'type' => 'section',
                    'title' => 'Spectre.css Options',
                    'underline' => true
                ],
                'spectre.exp' => [
                    'type' => 'toggle',
                    'label' => 'Experimentals CSS',
                    'help' => 'When enabled, the `spectre-exp.css` file will be included',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'spectre.icons' => [
                    'type' => 'toggle',
                    'label' => 'Icons CSS',
                    'help' => 'When enabled, the `spectre-icons.css` file will be included',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
