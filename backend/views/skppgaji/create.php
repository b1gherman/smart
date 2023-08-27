<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skppgaji */

$this->title = 'Create Gaji (SKPP Pensiun)';
$this->params['breadcrumbs'][] = ['label' => 'Skppgaji', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skppgaji-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>