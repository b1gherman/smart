<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Statusanak */

$this->title = 'Update Statusanak: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Statusanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statusanak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
