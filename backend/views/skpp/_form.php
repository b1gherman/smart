<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skpp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomorskpp')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'id_pegawai')->textInput() 
    ?>
    <?= $form->field($model, 'id_pegawai')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <label class="col-form-label">Surat Keputusan (SK) Nomor :</label>
    <?php // = $form->field($model, 'id_sk')->textInput() 
    ?>
    <?= $form->field($model, 'id_sk')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Sk::find()->all(), 'id', 'nosk'))->label(false) ?>

    <?php //= $form->field($model, 'tmtberhenti')->textInput() 
    ?>
    <?=
    $form->field($model, 'tmtberhenti')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?=
    $form->field($model, 'tanggal_surat')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'jabatan_mengetahui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_mengetahui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_mengetahui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tembusan')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'create_at')->textInput() 
    ?>

    <?php //= $form->field($model, 'update_at')->textInput() 
    ?>

    <?php //= $form->field($model, 'iduser')->textInput() 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>