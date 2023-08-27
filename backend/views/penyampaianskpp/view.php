<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Penyampaianskpp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penyampaianskpp', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="Penyampaianskpp-view">

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
            'nomor_surat',
            'sifat',
            'lampiran',
            'hal:ntext',
            'jenisskpp.namajenisskpp',
            'tanggal_surat',
            'kepada:ntext',
            // 'id_pegawai',
            [
                'label' => 'Nama Pegawai',
                'value' => $model->pegawai->namapegawai,
            ],
            // 'id_pegawai_kepala',
            [
                'label' => 'Kepala Stasiun',
                'value' => $model->pegawaiKepala->namapegawai,
            ],
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>