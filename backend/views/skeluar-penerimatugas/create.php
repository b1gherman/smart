<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPenerimatugas */

$this->title = 'Create Penerima Tugas';
$this->params['breadcrumbs'][] = ['label' => 'Penerima Tugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-penerimatugas-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
