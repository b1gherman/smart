<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SmasukDisposisiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="smasuk-disposisi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor_agenda') ?>

    <?= $form->field($model, 'tanggal_terima') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'asal_surat') ?>

    <?php // echo $form->field($model, 'hal') ?>

    <?php // echo $form->field($model, 'idditeruskan') ?>

    <?php // echo $form->field($model, 'idketdisposisi') ?>

    <?php // echo $form->field($model, 'idpildisposisi') ?>

    <?php // echo $form->field($model, 'file_upload') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'iduser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
