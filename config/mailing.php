<?php

return [
    'class' => 'yii\swiftmailer\Mailer',
    'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'mail.ukraine.com.ua',
        'username' => 'info@handycars.com.ua',
        'password' => '3GZZ~v9b)4p+',
        'port' => '465',
        'encryption' => 'ssl', //tls
    ],
];