<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratKeterangan */

$this->title = 'Create Surat Keterangan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
