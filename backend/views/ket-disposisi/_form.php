<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KetDisposisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ket-disposisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keterangan_disposisi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
