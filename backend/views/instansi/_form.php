<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Instansi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instansi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namainstansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuanorganisasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodesatuan')->textInput() ?>
    
    <?= $form->field($model, 'status')->dropDownList(['0'=>'Non Aktif', '1' => 'Aktif']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
