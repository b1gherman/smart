<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahbayarlain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skpppindahbayarlain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'id_skpp')->textInput() 
    ?>
    <?= $form->field($model, 'id_skpppindah')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'nomorskpp')->textinput(['readonly' => true])->label('Nomor SKPP Pindah') ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subketerangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>