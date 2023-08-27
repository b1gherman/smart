<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Anakpegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anakpegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pegawai')->hiddenInput()->label(false) ?>
    
    <?= $form->field($model, 'namapegawai')->textInput(['readonly'=>true])->label('Nama Pegawai') ?>

    <?= $form->field($model, 'namaanak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idstatusanak')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Statusanak::find()->all(), 'id', 'status')) ?>

    <?php // $form->field($model, 'tgl_lahir')->textInput() ?>
    <?=
    $form->field($model, 'tgl_lahir')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'id_pekerjaan')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pekerjaan::find()->all(), 'id', 'namapekerjaan'),[
        'prompt' => 'Select...'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
