<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kgb */

$this->title = 'Create KGB';
$this->params['breadcrumbs'][] = ['label' => 'Kgbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kgb-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
