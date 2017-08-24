<?php



// Settings for web-application only
return [
    'components' => [
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'targets' => [
                // writes to php-fpm output stream
                [
                    'class' => 'codemix\streamlog\Target',
                    'url' => 'php://stdout',
                    'levels' => ['info', 'trace'],
                    'logVars' => [],
                    'enabled' => YII_DEBUG,
                ],
                [
                    'class' => 'codemix\streamlog\Target',
                    'url' => 'php://stderr',
                    'levels' => ['error', 'warning'],
                    'logVars' => [],
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => getenv('APP_COOKIE_VALIDATION_KEY'),
        ],
        'urlManager' => [
            'enablePrettyUrl' => getenv('APP_PRETTY_URLS'),
            'showScriptName' => false,
            'enableStrictParsing' => false,
//            'suffix' => '.html',
            'rules' => [
                'api' =>'site/api'
            ],
        ]

    ],
];