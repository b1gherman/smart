<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sk */

$this->title = 'Create Dokumen';
$this->params['breadcrumbs'][] = ['label' => 'Sks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sk-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
