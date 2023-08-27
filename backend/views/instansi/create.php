<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Instansi */

$this->title = 'Create Instansi';
$this->params['breadcrumbs'][] = ['label' => 'Instansi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instansi-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>