<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-spd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'idppk') ?>

    <?= $form->field($model, 'idppd') ?>

    <?= $form->field($model, 'tingkat_biaya') ?>

    <?php // echo $form->field($model, 'maksud') ?>

    <?php // echo $form->field($model, 'alat_angkut') ?>

    <?php // echo $form->field($model, 'tempat_berangkat') ?>

    <?php // echo $form->field($model, 'tujuan') ?>

    <?php // echo $form->field($model, 'lama') ?>

    <?php // echo $form->field($model, 'tgl_berangkat') ?>

    <?php // echo $form->field($model, 'tgl_kembali') ?>

    <?php // echo $form->field($model, 'idanggaran_instansi') ?>

    <?php // echo $form->field($model, 'anggaran_akun') ?>

    <?php // echo $form->field($model, 'keterangan_lain') ?>

    <?php // echo $form->field($model, 'tempat') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'status') ?>

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
