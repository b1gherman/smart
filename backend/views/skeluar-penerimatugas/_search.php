<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPenerimatugasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-penerimatugas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idtugas') ?>

    <?= $form->field($model, 'idpenerima') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'iduser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
