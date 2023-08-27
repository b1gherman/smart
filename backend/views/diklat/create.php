<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Diklat */

$this->title = 'Create Diklat';
$this->params['breadcrumbs'][] = ['label' => 'Diklats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diklat-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
