<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jeniscuti */

$this->title = 'Create Jenis Cuti';
$this->params['breadcrumbs'][] = ['label' => 'Jeniscuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jeniscuti-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>