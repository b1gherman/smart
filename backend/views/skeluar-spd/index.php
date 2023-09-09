<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarSpdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Perjalanan Dinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-spd-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Surat Perjalanan Dinas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function ($model, $key, $index, $column) {
                    return kartik\grid\GridView::ROW_COLLAPSED;
                },
                'headerOptions' => ['class' => 'kartik-sheet-style'],
                'expandOneOnly' => true,
                'detail' => function ($model, $key, $index, $column) {
                    $searchModel = new backend\models\SkeluarSpdPengikutSearch();
                    $searchModel->idspd = $model['id'];
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                    
                    return Yii::$app->controller->renderPartial('spd_items', [
                                'searchModel' => $searchModel,
                                'dataProvider' => $dataProvider
                    ]);
                },
            ],
            // 'id',
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
            // 'tingkat_biaya',
            //'maksud',
            //'alat_angkut',
            //'tempat_berangkat',
            'tujuan',
            //'lama',
            //'tgl_berangkat',
            //'tgl_kembali',
            //'idanggaran_instansi',
            //'anggaran_akun',
            //'keterangan_lain',
            //'tempat',
            // 'tanggal',
            'status',
            //'file_upload',
            //'create_at',
            //'update_at',
            //'iduser',
            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'dropdownOptions' => ['class' => 'float-right'],
                'template' => \mdm\admin\components\Helper::filterActionColumn ("{pengikut}&nbsp;{view}&nbsp;{update}&nbsp;{delete}&nbsp;{report}<br/>"),
                // . "{golongan}<br/>"),
                'buttons' => [
                    'pengikut' => function ($url, $model) {
                        return Html::a('<span>Pengikut</span>', $url, [
                                    'title' => Yii::t('app', 'Pengikut'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'view' => function ($url, $model) {
                        return Html::a('<span>View</span>', $url, [
                                    'title' => Yii::t('app', 'View'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span>Update</span>', $url, [
                                    'title' => Yii::t('app', 'Update'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span>Delete</span>', $url, [
                                    'title' => Yii::t('app', 'Delete'),
                                    'class' => 'btn btn-outline-info btn-xs',
                                    'data-confirm' => Yii::t('app', 'Are you sure to delete this item?'),
                                    'data-method' => 'post',
                        ]);
                    },
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print" style="font-size:10px">Print</span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/skeluar-spd/report',
                                        'id' => $model->id
                                    ]). "'); return false",
                                    'class' => 'btn btn-outline-info btn-xs'
                        ]);
                    },                   
                ],
            ],
        ],
    ]);
    ?>

    <?php //= GridView::widget([
    //     'dataProvider' => $dataProvider,
    //     'filterModel' => $searchModel,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],

            // 'id',
    //         'nomor',
            // 'idppk',
    //         [
    //             'label' => 'Pejabat Pembuat Komitmen',
    //             'attribute' => 'idppk0.namapegawai'
    //         ],
            // 'idppd',
    //         [
    //             'label' => 'Pelaksana Perjalanan Dinas',
    //             'attribute' => 'idppd0.namapegawai'
    //         ],
            // 'tingkat_biaya',
            //'maksud',
            //'alat_angkut',
            //'tempat_berangkat',
    //         'tujuan',
            //'lama',
            //'tgl_berangkat',
            //'tgl_kembali',
            //'idanggaran_instansi',
            //'anggaran_akun',
            //'keterangan_lain',
            //'tempat',
            // 'tanggal',
    //         'status',
            //'file_upload',
            //'create_at',
            //'update_at',
            //'iduser',

    //         ['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]); 
    ?>

    <?php Pjax::end(); ?>

</div>
