<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cuti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'id_pegawai')->textInput() 
    ?>
    <?php
    if (Yii::$app->user->identity->username == 'admin') {
        echo $form->field($model, 'id_pegawai')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->where(['aktif' => 1])->all(), 'id', 'namapegawai'));
    } else {
        echo $form->field($model, 'id_pegawai')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->where(['aktif' => 1,'iduser'=> Yii::$app->user->id])->all(), 'id', 'namapegawai'));
    }
    ?>

    <?php //= $form->field($model, 'id_jeniscuti')->textInput() 
    ?>
    <?= $form->field($model, 'id_jeniscuti')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jeniscuti::find()->all(), 'id', 'namajeniscuti')) ?>

    <?= $form->field($model, 'alasan')->textarea(['rows' => 3]) ?>

    <?php //= $form->field($model, 'tglmulaicuti')->textInput() 
    ?>
    <?=
    $form->field($model, 'tglmulaicuti')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?php //= $form->field($model, 'tglakhircuti')->textInput() 
    ?>
    <?=
    $form->field($model, 'tglakhircuti')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'lama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatancuti')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alamatselamacuti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'ttd1')->dropDownList(\yii\helpers\ArrayHelper::map(backend\models\Jabatanstruktural::find()->all(), 'id', 'pegawai.namapegawai')) ?>

    <?= $form->field($model, 'ttd2')->dropDownList(\yii\helpers\ArrayHelper::map(backend\models\Jabatanstruktural::find()->all(), 'id', 'pegawai.namapegawai')) ?>

    <?= $form->field($model, 'tembusan')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'create_at')->textInput() 
    ?>

    <?php //= $form->field($model, 'update_at')->textInput() 
    ?>

    <?php //= $form->field($model, 'iduser')->textInput() 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>