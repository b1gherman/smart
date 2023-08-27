<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Naikpangkat */

$this->title = 'Create Naikpangkat';
$this->params['breadcrumbs'][] = ['label' => 'Naikpangkats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naikpangkat-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
