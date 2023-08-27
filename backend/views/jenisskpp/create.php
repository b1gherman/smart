<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jenisskpp */

$this->title = 'Create Jenis SKPP';
$this->params['breadcrumbs'][] = ['label' => 'Jenisskpp', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisskpp-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
