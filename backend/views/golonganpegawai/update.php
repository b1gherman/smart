<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Golonganpegawai */

$this->title = 'Update Golonganpegawai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Golonganpegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golonganpegawai-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
