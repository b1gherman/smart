<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skppbayarlain */

$this->title = 'Update Pembayaran Lainnya (SKPP Pensiun) : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skppbayarlain', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skppbayarlain-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
        // 'modelskpp' => $modelskpp
    ]) ?>

</div>