<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarSpd */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Perjalanan Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluar-spd-view">

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
            // 'idppk',
            [
                'label' => 'Pejabat Pembuat Komitmen',
                'attribute' => 'idppk0.namapegawai'
            ],
            // 'idppd',
            [
                'label' => 'Pelaksana Perjalanan Dinas',
                'attribute' => 'idppd0.namapegawai'
            ],
            'tingkat_biaya',
            // 'maksud',
            'alat_angkut',
            [
                'label' => 'Surat Tugas Nomor',
                'attribute' => 'idsurattugas0.nomor'
            ],
            // 'tempat_berangkat',
            // 'tujuan',
            // 'lama',
            // 'tgl_berangkat',
            // 'tgl_kembali',
            // 'idanggaran_instansi',
            // [
            //     'label' => 'Instansi',
            //     'attribute' => 'idanggaranInstansi.namainstansi'
            // ],
            // 'anggaran_akun',
            // 'keterangan_lain',
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
