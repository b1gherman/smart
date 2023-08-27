<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Naikpangkat */

$this->title = 'Update Naikpangkat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Naikpangkats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="naikpangkat-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
