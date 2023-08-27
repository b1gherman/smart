<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkpputangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skpputang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_skpp') ?>

    <?= $form->field($model, 'uraianpotongan') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'potongan') ?>

    <?php // echo $form->field($model, 'akunpenerimaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
