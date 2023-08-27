<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolonganpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="golonganpegawai-index">
    <h5>Golongan</h5>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'idpegawai',
            //'idgolongan',
            'golongan.kode_gol',
            'tmt',
            'status',
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

    <!-- <h5>Pendidikan</h5> -->
    <?php //=
    // GridView::widget([
    //     'dataProvider' => $dataProviderPendidikan,
    //     //'filterModel' => $searchModel,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],
    //         'namasekolah',
    //         //'idtingkatansekolah',
    //         'tingkat.kodetingkatan',
    //         'jurusan.namajurusan',
    //         //'idjurusan',
    //         'tahunlulus',
    //         'status',
    //     //['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]);
    ?>

    <!-- <h5>Diklat</h5> -->
    <?php //=
    // GridView::widget([
    //     'dataProvider' => $dataProviderDiklat,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],
    //         'namadiklat',
    //         'tahun',
    //         'jumlahjam',
    //     //['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]);
    ?>

    <h5>Jabatan</h5>
    <?=
    GridView::widget([
        'dataProvider' => $dataProviderJabatan,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'idpegawai',
            //'idjabatan',
            'jabatan.namajabatan',
            'esl',
            'tmt',
            'status',
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

    <!-- <h5>Istri/Suami</h5> -->
    <?php //=
    // GridView::widget([
    //     'dataProvider' => $dataProviderPasangan,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],
    //         // 'id',
    //         // 'idpegawai',
    //         'nama',
    //         'tgllahir',
    //         'tglperkawinan',
    //         'tglpisah',
    //         'pekerjaan.namapekerjaan',
    //         'penghasilan',
    //         'aktif',
    //     //['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]);
    ?>
    
    <!-- <h5>Anak</h5> -->
    <?php //=
    // GridView::widget([
    //     'dataProvider' => $dataProviderAnak,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],
    //         //'id',
    //         //'id_pegawai',
    //         'namaanak',
    //         'statusanak.status',
    //         'tgl_lahir',
    //         'pekerjaan.namapekerjaan',
    //         'status'

    //     // ['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]);
    ?>

    <!-- <h5>Riwayat Kerja</h5> -->
    <?php //=
    // GridView::widget([
    //     'dataProvider' => $dataProviderRiwayatKerja,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],
    //         //'id',
    //         //'idpegawai',
    //         //'idjenissk',
    //         'sk.jenissk.jenis',
    //         'tglmulai',
    //         'golongan1.kode_gol',
    //         //'gapok',
    //         [
    //             'label' => 'Gaji Pokok',
    //             'attribute' => 'gapok',
    //             'contentOptions' => ['class' => 'col-lg-1'],
    //             'format' => ['decimal']
    //         ],
    //         'status',
    //     //['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]);
    ?>

</div>
