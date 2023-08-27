<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Naikpns */

$this->title = 'Create Pengangkatan PNS';
$this->params['breadcrumbs'][] = ['label' => 'Naikpns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naikpns-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
