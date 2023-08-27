<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sekolah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sekolah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namasekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tingkatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
