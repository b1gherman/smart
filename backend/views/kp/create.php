<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kp */

$this->title = 'Create KP4';
$this->params['breadcrumbs'][] = ['label' => 'KP4', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kp-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
