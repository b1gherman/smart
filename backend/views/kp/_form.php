<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'tanggal')->textInput() ?>
    <?=
    $form->field($model, 'tanggal')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'idpegawai')
            ->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->all(), 'id', 'namapegawai'))->label("Pegawai") ?>

    <?= $form->field($model, 'kerjalain')->textInput(['maxlength' => true])->label("Bekerja pula sebagai") ?>

    <?= $form->field($model, 'gajilain')->textInput()->label("Mendapatkan penghasilan sebesar") ?>

    <?= $form->field($model, 'punyapensiun')->textInput()->label("Mempunyai pensiun sebesar") ?>

    <?= $form->field($model, 'ttd')->dropDownList(\yii\helpers\ArrayHelper::map(backend\models\Jabatanstruktural::find()->all(), 'id', 'pegawai.namapegawai')) ?>

    
    <?php // $form->field($model, 'iduser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
