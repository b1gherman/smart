<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Naikjabatan */

$this->title = 'Create Naikjabatan';
$this->params['breadcrumbs'][] = ['label' => 'Naikjabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naikjabatan-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
