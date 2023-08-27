<?php

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
//        'admin' => [
//            'class' => 'mdm\admin\Module',
//            'layout' => 'left-menu',
//        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => []
        ],
        'gridviewKrajee' => [
            'class' => '\kartik\grid\Module',
        // your other grid module settings
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
            //'defaultRoles' => ['admin'],
        ],
//        'user' => [
//            //'class' => 'mdm\admin\models\User',
//            'identityClass' => 'mdm\admin\models\User',
//            'loginUrl' => ['admin/user/login'],
//        ],
        'sikerma' => [
            'class' => 'common\components\sikerma'
        ],
        'bmkg' => [
            'class' => 'common\components\bmkg'
        ],
        'inventori' => [
            'class' => 'common\components\inventori'
        ],
        'formatter' => [
            'dateFormat' => 'd MMMM Y',
            'thousandSeparator' => ',',
            'locale'=>'id-ID',
            'currencyCode' => 'Rp.',
            'datetimeFormat' => 'd-M-Y H:i:s',
            'timeFormat' => 'H:i:s',
            //'locale' => 'de-DE', //your language locale
            'defaultTimeZone' => 'Asia/Jakarta', // time zone
        ],
    ],
    //'language' => 'de-DE',
    
];
