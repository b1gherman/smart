<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KgbSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kgb-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'lampiran') ?>

    <?= $form->field($model, 'idpegawai') ?>

    <?= $form->field($model, 'idsklama') ?>

    <?php // echo $form->field($model, 'gapokbaru') ?>

    <?php // echo $form->field($model, 'masakerjabarutahun') ?>

    <?php // echo $form->field($model, 'masakerjabarubulan') ?>

    <?php // echo $form->field($model, 'golonganbaru') ?>

    <?php // echo $form->field($model, 'tanggalbaru') ?>

    <?php // echo $form->field($model, 'ttd1') ?>

    <?php // echo $form->field($model, 'tembusan') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
