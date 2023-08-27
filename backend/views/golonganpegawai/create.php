<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Golonganpegawai */

$this->title = 'Create Golongan Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Golongan Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golonganpegawai-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
