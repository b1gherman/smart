<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'idpegawai') ?>

    <?= $form->field($model, 'kerjalain') ?>

    <?php // echo $form->field($model, 'gajilain') ?>

    <?php // echo $form->field($model, 'punyapensiun') ?>

    <?php // echo $form->field($model, 'iduser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
