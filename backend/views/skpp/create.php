<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpp */

$this->title = 'Create SKPP Pensiun';
$this->params['breadcrumbs'][] = ['label' => 'Skpppensiun', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpp-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>