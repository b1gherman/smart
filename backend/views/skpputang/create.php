<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpputang */

$this->title = 'Create Utang Kepada Negara (SKPP Pensiun)';
$this->params['breadcrumbs'][] = ['label' => 'Skpputang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpputang-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>