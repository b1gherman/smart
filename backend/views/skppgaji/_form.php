<?php

use Mpdf\Tag\FieldSet;
use Symfony\Component\DomCrawler\Field\FormField;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Skppgaji */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skppgaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'id_skpp')->textInput() ?>
    <?= $form->field($model, 'id_skpp')->hiddenInput()->label(false) 
    ?>

    <?= $form->field($model, 'nomorskpp')->textInput(['readonly' => true])->label('Nomor SKPP')
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