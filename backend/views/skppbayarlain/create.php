<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skppbayarlain */

$this->title = 'Create Pembayaran Lainnya (SKPP Pensiun)';
$this->params['breadcrumbs'][] = ['label' => 'Skppbayarlain', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skppbayarlain-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>