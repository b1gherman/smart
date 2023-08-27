<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Golonganpegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golonganpegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'nama')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'idgolongan')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Golongan::find()->all(), 'id', 'kode_gol')) ?>

    <?php // $form->field($model, 'tmt')->textInput() ?>
    <?=
    $form->field($model, 'tmt')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'status')->dropDownList(['0' => 'Non Aktif', '1' => 'Aktif']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
