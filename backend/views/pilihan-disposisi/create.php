<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PilihanDisposisi */

$this->title = 'Create Pilihan Disposisi';
$this->params['breadcrumbs'][] = ['label' => 'Pilihan Disposisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pilihan-disposisi-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
