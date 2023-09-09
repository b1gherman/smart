<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarKuasaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-kuasa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'idpemberi') ?>

    <?= $form->field($model, 'idpenerima') ?>

    <?= $form->field($model, 'isi') ?>

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
