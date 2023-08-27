<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PasanganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'idpegawai') ?>
    <?php
    $list = yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->where(['aktif'=>1])->all(),'id','namapegawai');
    echo $form->field($model, "idpegawai")->widget(\kartik\select2\Select2::classname(), [
        'data' => $list,
        'options' => ['placeholder' => 'Select...', 'size' => '50%'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label("Nama Karyawan");
    ?>

    <?php // $form->field($model, 'nama') ?>

    <?php // $form->field($model, 'tgllahir') ?>

    <?php // $form->field($model, 'tglperkawinan') ?>

    <?php // echo $form->field($model, 'tglpisah') ?>

    <?php // echo $form->field($model, 'idpekerjaan') ?>

    <?php // echo $form->field($model, 'penghasilan') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
