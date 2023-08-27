<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pasangan */

$this->title = 'Create Istri/Suami';
$this->params['breadcrumbs'][] = ['label' => 'Pasangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasangan-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
