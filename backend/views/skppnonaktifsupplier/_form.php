<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Skppnonaktifsupplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skppnonaktifsupplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sifat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hal')->textarea(['rows' => 6]) ?>

    <label>Jenis SKPP</label>
    <?= $form->field($model, 'id_jenisskpp')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jenisskpp::find()->all(), 'id', 'namajenisskpp'))->label(false) ?>

    <?php //= $form->field($model, 'tanggal_surat')->textInput() 
    ?>
    <?=
    $form->field($model, 'tanggal_surat')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'kepada')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_dirjen_bendahara')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'id_instansi')->textInput() 
    ?>
    <?= $form->field($model, 'id_instansi')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Instansi::find()->all(), 'id', 'satuanorganisasi')) ?>

    <?= $form->field($model, 'no_register_supplier')->textInput() ?>

    <?php //= $form->field($model, 'id_pegawai')->textInput() 
    ?>
    <label>Nama Pegawai</label>
    <?= $form->field($model, 'id_pegawai')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai'))->label(false) ?>

    <?= $form->field($model, 'nama_bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rekening')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'id_sk')->textInput() 
    ?>
    <label>Nomor SK</label>
    <?= $form->field($model, 'id_sk')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Sk::find()->all(), 'id', 'nosk'))->label(false) ?>

    <?php //= $form->field($model, 'id_pegawai_kpa')->textInput() 
    ?>
    <label>Kuasa Pengguna Anggaran</label>
    <?= $form->field($model, 'id_pegawai_kpa')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai'))->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>