<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SmasukDisposisi */

$this->title = 'Create Lembar Disposisi';
$this->params['breadcrumbs'][] = ['label' => 'Lembar Disposisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smasuk-disposisi-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
