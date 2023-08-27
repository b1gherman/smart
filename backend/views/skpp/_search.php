<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkppSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skpp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomorskpp') ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'id_jabatan') ?>

    <?= $form->field($model, 'id_instansi') ?>

    <?php // echo $form->field($model, 'nomorsk') ?>

    <?php // echo $form->field($model, 'tglsk') ?>

    <?php // echo $form->field($model, 'tmtberhenti') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'iduser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
