<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarTugas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Tugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluar-tugas-view">

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
            // 'idpemberi',
            [
                'label' => 'Pemberi',
                'attribute' => 'idpemberi0.namapegawai'
            ],
            'idpenerima',
            'tugas:ntext',
            'tanggal_tugas',
            'selama',
            'lokasi',
            'sumber_dana',
            // 'keterangan:ntext',
            'tempat',
            'tanggal',
            'status',
            'file_upload',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>
