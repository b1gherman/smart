<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Skppbayarlain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skppbayarlain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'id_skpp')->textInput() 
    ?>
    <?= $form->field($model, 'id_skpp')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'nomorskpp')->textinput(['readonly' => true])->label('Nomor SKPP') ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subketerangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>