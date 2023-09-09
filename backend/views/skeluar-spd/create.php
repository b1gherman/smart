<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpd */

$this->title = 'Create Surat Perjalanan Dinas';
$this->params['breadcrumbs'][] = ['label' => 'Surat Perjalanan Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-spd-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
