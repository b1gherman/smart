<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PilihanDisposisi */

$this->title = 'Update Pilihan Disposisi : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pilihan Disposisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pilihan-disposisi-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
