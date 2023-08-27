<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kgb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kgb-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idpegawai')->dropDownList(\yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->all(), 'id', 'namapegawai'),['prompt' => 'Select...'])->label("Pegawai") ?>

    <?php // $form->field($model, 'idsklama')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Sk::find()->all(), 'id', 'nosk')) ?>

    <?php
    $dataindikator = yii\helpers\ArrayHelper::map(backend\models\Sk::find()->asArray()->all(), 'id', 'nosk');
    echo $form->field($model, "idsklama")->widget(kartik\depdrop\DepDrop::classname(), [
        'type' => kartik\depdrop\DepDrop::TYPE_SELECT2,
        'data' => $dataindikator,
        'options' => ['placeholder' => 'Select ...'],
        'select2Options' => ['pluginOptions' => ['allowClear' => false]],
        'pluginOptions' => [
            'depends' => ["kgb-idpegawai"],
            'url' => yii\helpers\Url::to(['/kgb/sk']),
        ]
    ])->label("SK Lama"); 
    ?>

    <?= $form->field($model, 'gapokbaru')->textInput()->label("Gaji Pokok Baru") ?>

    <?= $form->field($model, 'masakerjabarutahun')->textInput()->label("Masa Kerja (Tahun)") ?>

    <?= $form->field($model, 'masakerjabarubulan')->textInput()->label("Masa Kerja (Bulan)") ?>

    <?= $form->field($model, 'golonganbaru')
            ->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Golongan::find()->all(), 'id', 'kode_gol'))->label("Golongan Baru") ?>

    <?php // $form->field($model, 'tanggalbaru')->textInput() ?>
    <?=
    $form->field($model, 'tanggalbaru')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])->label("Tanggal Baru")
    ?>

    <?= $form->field($model, 'ttd1')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jabatanstruktural::find()->where(['status' => 1])->all(), 'id', 'pegawai.namapegawai'))->label("Penanda tangan") ?>

    <?= $form->field($model, 'tembusan')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'create_at')->textInput() ?>

    <?php // $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
