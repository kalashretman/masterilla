<?php
return [
    'login' => [
        'type' => 2,
    ],
    'logout' => [
        'type' => 2,
    ],
    'error' => [
        'type' => 2,
    ],
    'sign-up' => [
        'type' => 2,
    ],
    'index' => [
        'type' => 2,
    ],
    'view' => [
        'type' => 2,
    ],
    'update' => [
        'type' => 2,
    ],
    'delete' => [
        'type' => 2,
    ],
    'guest' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'login',
            'logout',
            'error',
            'sign-up',
            'index',
            'view',
        ],
    ],
    'BUYER' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'update',
            'guest',
        ],
    ],
    'ARTISAN' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'update',
            'guest',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'delete',
            'ARTISAN',
            'BUYER',
        ],
    ],
];