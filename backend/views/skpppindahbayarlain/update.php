<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahbayarlain */

$this->title = 'Update Pembayaran Lainnya (SKPP Pindah) : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skpppindahbayarlain', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skpppindahbayarlain-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
        // 'modelskpp' => $modelskpp
    ]) ?>

</div>