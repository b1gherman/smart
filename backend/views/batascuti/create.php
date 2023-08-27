<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Batascuti */

$this->title = 'Create Batas cuti';
$this->params['breadcrumbs'][] = ['label' => 'Batas cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batascuti-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
