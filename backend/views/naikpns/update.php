<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Naikpns */

$this->title = 'Update Pengangkatan PNS';
$this->params['breadcrumbs'][] = ['label' => 'Naikpns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="naikpns-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
