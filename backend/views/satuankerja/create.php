<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Satuankerja */

$this->title = 'Create Satuan Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Satuankerja', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satuankerja-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
