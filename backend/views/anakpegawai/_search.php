<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AnakpegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anakpegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'id_pegawai') ?>
    <?php
    $list = yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->where(['aktif'=>1])->all(),'id','namapegawai');
    echo $form->field($model, "id_pegawai")->widget(\kartik\select2\Select2::classname(), [
        'data' => $list,
        'options' => ['placeholder' => 'Select...', 'size' => '50%'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label("Nama Karyawan");
    ?>

    <?php // $form->field($model, 'namaanak') ?>

    <?php // $form->field($model, 'idstatusanak') ?>

    <?php // $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'id_pekerjaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
