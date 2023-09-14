<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skeluar-spd-form">

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

    <?php //= $form->field($model, 'idppk')->textInput() 
    ?>
    <?= $form->field($model, 'idppk')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?php //= $form->field($model, 'idppd')->textInput() 
    ?>
    <?= $form->field($model, 'idppd')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Pegawai::find()->all(), 'id', 'namapegawai')) ?>

    <?= $form->field($model, 'tingkat_biaya')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'maksud')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'alat_angkut')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'alat_angkut')->dropDownList(['Kendaraan Dinas' => 'Kendaraan Dinas', 'Kendaraan Umum' => 'Kendaraan Umum',]) ?>

    <?= $form->field($model, 'idsurattugas')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\SkeluarTugas::find()->all(), 'id', 'nomor')) ?>

    <?php //= $form->field($model, 'tempat_berangkat')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'tujuan')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'lama')->textInput() ?>

    <?php //= $form->field($model, 'tgl_berangkat')->textInput() 
    ?>
    <?php //=
    // $form->field($model, 'tgl_berangkat')->widget(kartik\date\DatePicker::className(), [
    //     'options' => ['placeholder' => 'Pilih Tanggal'],
    //     'pluginOptions' => [
    //         'autoclose' => true,
    //         'format' => 'yyyy-mm-dd',
    //         'starView' => 0,
    //         'todayHighlight' => true
    //     ]
    // ])
    ?>

    <?php //= $form->field($model, 'tgl_kembali')->textInput() 
    ?>
    <?php //=
    // $form->field($model, 'tgl_kembali')->widget(kartik\date\DatePicker::className(), [
    //     'options' => ['placeholder' => 'Pilih Tanggal'],
    //     'pluginOptions' => [
    //         'autoclose' => true,
    //         'format' => 'yyyy-mm-dd',
    //         'starView' => 0,
    //         'todayHighlight' => true
    //     ]
    // ])
    ?>

    <?php //= $form->field($model, 'idanggaran_instansi')->textInput() 
    ?>
    <?php //= $form->field($model, 'idanggaran_instansi')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Instansi::find()->all(), 'id', 'namainstansi')) ?>

    <?php //= $form->field($model, 'anggaran_akun')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'keterangan_lain')->textInput(['maxlength' => true]) ?>

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

<?= $form->field($model, 'idtemplate')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Template::find()->all(), 'id', 'nama')) ?>

    <?php //= $form->field($model, 'status')->dropDownList([ 'DRAFT' => 'DRAFT', 'DISETUJUI' => 'DISETUJUI', ], ['prompt' => '']) 
    ?>
    <?php //= $form->field($model, 'file_upload')->textInput(['maxlength' => true]) 
    ?>

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
                    'caption' => $model->file_upload, yii\helpers\Url::to(['/skeluar-spd/delete-upload']),
                    'key' => 'file_upload' . $model->id,
                    //'url' => yii\helpers\Url::to(['skeluar-spd/delete-upload'])
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
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-spd/delete-upload']),
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
                        'deleteUrl' => yii\helpers\Url::to(['/skeluar-spd/delete-upload']),
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