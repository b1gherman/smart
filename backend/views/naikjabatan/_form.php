<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Naikjabatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="naikjabatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlahberkas')->textInput() ?>

    <?= $form->field($model, 'idpegawai')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')); ?>

    <?= $form->field($model, 'idjabatanbaru')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Jabatan::find()->all(), 'id', 'namajabatan')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
