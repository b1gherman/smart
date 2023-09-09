<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarmemoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluarmemo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'idkepada') ?>

    <?= $form->field($model, 'iddari') ?>

    <?= $form->field($model, 'hal') ?>

    <?php // echo $form->field($model, 'tglmemo') ?>

    <?php // echo $form->field($model, 'isimemo') ?>

    <?php // echo $form->field($model, 'idttd') ?>

    <?php // echo $form->field($model, 'tembusan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
