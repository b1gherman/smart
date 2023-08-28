<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpdPengikut */

$this->title = 'Create Pengikut Perjalanan Dinas';
$this->params['breadcrumbs'][] = ['label' => 'Pengikut Perjalanan Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-spd-pengikut-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
