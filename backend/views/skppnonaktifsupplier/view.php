<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Skppnonaktifsupplier */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skppnonaktifsupplier', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skppnonaktifsupplier-view">

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
            'no_dirjen_bendahara',
            // 'id_instansi',
            [
                'label' => 'Nama Supplier',
                'value' => $model->instansi->kodesatuan . " (" . $model->instansi->satuanorganisasi . ")",
            ],
            'no_register_supplier',
            // 'id_pegawai',
            'pegawai.namapegawai',
            'nama_bank',
            'no_rekening',
            // 'id_sk',
            [
                'label' => 'Nomor SK',
                'value' => $model->sk->nosk
            ],
            // 'sk.nosk',
            // 'id_pegawai_kpa',
            [
                'label' => 'Kuasa Pengguna Anggaran',
                'value' => $model->pegawaiKpa->namapegawai,
            ],
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>