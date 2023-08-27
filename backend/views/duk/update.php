<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Duk */

$this->title = 'Update DUK: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Duks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="duk-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
