<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Syarat */

$this->title = 'Update Syarat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Syarats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="syarat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
