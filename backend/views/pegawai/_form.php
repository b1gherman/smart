<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <?= $form->field($model, 'namapegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jeniskelamin')->dropDownList(['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan',], ['prompt' => '']) ?>

    <?= $form->field($model, 'statuskepegawaian')->dropDownList(['PNS' => 'PNS', 'CPNS' => 'CPNS', 'PPNPN' => 'PPNPN',], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_serikarpeg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npwp')->textInput() ?>

    <?= $form->field($model, 'tempatlahir')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'tgllahir')->textInput() ?>
    <?=
    $form->field($model, 'tgllahir')->widget(kartik\date\DatePicker::className(), [
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
    $form->field($model, 'tglcpns')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'alamat')->textarea() ?>

    <?= $form->field($model, 'hp')->textInput() ?>

    <?= $form->field($model, 'id_agama')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Agama::find()->all(), 'id', 'agama')) ?>
    
    

    <?= $form->field($model, 'gajipokok')->textInput() ?>

    <?= $form->field($model, 'berkalaakhir')->textInput() ?>

    <?= $form->field($model, 'statuskawin')->dropDownList(['Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin',], ['prompt' => '']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catmutasi')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'create_at')->textInput() ?>

    <?php // $form->field($model, 'update_at')->textInput() ?>

    <?php $form->field($model, 'iduser')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\User::find()->all(), 'id', 'username')) ?>

    <div class="row">
        <?php // $form->field($model, 'surat')->textInput(['maxlength' => true])  ?>
        <?php if (!$model->isNewRecord): ?>
            <?php
            $json = [];
            $file = '';
            if (!empty($model->foto)) {
                $file = yii\helpers\Url::base() . '/foto/' . $model->foto;
                $json[] = [
                    'caption' => $model->foto, yii\helpers\Url::to(['/pegawai/delete-upload']),
                    'key' => 'foto ' . $model->id,
                        //'url' => yii\helpers\Url::to(['kerjasama/delete-upload'])
                ];
            }
            ?>

            <?php // $form->field($model, 'mou')->textInput(['maxlength' => true])  ?>
            <?=
            $form->field($model, 'foto')->widget(kartik\file\FileInput::className(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showRemove' => false,
                    'showUpload' => false,
                    'showCancel' => false,
                    'overwriteInitial' => true,
                    'initialPreviewAsData' => true,
                    'initialPreviewConfig' => $json,
                    'previewTemplates' => 'object',
                    'initialPreviewShowDelete' => true,
                    //'previewFileType' => 'pdf',
                    //'initialPreviewFileType' => 'pdf',
                    'initialPreview' => $file,
                    'encodeUrl' => false,
                    'uploadAsync' => true,
                    'maxFileSize' => 3 * 1024 * 1024,
                    'deleteUrl' => yii\helpers\Url::to(['/pegawai/delete-upload']),
                    //'allowedExtensions' => ['.pdf'],
                ]
            ])
            ?>
        <?php else : ?>
            <?=
            $form->field($model, 'foto')->widget(kartik\file\FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showUpload' => false,
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
