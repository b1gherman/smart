<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sk */

$this->title = 'Update Dokumen: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sk-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
