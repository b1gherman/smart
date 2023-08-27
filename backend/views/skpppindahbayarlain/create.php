<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahbayarlain */

$this->title = 'Create Pembayaran Lainnya (SKPP Pindah)';
$this->params['breadcrumbs'][] = ['label' => 'Skpppindahbayarlain', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpppindahbayarlain-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>