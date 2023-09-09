<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratKeteranganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keterangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'idunit') ?>

    <?= $form->field($model, 'idttd') ?>

    <?= $form->field($model, 'idterangkan') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'isi') ?>

    <?php // echo $form->field($model, 'idtembusan') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
