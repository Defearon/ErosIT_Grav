<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/git/ErosIT_Grav/user/plugins/shortcode-ui/blueprints.yaml',
    'modified' => 1617002647,
    'data' => [
        'name' => 'Shortcode UI',
        'slug' => 'shortcode-ui',
        'type' => 'plugin',
        'version' => '3.0.0',
        'description' => 'This plugin provides several UI shortcodes',
        'icon' => 'code',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-shortcode-ui',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'ui, plugin, tabs',
        'bugs' => 'https://github.com/getgrav/grav-plugin-shortcode-ui/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.4'
            ],
            1 => [
                'name' => 'shortcode-core',
                'version' => '>=5.0.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Enabled',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'theme.tabs' => [
                    'type' => 'select',
                    'size' => 'small',
                    'classes' => 'fancy',
                    'label' => 'Tabs Theme',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'lite' => 'Lite',
                        'badges' => 'Badges'
                    ]
                ]
            ]
        ]
    ]
];