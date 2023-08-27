<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GolonganpegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golonganpegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'idpegawai')->dropDownList($items) ?>
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

    <?php // $form->field($model, 'idgolongan') ?>

    <?php // $form->field($model, 'tmt') ?>

    <?php // $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
