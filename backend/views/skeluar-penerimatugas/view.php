<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPenerimatugas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penerima Tugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluar-penerimatugas-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create', ['createother', 'id' => $model->id, 'idtugas' => $model->idtugas], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'idtugas',
            [
                'label' => 'Tugas',
                'attribute' => 'idtugas0.tugas'
            ],
            // 'idpenerima',
            [
                'label' => 'Penerima',
                'attribute' => 'idpenerima0.namapegawai'
            ],
            'keterangan',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>
