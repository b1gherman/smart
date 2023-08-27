<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindah */

$this->title = 'Create SKPP Pindah';
$this->params['breadcrumbs'][] = ['label' => 'Skpppindah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpppindah-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>