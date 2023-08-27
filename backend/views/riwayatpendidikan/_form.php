<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Riwayatpendidikan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayatpendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpegawai')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'namasekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idtingkatansekolah')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Tingkatansekolah::find()->all(), 'id', 'kodetingkatan')) ?>

    <?= $form->field($model, 'idjurusan')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jurusan::find()->all(), 'id', 'namajurusan'),[
        'prompt' => 'Select....'
    ]) ?>

    <?= $form->field($model, 'tahunlulus')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Non Aktif',
        '1' => 'Aktif'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
