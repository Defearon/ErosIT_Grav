<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/git/ErosIT_Grav/user/pages/01.home/modular.md',
    'modified' => 1616189112,
    'data' => [
        'header' => [
            'title' => 'Woo',
            'menu' => 'Home',
            'onpage_menu' => true,
            'body_class' => 'index',
            'header_class' => 'alt',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_showcase',
                        1 => '_features',
                        2 => '_pricing',
                        3 => '_callout',
                        4 => '_screenshots',
                        5 => '_testimonials',
                        6 => '_subscribe'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Woo
menu: Home
onpage_menu: true
body_class: index
header_class: alt
content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _showcase
            - _features
            - _pricing
            - _callout
            - _screenshots
            - _testimonials
            - _subscribe',
        'markdown' => ''
    ]
];
