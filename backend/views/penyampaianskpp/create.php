<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Penyampaianskpp */

$this->title = 'Create Penyampaian SKPP';
$this->params['breadcrumbs'][] = ['label' => 'Penyampaianskpp', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Penyampaianskpp-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>