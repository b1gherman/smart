<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratKeterangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keterangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput() ?>

    <?php // $form->field($model, 'idunit')->textInput() ?>

    <?php
    $data = yii\helpers\ArrayHelper::map(backend\models\Unit::find()->all(), 'id', function ($model) {
                $hasil = $model->kode . '-->' . $model->unit;
                if ($model->parent != 0) {
                    $parent = $model->parent;
                    while ($parent > 1) {
                        $unit = \backend\models\Unit::findOne($parent);
                        $parent = $unit->parent;
                        $hasil .= "-->" . $unit->unit;
                    }
                } else {
                    $hasil = $model->kode . '-->' . $model->unit;
                }
                return $hasil;
            });
    echo $form->field($model, 'idunit')->widget(kartik\select2\Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php // $form->field($model, 'idttd')->textInput() ?>

    <?= $form->field($model, 'idttd')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->all(), 'id', 'nama')) ?>

    <?php // $form->field($model, 'idterangkan')->textInput() ?>

    <?= $form->field($model, 'idterangkan')->dropDownList(yii\helpers\ArrayHelper::map(backend\models\Pegawai::find()->all(), 'id', 'nama')) ?>

    <?php // $form->field($model, 'tanggal')->textInput() ?>

    <?=
    $form->field($model, 'tanggal')->widget(kartik\date\DatePicker::className(), [
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'starView' => 0,
            'todayHighlight' => true
        ]
    ])->label('Tanggal Dokumen')
    ?>

    <?php // $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <?=
    $form->field($model, 'isi')->widget(alexantr\tinymce\TinyMCE::className(), [
        'clientOptions' => [
            'plugins' => [
//                "advlist anchor autolink autoresize autosave bbcode charmap code "
//                . "codesample colorpicker contextmenu directionality emoticons fullpage "
//                . "fullscreen help hr "
//                . "image imagetools importcss insertdatetime legacyoutput link lists "
//                . "media nonbreaking noneditable pagebreak paste preview print save searchreplace "
//                . "tabfocus table template textcolor textpattern toc visualblocks visualchars wordcount"
                'anchor', 'charmap', 'code', 'help', 'hr',
                'image', 'link', 'lists', 'media', 'paste', 'nonbreaking',
                'searchreplace', 'table', 'template', 'preview', 'save', 'lineheight'
            ],
            'toolbar' => '| lineheightselect | undo redo | blocks | bold italic | alignleft aligncenter alignright alignjustify | indent outdent',
            'lineheight_formats' => "8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 36pt",
            'template_cdate_classes' => 'cdate creationdate',
            'height' => 500,
            'convert_urls' => false,
            'element_format' => 'html',
            'templates' => [
                [
                    'title' => 'Date modified example',
                    'description' => 'Adds a timestamp indicating the last time the document modified.',
                    'content' => '<p>Last Modified: <time class="mdate">This will be replaced with the date modified.</time></p>'
                ],
            ],
            'content_style' => 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        ]
    ])
    ?>
    <?php
    $data = yii\helpers\ArrayHelper::map(backend\models\Jabatan::find()->all(), 'id', 'jabatan');
    echo $form->field($model, 'idtembusan')->widget(\kartik\select2\Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Select a color ...', 'multiple' => true],
        'pluginOptions' => [
            'tags' => true,
            'tokenSeparators' => [',', ' '],
            'maximumInputLength' => 10
        ],
    ])->label('Tembusan');
    ?>
    <?php // $form->field($model, 'idtembusan')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'create_at')->textInput() ?>

    <?php // $form->field($model, 'create_by')->textInput() ?>

    <?php // $form->field($model, 'update_at')->textInput() ?>

    <?php // $form->field($model, 'update_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
