<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Naikpangkat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="naikpangkat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlahberkas')->textInput()->label('Jumlah Berkas') ?>

    <?= $form->field($model, 'idpegawai')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai'))->label('Pegawai') ?>

    <?= $form->field($model, 'idpangkatbaru')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Golongan::find()->all(),'id', 'pangkat'))->label('Pangkat Baru') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
