<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tingkatansekolah */

$this->title = 'Update Tingkatansekolah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tingkatansekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tingkatansekolah-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
