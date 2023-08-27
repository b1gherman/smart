<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sk-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    if ($model->nama != null) {
        echo $form->field($model, 'nama')->textInput(['readonly' => true]);
    }
    ?>
    <?= $form->field($model, 'idpegawai')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'nosk')->textInput(['maxlength' => true])->label("Nomor Dokumen") ?>

    <?= $form->field($model, 'idjenissk')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jenissk::find()->all(), 'id', 'jenis'))->label("Jenis Dokumen") ?>

    <?=
    $form->field($model, 'tgl')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])->label("Tanggal")
    ?>

    <?= $form->field($model, 'pejabat')->textInput(['maxlength' => true])->label("Pejabat") ?>

    <?php // $form->field($model, 'dokumen')->textInput(['maxlength' => true]) ?>
    <div class="row">
        <?php // $form->field($model, 'surat')->textInput(['maxlength' => true])  ?>
        <?php if (!$model->isNewRecord): ?>
            <?php
            $json = [];
            $file = '';
            if (!empty($model->dokumen)) {
                $file = yii\helpers\Url::base() . '/sk/' . $model->dokumen;
                $json[] = [
                    'caption' => $model->dokumen, yii\helpers\Url::to(['/sk/delete-upload']),
                    'key' => 'sk ' . $model->id,
                        //'url' => yii\helpers\Url::to(['kerjasama/delete-upload'])
                ];
            }
            ?>

            <?php // $form->field($model, 'mou')->textInput(['maxlength' => true])  ?>
            <?=
            $form->field($model, 'dokumen')->widget(kartik\file\FileInput::className(), [
                'options' => ['accept' => '.pdf'],
                'pluginOptions' => [
                    'showRemove' => false,
                    'showUpload' => false,
                    'showCancel' => false,
                    'overwriteInitial' => true,
                    'initialPreviewAsData' => true,
                    'initialPreviewConfig' => $json,
                    'previewTemplates' => 'object',
                    'initialPreviewShowDelete' => true,
                    'previewFileType' => 'pdf',
                    'initialPreviewFileType' => 'pdf',
                    'initialPreview' => $file,
                    'encodeUrl' => false,
                    'uploadAsync' => true,
                    'maxFileSize' => 3 * 1024 * 1024,
                    'deleteUrl' => yii\helpers\Url::to(['/sk/delete-upload']),
                    'allowedExtensions' => ['.pdf'],
                ]
            ])
            ?>
        <?php else : ?>
            <?=
            $form->field($model, 'dokumen')->widget(kartik\file\FileInput::classname(), [
                'options' => ['accept' => '.pdf'],
                'pluginOptions' => [
                    'showUpload' => false,
                    //'maxFileSize' => 3 * 1024 * 1024,
                ]
            ]);
            ?>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
