<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahutang */

$this->title = 'Create Utang Kepada Negara (SKPP Pindah)';
$this->params['breadcrumbs'][] = ['label' => 'Skpppindahutang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpppindahutang-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>