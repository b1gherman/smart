<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPenerimatugas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-penerimatugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'idtugas')->textInput() ?>
    <?= $form->field($model, 'idtugas')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'tugas')->textarea(['rows' => 6],['readonly' => true]) ?>

    <?php //= $form->field($model, 'idpenerima')->textInput() ?>
    <?= $form->field($model, 'idpenerima')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'create_at')->textInput() ?>

    <?php //= $form->field($model, 'update_at')->textInput() ?>

    <?php //= $form->field($model, 'iduser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
