<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pasangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')->hiddenInput()->label(false) ?>
    
    <?= $form->field($model, 'namap')->textInput(['readonly' => true])->label('Nama Pegawai') ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true])->label('Nama Istri/Suami') ?>

    <?php // $form->field($model, 'tgllahir')->textInput() ?>
    <?=
    $form->field($model, 'tgllahir')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?php // $form->field($model, 'tglperkawinan')->textInput() ?>
    
    <?=
    $form->field($model, 'tglperkawinan')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?php // $form->field($model, 'tglpisah')->textInput() ?>
    
    <?=
    $form->field($model, 'tglpisah')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'idpekerjaan')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pekerjaan::find()->all(), 'id', 'namapekerjaan'),[
        'prompt' => 'Select...'
    ]) ?>

    <?= $form->field($model, 'penghasilan')->textInput() ?>

    <?= $form->field($model, 'aktif')->dropDownList([
        '0' => 'Non Aktif',
        '1' => 'Aktif'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
