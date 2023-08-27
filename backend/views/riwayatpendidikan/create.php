<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Riwayatpendidikan */

$this->title = 'Create Riwayatpendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Riwayatpendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayatpendidikan-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
