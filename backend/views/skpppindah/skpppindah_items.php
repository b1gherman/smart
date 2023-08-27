<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolonganpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="golonganpegawai-index">
    <h5>Gaji Terakhir</h5>
    <?= GridView::widget([
        'dataProvider' => $dataProviderSkpppindahgaji,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_skpp',
            'komponengaji.namakomponen',
            'jumlah',
            'komponengaji.kelompok'
            // [
            //     'label' => 'Jumlah',
            //     'value' => 'jumlah'
            // ]

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <h5>Pembayaran Lainnya</h5>
    <?= GridView::widget([
        'dataProvider' => $dataProviderSkpppindahbayarlain,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_skpp',
            'keterangan',
            'subketerangan',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <h5>Utang-Utang Kepada Negara</h5>
    <?= GridView::widget([
        'dataProvider' => $dataProviderSkpppindahutang,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_skpp',
            'uraianpotongan',
            'jumlah',
            'potongan',
            'akunpenerimaan',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>