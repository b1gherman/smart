<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KetDisposisi */

$this->title = 'Update Keterangan Disposisi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ket Disposisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ket-disposisi-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
