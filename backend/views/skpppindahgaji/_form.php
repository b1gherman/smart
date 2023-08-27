<?php

use Mpdf\Tag\FieldSet;
use Symfony\Component\DomCrawler\Field\FormField;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahgaji */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skpppindahgaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_skpppindah')->hiddenInput()->label(false) ?>

    <?php //= $form->field($model, 'id_skpppindah')->textInput() ?>

    <?= $form->field($model, 'nomorskpp')->textInput(['readonly' => true])->label('Nomor SKPP Pindah')
    ?>

    <?php //= $form->field($model, 'id_komponengaji')->textInput() 
    ?>

    <?= $form->field($model, 'id_komponengaji')->dropDownList(yii\helpers\ArrayHelper::map(\backend\models\Komponengaji::find()->all(), 'id', 'namakomponen'))->label('Komponen Gaji') ?>


    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>