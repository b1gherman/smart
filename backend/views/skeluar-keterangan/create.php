<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarKeterangan */

$this->title = 'Create Surat Keterangan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-keterangan-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
