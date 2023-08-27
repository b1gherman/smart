<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Riwayatkerja */

$this->title = 'Update Riwayatkerja: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayatkerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayatkerja-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
