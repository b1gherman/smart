<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Riwayatkerja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayatkerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'namapegawai')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'idsk')->dropDownList(\yii\helpers\ArrayHelper::map(backend\models\Sk::find()->where(['idpegawai' => $model->idpegawai])->all(), 'id', 'nosk'))->label("NO SK") ?>

    <?php // $form->field($model, 'tglmulai')->textInput() ?>
    <?=
    $form->field($model, 'tglmulai')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'golongan')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Golongan::find()->all(), 'id', 'kode_gol')) ?>

    <?= $form->field($model, 'gapok')->textInput()->label("Gaji Pokok") ?>

    <?= $form->field($model, 'masakerjatahun')->textInput()->label("Masa Kerja Tahun") ?>

    <?= $form->field($model, 'masakerjabulan')->textInput()->label("Masa Kerja Bulan") ?>
    
    <?= $form->field($model, 'status')->dropDownList(['0' => 'Non Aktif', '1' => 'Aktif']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
