<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Satuankerja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="satuankerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kodesatuan')->textInput() ?>

    <?= $form->field($model, 'namasatuankerja')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
