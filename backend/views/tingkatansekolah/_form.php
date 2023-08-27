<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tingkatansekolah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tingkatansekolah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kodetingkatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namatingkatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
