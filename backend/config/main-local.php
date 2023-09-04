<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cP05EoNT7EKziUyg3s3imYi7fZdfIsdt',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

//    $config['bootstrap'][] = 'gii';
//    $config['modules']['gii'] = [
//        'class' => 'yii\gii\Module',
//    ];
    // configuration adjustments for 'dev' environment
    /*$config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [
            'modal_crud' => [// generator name
                'class' => 'conquer\gii\templates\crud\Generator', // generator class
            ]
        ],
    ];*/
    /* $config['modules']['gii'] = [
      'class' => 'yii\gii\Module',
      'generators' => [ // here
      'crud' => [ // generator name
      'class' => 'yii\gii\generators\crud\Generator', // generator class
      'templates' => [ // setting for our templates
      'yii2-adminlte3' => '@vendor/hail812/yii2-adminlte3/src/gii/generators/crud/default' // template name => path to template
      ]
      ]
      ]
      ]; */
    //$config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [// here
            'crud' => [// generator name
                'class' => 'yii\gii\generators\crud\Generator', // generator class
                'templates' => [// setting for our templates
                    'yii2-adminlte3' => '@vendor/hail812/yii2-adminlte3/src/gii/generators/crud/default' // template name => path to template
                ]
            ]
        ]
    ];
}

return $config;
