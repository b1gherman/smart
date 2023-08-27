<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatanstruktural */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jabatanstruktural-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idjabatan')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jabatan::find()->all(), 'id', 'namajabatan')) ?>

    <?= $form->field($model, 'idpegawai')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?= $form->field($model, 'urutan')->textInput() ?>
    
    <?= $form->field($model, 'status')->dropDownList(['0'=>'Non Aktif','1'=>'Aktif']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
