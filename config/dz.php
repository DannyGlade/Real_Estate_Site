<?php

return [
    'public' => [
        'title' => 'DG-Estate',
        'favicon' => '',
        'global' => [
            'css' => [
                '/css/carousel.css',
                '/css/headers.css',
                '/css/footers.css'
            ],
            'js' => []
        ],
        'pagelevel' => [
            'css' => [],
            'js' => []
        ]
    ],
    'admin' => [
        'title' => 'DG-Estate Admin ',
        'favicon' => '',
        'global' => [
            'css' => [
                '/css/dashboard.css',
                'https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css'
            ],
            'js' => [
                'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js',
                // 'https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js',
                '/js/adminjs.js'
            ]
        ],
        'pagelevel' => [
            'css' => [],
            'js' => []
        ]
    ]
];
