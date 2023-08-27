<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Duk */

$this->title = 'Create Duk';
$this->params['breadcrumbs'][] = ['label' => 'Duks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duk-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
