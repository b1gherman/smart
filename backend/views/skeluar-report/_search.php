<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPengumumanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['report'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?php //= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?php //=
    // $form->field($model, 'tanggal')->widget(kartik\date\DatePicker::className(), [
    //     'options' => ['placeholder' => 'Pilih Tanggal'],
    //     'pluginOptions' => [
    //         'autoclose' => true,
    //         'format' => 'yyyy-mm',
    //         'starView' => 0,
    //         'todayHighlight' => true
    //     ]
    // ])
    ?>

    <div class="form-group">
        <?= Html::submitButton('Preview', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
