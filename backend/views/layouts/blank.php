<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="blank">
        <?php $this->beginBody() ?>

        <div class="container">

            <div class="wrap">
                <?php
                NavBar::begin([
                    'brandLabel' => Yii::$app->name,
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                    ],
                ]);
                $menuItems = [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'Login', 'url' => ['/site/login']],
                    [
                        'label' => 'Logout',
                        'url' => ['/user/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ],
                    ['label' => 'App', 'items' => [
                            ['label' => 'New Sales', 'url' => ['/sales/pos']],
                            ['label' => 'New Purchase', 'url' => ['/purchase/create']],
                            ['label' => 'GR', 'url' => ['/movement/create', 'type' => 'receive']],
                            ['label' => 'GI', 'url' => ['/movement/create', 'type' => 'issue']],
                        ]
                    ]
                ];

                $menuItems = \mdm\admin\components\Helper::filter($menuItems);

                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                NavBar::end();
                ?>


                <?= $content ?>

            </div>

        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
