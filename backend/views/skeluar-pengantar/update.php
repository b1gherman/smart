<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPengantar */

$this->title = 'Update Surat Pengantar : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Pengantar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skeluar-pengantar-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
