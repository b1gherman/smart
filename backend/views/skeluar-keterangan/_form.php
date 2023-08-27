<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarKeterangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-keterangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $role = Yii::$app->sikerma->getRole(Yii::$app->user->id);
    // print_r($role);
    if ($role == 'admin') { ?>
        <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>
    <?php
    } else {
    ?>
        <?php //= $form->field($model, 'nomor')->textInput(['maxlength' => true]) 
        ?>
    <?php
    };
    ?>

    <?= $form->field($model, 'namasurat')->textInput(['maxlength' => true]) ?>

    <label class="col-form-label">Yang bertandatangan di bawah ini :</label>
    <?php //= $form->field($model, 'idpemberi')->textInput()->label(false) 
    ?>
    <?= $form->field($model, 'idpemberi')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai'))->label(false) ?>

    <label class="col-form-label">dengan ini menerangkan bahwa :</label>
    <?= $form->field($model, 'hal')->textarea(['rows' => 6])->label(false) ?>

    <?php //= $form->field($model, 'idpenerima')->textInput() 
    ?>
    <?= $form->field($model, 'idpenerima')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?php //= $form->field($model, 'isi')->textarea(['rows' => 6]) 
    ?>
    <?= $form->field($model, 'isi')->widget(alexantr\tinymce\TinyMCE::className(), [
        'clientOptions' => [
            'plugins' => [
                'anchor', 'charmap', 'code', 'help', 'hr',
                'image', 'link', 'lists', 'media', 'paste',
                'searchreplace', 'table',
            ],
            'height' => 500,
            'convert_urls' => false,
            'element_format' => 'html',
            // ...
        ],
    ]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'tanggal')->textInput() 
    ?>
    <?=
    $form->field($model, 'tanggal')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?php
    if ($role == 'admin') { ?>
        <?= $form->field($model, 'status')->dropDownList(['DRAFT' => 'DRAFT', 'DISETUJUI' => 'DISETUJUI',]) ?>
        <?= $form->field($model, 'file_upload')->textInput(['maxlength' => true]) ?>
    <?php
    } else {
    ?>
        <?php //= $form->field($model, 'status')->dropDownList([ 'DRAFT' => 'DRAFT', 'DISETUJUI' => 'DISETUJUI', ]) 
        ?>
        <?php //= $form->field($model, 'file_upload')->textInput(['maxlength' => true]) 
        ?>
    <?php
    };
    ?>

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