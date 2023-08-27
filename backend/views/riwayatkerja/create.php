<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Riwayatkerja */

$this->title = 'Create Riwayatkerja';
$this->params['breadcrumbs'][] = ['label' => 'Riwayatkerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayatkerja-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
