<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Penyampaianskpp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="Penyampaianskpp-form">

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

    <?php //= $form->field($model, 'id_pegawai')->textInput() 
    ?>
    <label>Pegawai yang Pindah</label>
    <?= $form->field($model, 'id_pegawai')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai'))->label(false) ?>

    <?php //= $form->field($model, 'id_pegawai_kepala')->textInput() 
    ?>
    <label>Kepala Stasiun</label>
    <?= $form->field($model, 'id_pegawai_kepala')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai'))->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>