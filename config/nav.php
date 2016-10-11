<?php

return [
    'admin' => [
        'general' => [
            'dashboard' => [
                'icon' => 'fa fa-home',
                'anchor' => 'index',
                'text' => 'Dashboard'
            ],
            'landing' => [
                'icon' => 'fa fa-laptop',
                'anchor' => '#',
                'text' => 'Landing Page',
                'message' => [
                    'label' => 'Comming Soon',
                    'class' => 'success'
                ]
            ],
            'users' => [
                'icon' => 'fa fa-users',
                'anchor' => '#',
                'text' => 'Users',
                'sub' => [
                    'add_user' => [
                        'text' => 'Add User',
                        'anchor' => '/add-user'
                    ],
                    'manage_user' => [
                        'text' => 'Manage User',
                        'anchor' => 'manage-user'
                    ],
                    'user_status' => [
                        'text' => 'User Status',
                        'anchor' => 'user-status'
                    ]
                ]
            ]
        ],

        'manage' => [
            'cms' => [
                'icon' => 'fa fa-pagelines',
                'anchor' => '#',
                'text' => 'CMS',
                'sub' => [
                    'create_page' => [
                        'text' => 'Create Page',
                        'anchor' => 'cms-create',
                    ],
                    'manage_page' => [
                        'text' => 'Manage Page',
                        'anchor' => 'manage-page',
                    ],
                    'navigation' => [
                        'text' => 'Navigation',
                        'anchor' => 'navigation'
                    ]
                ]
            ]
        ]
    ],

];