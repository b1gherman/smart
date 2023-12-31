<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatan */

$this->title = 'Update Jabatan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-update">

    <h1><?php // Html::encode($this->title) 
        ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>