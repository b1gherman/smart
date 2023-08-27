<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tingkatansekolah */

$this->title = 'Create Tingkatan Sekolah';
$this->params['breadcrumbs'][] = ['label' => 'Tingkatansekolah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tingkatansekolah-create">

    <h1><?php // Html::encode($this->title) 
        ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>