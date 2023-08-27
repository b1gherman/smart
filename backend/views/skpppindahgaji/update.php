<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahgaji */

$this->title = 'Update Gaji (SKPP) Pindah : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skpppindahgaji', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skpppindahgaji-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
