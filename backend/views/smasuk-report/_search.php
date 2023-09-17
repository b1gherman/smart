<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SmasukDisposisiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="smasuk-report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['report'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1,
            'target' => '_blank'
        ],
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>
    
    <?php //=
    // $form->field($model, 'tanggal')->widget(kartik\date\DatePicker::className(), [
    //     'options' => ['placeholder' => 'Pilih Tahun'],
    //     'pluginOptions' => [
    //         'autoclose' => true,
    //         'format' => 'yyyy',
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