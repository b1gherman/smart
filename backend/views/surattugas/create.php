<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Surattugas */

$this->title = 'Create Surattugas';
$this->params['breadcrumbs'][] = ['label' => 'Surattugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surattugas-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
