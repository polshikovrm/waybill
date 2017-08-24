<?php



// Settings for web-application only
return [
    'bootstrap' => [
        'debug',
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => [
                '127.0.0.1',
                '::1',
                '192.168.*',
                '172.18.*',
            ],
        ],
    ],
];
