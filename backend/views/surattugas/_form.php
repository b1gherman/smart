<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Surattugas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surattugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idpemberi')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?= $form->field($model, 'idpenerima')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?= $form->field($model, 'namatugas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'waktu')->textInput() ?>

    <?= $form->field($model, 'lokasi')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'daritgl')->textInput() ?>
    <?=
    $form->field($model, 'daritgl')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?php // $form->field($model, 'sampaitgl')->textInput() ?>
    <?=
    $form->field($model, 'sampaitgl')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>
    

    <?= $form->field($model, 'sumberdana')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'ttd')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jabatanstruktural::find()->where(['status'=>1])->orderBy('urutan')->all(), 'id','jabatan.namajabatan')) ?>
    
    <?php // $form->field($model, 'create_at')->textInput() ?>

    <?php // $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
