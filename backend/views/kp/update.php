<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kp */

$this->title = 'Update KP4: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'KP4', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kp-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
