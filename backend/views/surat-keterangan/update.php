<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratKeterangan */

$this->title = 'Update Surat Keterangan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-keterangan-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
