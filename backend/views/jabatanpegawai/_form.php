<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatanpegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jabatanpegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'nama')->textInput(['readonly'=>true]) ?>
    
    <?= $form->field($model, 'idjabatan')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Jabatan::find()->all(), 'id', 'namajabatan')) ?>

    <?= $form->field($model, 'esl')->textInput(['maxlength' => true]) ?>

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
