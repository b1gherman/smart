<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jeniscuti */

$this->title = 'Update Jenis Cuti: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniscuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jeniscuti-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>