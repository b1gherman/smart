<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PilihanDisposisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pilihan-disposisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pil_disposisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelompok')->dropDownList(['1' => '1', '2' => '2',]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
