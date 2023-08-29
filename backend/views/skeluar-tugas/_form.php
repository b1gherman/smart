<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarTugas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-tugas-form">

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

    <?php //= $form->field($model, 'idpemberi')->textInput() ?>
    <?= $form->field($model, 'idpemberi')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?php //= $form->field($model, 'penerima')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'penerima')->widget(alexantr\tinymce\TinyMCE::className(), [
        'clientOptions' => [
            'plugins' => [
                'anchor', 'charmap', 'code', 'help', 'hr',
                'image', 'link', 'lists', 'media', 'paste',
                'searchreplace', 'table',
            ],
            'height' => 400,
            // ...
        ],
    ]) ?>

    <?= $form->field($model, 'tugas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_tugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'tanggal')->textInput() ?>
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

    <?php //= $form->field($model, 'status')->dropDownList([ 'DRAFT' => 'DRAFT', 'DISETUJUI' => 'DISETUJUI', ], ['prompt' => '']) ?>
    <?php //= $form->field($model, 'file_upload')->textInput(['maxlength' => true]) ?>

    <?php
    if ($role == 'admin') { ?>
        <?= $form->field($model, 'status')->dropDownList(['DRAFT' => 'DRAFT', 'DISETUJUI' => 'DISETUJUI',]) ?>
        <?php //= $form->field($model, 'file_upload')->textInput(['maxlength' => true]) 
        ?>

        <div class="row">
            <?php
            $json = [];
            $file = '';
            if (!empty($model->file_upload)) {
                $file = yii\helpers\Url::base() . '/naskahkeluar/' . $model->file_upload;
                $json[] = [
                    'caption' => $model->file_upload, yii\helpers\Url::to(['/skeluar-tugas/delete-upload']),
                    'key' => 'file_upload' . $model->id,
                    //'url' => yii\helpers\Url::to(['skeluar-tugas/delete-upload'])
                ];
            }
            ?>
            <?php if (!$model->isNewRecord) : ?>
                <?=
                $form->field($model, 'file_upload')->widget(kartik\file\FileInput::className(), [
                    'options' => ['accept' => 'pdf/*'],
                    'pluginOptions' => [
                        'showRemove' => false,
                        'showUpload' => false,
                        'showCancel' => false,
                        'overwriteInitial' => true,
                        'initialPreviewAsData' => true,
                        'initialPreviewConfig' => $json,
                        'previewTemplates' => 'object',
                        'initialPreviewShowDelete' => true,
                        // 'previewFileType' => 'pdf',
                        // 'initialPreviewFileType' => 'pdf',
                        'initialPreview' => $file,
                        'encodeUrl' => false,
                        'uploadAsync' => true,
                        'maxFileSize' => 3 * 1024 * 1024,
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-tugas/delete-upload']),
                        // 'allowedExtensions' => ['.pdf'],
                    ]
                ])
                ?>
            <?php else : ?>
                <?=
                $form->field($model, 'file_upload')->widget(kartik\file\FileInput::classname(), [
                    'options' => ['accept' => 'pdf/*'],
                    'pluginOptions' => [
                        'showUpload' => false,
                        'showUpload' => true,
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
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-tugas/delete-upload']),
                        // 'allowedExtensions' => ['.pdf'],
                    ]
                ]);
                ?>
            <?php endif; ?>
        </div>

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

    <?php //= $form->field($model, 'create_at')->textInput() ?>

    <?php //= $form->field($model, 'update_at')->textInput() ?>

    <?php //= $form->field($model, 'iduser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
