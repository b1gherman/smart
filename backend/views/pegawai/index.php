<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?php // Html::encode($this->title)                               ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <?=
    kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
//            [
//                'class' => 'kartik\grid\ExpandRowColumn',
//                'value' => function ($model, $key, $index, $column) {
//                    return kartik\grid\GridView::ROW_COLLAPSED;
//                },
//                'headerOptions' => ['class' => 'kartik-sheet-style'],
//                'expandOneOnly' => true,
//                'detail' => function ($model, $key, $index, $column) {
//                    $searchModel = new backend\models\GolonganpegawaiSearch();
//                    $searchModel->idpegawai = $model['id'];
//                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//                    $searchModelJabatan = new backend\models\JabatanpegawaiSearch();
//                    $searchModelJabatan->idpegawai = $model['id'];
//                    $dataProviderJabatan = $searchModelJabatan->search(Yii::$app->request->queryParams);
//                    return Yii::$app->controller->renderPartial('pegawai_items', [
//                                'searchModel' => $searchModel,
//                                'dataProvider' => $dataProvider,
//                                'dataProviderJabatan' => $dataProviderJabatan
//                    ]);
//                },
//            ],
            //'id',
            'nip',
            'namapegawai',
            'golongan',
            'pangkat',
            'jabatan',
//            [
//                'format' => 'image',
//                'value' => function($data) {
//                    return $data->imageurl;
//                },
//            ],
//            [
//                'attribute' => 'Foto',
//                'format' => 'html',
//                'value' => function($data) {
//                    return Html::img($data->imageurl, ['width' => '100']);
//                },
//            ],
            //'no_serikarpeg',
            //'npwp',
            //'tempatlahir',
            //'tgllahir',
            //'alamat',
            //'hp',
            //'id_agama',
            //'gajipokok',
            //'berkalaakhir',
            //'statuskawin',
            //'email:email',
            //'catmutasi',
            //'create_at',
            //'update_at',
            //'iduser',
            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'dropdownOptions' => ['class' => 'float-right'],
                'template' => \mdm\admin\components\Helper::filterActionColumn ("{view}&nbsp;{update}&nbsp;{delete}&nbsp{nonaktif}<br/>"
                . "{golongan}&nbsp;{jabatan}<br/>"),
                // 'template' => \mdm\admin\components\Helper::filterActionColumn ("{view}&nbsp;{update}&nbsp;{delete}&nbsp{nonaktif}<br/>"
                // . "{golongan}&nbsp;{pendidikan}&nbsp;{diklat}&nbsp;{jabatan}<br/>"
                // . "{pasangan}&nbsp;{anak}&nbsp;{kerja}&nbsp{dokumen}<br/>"
                // . "{reportriwayatkerja}"),
//                'template' => "{view}&nbsp;{update}&nbsp;{delete}"
//                . "<br/>{golongan}&nbsp;{pendidikan}<br/>{diklat}&nbsp;{jabatan}<br/>{pasangan}&nbsp;{anak}",
                'buttons' => [
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
                    'nonaktif' => function ($url, $model) {
                        return Html::a('<span>Non Aktif</span>', $url, [
                                    'title' => Yii::t('app', 'Non Aktif'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'golongan' => function ($url, $model) {
                        return Html::a('<span>Golongan</span>', $url, [
                                    'title' => Yii::t('app', 'Golongan'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    // 'pendidikan' => function ($url, $model) {
                    //     return Html::a('<span>Pendidikan</span>', $url, [
                    //                 'title' => Yii::t('app', 'Pendidikan'),
                    //                 'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                    // 'diklat' => function ($url, $model) {
                    //     return Html::a('<span>Diklat</span>', $url, [
                    //                 'title' => Yii::t('app', 'Diklat'),
                    //                 'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                    'jabatan' => function ($url, $model) {
                        return Html::a('<span>Jabatan</span>', $url, [
                                    'title' => Yii::t('app', 'Jabatan'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    // 'pasangan' => function ($url, $model) {
                    //     return Html::a('<span>Pasangan</span>', $url, [
                    //                 'title' => Yii::t('app', 'Pasangan'),
                    //                 'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                    // 'anak' => function ($url, $model) {
                    //     return Html::a('<span>Anak</span>', $url, [
                    //                 'title' => Yii::t('app', 'Anak'),
                    //                 'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                    // 'kerja' => function ($url, $model) {
                    //     return Html::a('<span>Kerja</span>', $url, [
                    //                 'title' => Yii::t('app', 'Riwayat Kerja'),
                    //                 'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                    // 'dokumen' => function ($url, $model) {
                    //     return Html::a('<span>Dokumen</span>', $url, [
                    //                 'title' => Yii::t('app', 'Dokumen'),
                    //                 'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                    // 'reportriwayatkerja' => function ($url, $model) {
                    //     return Html::a('<span class="fa fa-print">Riwayat Kerja</span>', '', [
                    //                 'title' => Yii::t('app', 'Print Riwayat Kerja'),
                    //                 'onclick' => "window.open ('"
                    //                 . \yii\helpers\Url::toRoute([
                    //                     '/pegawai/reportriwayatkerja',
                    //                     'id' => $model->id
                    //                 ])
                    //                 . "'); return false",
                    //                 'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                //                    'reportnominatif' => function ($url, $model) {
                //                        return Html::a('<span class="fa fa-print">Nominatif</span>', '', [
                //                                    'title' => Yii::t('app', 'Print Nominatif'),
                //                                    'onclick' => "window.open ('"
                //                                    . \yii\helpers\Url::toRoute([
                //                                        '/pegawai/reportnominatif',
                //                                        'id' => $model->id
                //                                    ])
                //                                    . "'); return false",
                //                                    'class' => 'btn btn-outline-info btn-xs',
                //                        ]);
                //                    },
                ],
            ],
        ],
    ]);
    ?>


</div>
