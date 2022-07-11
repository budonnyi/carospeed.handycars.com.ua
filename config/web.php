<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

Yii::setAlias('@components', dirname(__DIR__) . '/components');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'yH3eEfCQ_5kThZgV5OT0cDnYb1HZcSVE',
            'baseUrl' => '',
            'class' => 'app\components\LangRequest',
        ],
        'cache' => [
            'class' => 'yii\caching\DbCache',
//            'db' => 'db',
//            'sessionTable' => 'cache',
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
            'db' => 'db',
            'sessionTable' => 'session',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.ukraine.com.ua',
                'username' => 'info@handycars.com.ua',
                'password' => 'GiJ6pUn1Dc66',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'app\components\LangUrlManager',
            'rules' => [
                'portfolio' => 'site/portfolio',
                'sitemap.xml' => 'site/sitemap', //карта сайта
//                'gde-kupit-ruchnoe-upravlenie' => 'site/cities',
                [
                    'pattern' => 'kupit-ruchnoe-upravlenie-v-gorode/<city:[\w-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => 'kupit-ruchnoe-upravlenie-na-avto/<car:[\w-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                '' => 'site/index',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
        'language' => 'ru-RU',
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@webroot/lang',
                    'sourceLanguage' => 'ru',
                    'fileMap' => [
                        'main' => 'main.php',
                    ],
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => ['https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'],
//                    'js' => ['https://code.jquery.com/jquery-3.1.1.min.js'],
                    'jsOptions' => ['position' => \yii\web\View::POS_HEAD],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'],
                    'jsOptions' => ['position' => \yii\web\View::POS_END],
                ],
                'yii\bootstrap\BootstrapAsset' => [
//                    'css' => ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'],
                ],
            ],
            'linkAssets' => true,
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'path' => 'images/files',
                'name' => 'Files'
            ],
        ]
    ],
    'params' => $params,
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'admin',
        ],
    ],

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
