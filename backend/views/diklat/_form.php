<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Diklat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diklat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')->hiddenInput()->label(false) ?>
    <?= $form->field($model, 'nama')->textInput(['readonly' => true])->label("Nama") ?>

    <?= $form->field($model, 'namadiklat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'jumlahjam')->textInput() ?>
    
    <?= $form->field($model, 'status')->dropDownList(['0'=>'Non Aktif','1'=>'Aktif']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
