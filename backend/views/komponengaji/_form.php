<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Komponengaji */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komponengaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namakomponen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelompok')->dropDownList([ 'Penghasilan' => 'Penghasilan', 'Potongan' => 'Potongan', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
