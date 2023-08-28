<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpdPengikut */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-spd-pengikut-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'idspd')->textInput() ?>
    <?= $form->field($model, 'idspd')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'tujuan')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'tanggal_lahir')->textInput() ?>
    <?=
    $form->field($model, 'tanggal_lahir')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'create_at')->textInput() ?>

    <?php //= $form->field($model, 'update_at')->textInput() ?>

    <?php //= $form->field($model, 'iduser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
