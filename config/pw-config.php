<?php

/*
 *
 *  * @author Harris Marfel <hrace009@gmail.com>
 *  * @link https://www.hrace009.com
 *  * @copyright Copyright (c) 2021.
 *
 */

return [
    'chat_log_path' => '/home/ko2world/Core/Wanmei2015/logs',
    'currency_name' => 'Ko2Coin',
    'encryption_type' => 'md5',
    'level_up_cap' => '105',
    'logo' => 'img/logo/logo.png',
    'server_ip' => '127.0.0.1',
    'server_name' => 'Ko2World Dev',
    'server_version' => '156',
    'teleport_world_tag' => 1,
    'teleport_x' => '1280.6788',
    'teleport_y' => '219.61784',
    'teleport_z' => '1021.2097',
    'version' => '1.0',
    'ignoreRoles' => '1,2,3',
    'ignoreFaction' => '16,60',
    'system' => [
        'apps' => [
            'news' => true,
            'shop' => true,
            'donate' => true,
            'voucher' => true,
            'inGameService' => true,
            'ranking' => true,
            'vote' => true,
        ],
    ],
    'news' => [
        'page' => '15',
    ],
    'shop' => [
        'page' => '15'
    ],
    'payment' => [
        'paymentwall' => [
            'status' => true,
            'widget_code' => 'p4_1',
            'widget_width' => '371',
            'widget_high' => '450',
            'project_key' => '21f130c3ba2c505e637a2fccbe3b3b62',
            'secret_key' => '57e0b3a2a7325f393446ca93b21e6778',
            'pingback_path' => 'donate/paymentwall'
        ],
        'bank_transfer' => [
            'status' => true,
            'double' => true,
            'accountOwner' => 'harris yogasara',
            'bankAccountNo1' => '342234234324342',
            'bankName1' => 'mandiri',
            'bankAccountNo2' => '324234',
            'bankName2' => 'bca',
            'bankAccountNo3' => '21321332131',
            'bankName3' => 'btpn',
            'multiply' => '100000',
            'limit' => '5000000',
            'CurrencySign' => 'Rp.',
            'payment_price' => '1000',
        ],
    ],
];
