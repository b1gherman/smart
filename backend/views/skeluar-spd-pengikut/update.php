<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpdPengikut */

$this->title = 'Update Skeluar Spd Pengikut: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skeluar Spd Pengikuts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skeluar-spd-pengikut-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
