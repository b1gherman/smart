<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahgaji */

$this->title = 'Create Gaji (SKPP) Pindah';
$this->params['breadcrumbs'][] = ['label' => 'Skpppindahgaji', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpppindahgaji-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>