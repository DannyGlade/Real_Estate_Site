<?php

return [
    'public' => [
        'title' => 'DG-Estate',
        'favicon' => '',
        'global' => [
            'css' => [
                'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
                '/css/carousel.css',
                '/css/headers.css',
                '/css/footers.css',
                'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css',
            ],
            'js' => [
                'https://kit.fontawesome.com/10cf85d80f.js',
                'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
                'https://code.jquery.com/jquery-3.6.0.min.js',
                'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js'
            ]
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
                'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
                'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css',
                '/css/dashboard.css',
                // 'https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css',
                'https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css'
            ],
            'js' => [
                'https://kit.fontawesome.com/10cf85d80f.js',
                'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
                'https://code.jquery.com/jquery-3.6.0.min.js',
                'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js',
                'https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js',
                'https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js',
                '/js/adminjs.js'
            ]
        ],
        'pagelevel' => [
            'css' => [],
            'js' => []
        ]
    ]
];
