<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pasangan */

$this->title = 'Update Pasangan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pasangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasangan-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
