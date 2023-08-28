<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpd */

$this->title = 'Update Surat Perjalanan Dinas : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Perjalanan Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skeluar-spd-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
