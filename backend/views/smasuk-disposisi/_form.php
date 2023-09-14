<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SmasukDisposisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="smasuk-disposisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_agenda')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'tanggal_terima')->textInput() 
    ?>
    <?=
    $form->field($model, 'tanggal_terima')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'asal_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hal')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'idditeruskan')->textInput(['maxlength' => true]) 
    ?>
    <?php
    // $data = yii\helpers\ArrayHelper::map(backend\models\Jabatan::find()->all(), 'id', 'namajabatan');
    // echo $form->field($model, 'idditeruskan')->widget(\kartik\select2\Select2::classname(), [
    //     'data' => $data,
    //     'options' => ['placeholder' => 'Pilih ...', 'multiple' => true],
    //     'pluginOptions' => [
    //         'tags' => true,
    //         'tokenSeparators' => [',', ' '],
    //         'maximumInputLength' => 10
    //     ],
    // ])->label('Diteruskan Kepada Yth:');
    ?>

    <?php //= $form->field($model, 'idketdisposisi')->textInput(['maxlength' => true]) 
    ?>
    <?php
    // $data = yii\helpers\ArrayHelper::map(backend\models\KetDisposisi::find()->all(), 'id', 'keterangan_disposisi');
    // echo $form->field($model, 'idketdisposisi')->widget(\kartik\select2\Select2::classname(), [
    //     'data' => $data,
    //     'options' => ['placeholder' => 'Pilih Keterangan Disposisi ...', 'multiple' => true],
    //     'pluginOptions' => [
    //         'tags' => true,
    //         'tokenSeparators' => [',', ' '],
    //         'maximumInputLength' => 10
    //     ],
    // ])->label('Disposisi:');
    ?>

    <?php //= $form->field($model, 'idpildisposisi')->textInput(['maxlength' => true]) 
    ?>
    <?php
    // $data = yii\helpers\ArrayHelper::map(backend\models\PilihanDisposisi::find()->all(), 'id', 'pil_disposisi');
    // echo $form->field($model, 'idpildisposisi')->widget(\kartik\select2\Select2::classname(), [
    //     'data' => $data,
    //     'options' => ['placeholder' => 'Pilihan Disposisi ...', 'multiple' => true],
    //     'pluginOptions' => [
    //         'tags' => true,
    //         'tokenSeparators' => [',', ' '],
    //         'maximumInputLength' => 10
    //     ],
    // ])->label('');
    ?>

    <?php //= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idtemplate')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Template::find()->all(), 'id', 'nama')) ?>

    <?php //= $form->field($model, 'file_upload')->textInput(['maxlength' => true]) 
    ?>

    <div class="row">
        <?php
        $json = [];
        $file = '';
        if (!empty($model->file_upload)) {
            $file = yii\helpers\Url::base() . '/naskahmasuk/' . $model->file_upload;
            $json[] = [
                'caption' => $model->file_upload, yii\helpers\Url::to(['/smasuk-disposisi/delete-upload']),
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
                    'deleteUrl' => yii\helpers\Url::to(['/smasuk-disposisi/delete-upload']),
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
                    'deleteUrl' => yii\helpers\Url::to(['/smasuk-disposisi/delete-upload']),
                    // 'allowedExtensions' => ['.pdf'],
                ]
            ]);
            ?>
        <?php endif; ?>
    </div>

    <?php //= $form->field($model, 'create_at')->textInput() ?>

    <?php //= $form->field($model, 'update_at')->textInput() ?>

    <?php //= $form->field($model, 'iduser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>