<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/git/ErosIT_Grav/user/themes/mytheme/blueprints.yaml',
    'modified' => 1617001362,
    'data' => [
        'name' => 'mytheme_erosit',
        'slug' => 'mytheme_erosit',
        'type' => 'theme',
        'version' => '1.0.0',
        'description' => ' ',
        'icon' => 'group',
        'author' => [
            'name' => 'Szabó Márk',
            'email' => 'markusz996@gmail.com',
            'url' => 'http://www.erosit.hu'
        ],
        'homepage' => 'http://www.erosit.hu',
        'demo' => 'http://www.erosit.hu',
        'keywords' => 'szabomark',
        'bugs' => 'http://www.erosit.hu',
        'license' => 'custom',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'color' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
