<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'nosk') ?>

    <?php // $form->field($model, 'tgl') ?>

    <?php // $form->field($model, 'pejabat') ?>

    <?php // $form->field($model, 'dokumen') ?>
    <?=  $form->field($model, 'idpegawai')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->where(['aktif'=>1])->all(), 'id', 'namapegawai')) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
