<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sekolah */

$this->title = 'Create Sekolah';
$this->params['breadcrumbs'][] = ['label' => 'Sekolah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sekolah-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>