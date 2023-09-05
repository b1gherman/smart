<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPengumuman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-pengumuman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $role = Yii::$app->sikerma->getRole(Yii::$app->user->id);
    // print_r($role);
    if ($role == 'admin') {?>
        <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>
    <?php 
    }else{ 
    ?>
        <?php //= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>
    <?php 
    };
    ?>

    <?php //= $form->field($model, 'idpembuat')->textInput() 
    ?>
    <?= $form->field($model, 'idpembuat')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?= $form->field($model, 'tentang')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'isi')->textarea(['rows' => 6]) 
    ?>
    <?= $form->field($model, 'isi')->widget(alexantr\tinymce\TinyMCE::className(), [
        'clientOptions' => [
            'plugins' => [
                // 'anchor', 'charmap', 'code', 'help', 'hr',
                // 'image', 'link', 'lists', 'media', 'paste',
                // 'searchreplace', 'table',
                'anchor', 'charmap', 'code', 'help', 'hr',
                'image', 'link', 'lists', 'media', 'paste', 'nonbreaking',
                'searchreplace', 'table', 'template', 'preview', 'save', 'lineheight'

            ],
            // 'toolbar' => '| lineheightselect | undo redo | blocks | bold italic | alignleft aligncenter alignright alignjustify | indent outdent',
            // 'lineheight_formats' => "8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 36pt",
            // 'template_cdate_classes' => 'cdate creationdate',
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
        <?php //= $form->field($model, 'file_upload')->textInput(['maxlength' => true]) ?>

        <div class="row">
            <?php
            $json = [];
            $file = '';
            if (!empty($model->file_upload)) {
                $file = yii\helpers\Url::base() . '/naskahkeluar/' . $model->file_upload;
                $json[] = [
                    'caption' => $model->file_upload, yii\helpers\Url::to(['/skeluar-pengumuman/delete-upload']),
                    'key' => 'file_upload' . $model->id,
                    //'url' => yii\helpers\Url::to(['skeluar-keterangan/delete-upload'])
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
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-pengumuman/delete-upload']),
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
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-pengumuman/delete-upload']),
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