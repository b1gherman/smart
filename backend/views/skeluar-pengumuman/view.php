<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarPengumuman */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluar-pengumuman-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
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
            'nomor',
            // 'idpembuat',
            [
                'label' => 'Pembuat Pengumuman',
                'attribute' => 'idpembuat0.namapegawai'
            ],
            // 'tentang:ntext',
            // [
            //     'label' => 'Tentang',
            //     'attribute' => 'tentang',
            //     'format' => 'html',
            // ],
            // 'isi:ntext',
            // [
            //     'label' => 'Isi Pengumuman',
            //     'attribute' => 'isi',
            //     'format' => 'html',
            // ],
            'tempat',
            'tanggal',
            [
                'label' => 'Template',
                'attribute' => 'idtemplate0.nama'
            ],
            'status',
            'file_upload',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>
