<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahutang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skpppindahutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'id_skpp')->textInput() 
    ?>

    <?= $form->field($model, 'id_skpppindah')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'nomorskpp')->textinput(['readonly' => true])->label('Nomor SKPP Pindah') ?>

    <?= $form->field($model, 'uraianpotongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'potongan')->textInput() ?>

    <?= $form->field($model, 'akunpenerimaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>