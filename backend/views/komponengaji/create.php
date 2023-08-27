<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Komponengaji */

$this->title = 'Create Komponen Gaji';
$this->params['breadcrumbs'][] = ['label' => 'Komponengaji', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komponengaji-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>