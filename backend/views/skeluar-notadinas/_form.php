<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarNotadinas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-notadinas-form">

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

    <?php //= $form->field($model, 'idkepada')->textInput() ?>
    <?= $form->field($model, 'idkepada')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jabatanstruktural::find()->where(['status'=>1])->orderBy('urutan')->all(), 'id','jabatan.namajabatan')) ?>

    <?php //= $form->field($model, 'iddari')->textInput() ?>
    <?= $form->field($model, 'iddari')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Jabatanstruktural::find()->where(['status'=>1])->orderBy('urutan')->all(), 'id','jabatan.namajabatan')) ?>

    <?= $form->field($model, 'hal')->textInput(['maxlength' => true]) ?>

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

    <?php //= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'isi')->widget(alexantr\tinymce\TinyMCE::className(), [
        'clientOptions' => [
            'plugins' => [
                'anchor', 'charmap', 'code', 'help', 'hr',
                'image', 'link', 'lists', 'media', 'paste',
                'searchreplace', 'table',
            ],
            'height' => 500,
            // ...
        ],
    ]) ?>

    <?php //= $form->field($model, 'idttd')->textInput() ?>
    <?= $form->field($model, 'idttd')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Jabatan::find()->all(), 'id', 'namajabatan')) ?>

    <?= $form->field($model, 'tembusan')->textarea(['rows' => 6]) ?>

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
                    'caption' => $model->file_upload, yii\helpers\Url::to(['/skeluar-notadinas/delete-upload']),
                    'key' => 'file_upload' . $model->id,
                    //'url' => yii\helpers\Url::to(['skeluarmemo/delete-upload'])
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
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-notadinas/delete-upload']),
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
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-notadinas/delete-upload']),
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
