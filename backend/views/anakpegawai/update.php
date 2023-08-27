<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Anakpegawai */

$this->title = 'Update Anakpegawai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Anakpegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anakpegawai-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
