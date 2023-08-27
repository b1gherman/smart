<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Duk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')
            ->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->all(), 'id', 'namapegawai'),['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'urutan')->textInput() ?>
    
    <?= $form->field($model, 'status')->dropDownList(['0'=>'Non Aktif','1'=>'Aktif']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
