<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BatascutiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batascuti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?= $form->field($model, 'idpegawai')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->all(), 'id', 'namapegawai'),['prompt'=>'Select...']) ?>

    <?php // $form->field($model, 'tahun') ?>

    <?php // $form->field($model, 'digunakan') ?>

    <?php // $form->field($model, 'sisa') ?>

    <?php // echo $form->field($model, 'tangguhkan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
