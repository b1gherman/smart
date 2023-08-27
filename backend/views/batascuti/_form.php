<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Batascuti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batascuti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'digunakan')->textInput() ?>

    <?= $form->field($model, 'sisa')->textInput() ?>

    <?= $form->field($model, 'tangguhkan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
