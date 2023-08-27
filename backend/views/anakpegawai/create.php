<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Anakpegawai */

$this->title = 'Create Anakpegawai';
$this->params['breadcrumbs'][] = ['label' => 'Anakpegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anakpegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
