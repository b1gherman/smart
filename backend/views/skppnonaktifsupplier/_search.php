<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkppnonaktifsupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skppnonaktifsupplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor_surat') ?>

    <?= $form->field($model, 'sifat') ?>

    <?= $form->field($model, 'lampiran') ?>

    <?= $form->field($model, 'hal') ?>

    <?= $form->field($model, 'tanggal_surat') ?>

    <?php // echo $form->field($model, 'kepada') ?>

    <?php // echo $form->field($model, 'no_dirjen_bendahara') ?>

    <?php // echo $form->field($model, 'id_instansi') ?>

    <?php // echo $form->field($model, 'no_register_supplier') ?>

    <?php // echo $form->field($model, 'id_pegawai') ?>

    <?php // echo $form->field($model, 'nama_bank') ?>

    <?php // echo $form->field($model, 'no_rekening') ?>

    <?php // echo $form->field($model, 'id_sk') ?>

    <?php // echo $form->field($model, 'id_pegawai_kpa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
