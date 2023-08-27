<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkppSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Keterangan Penghentian Pembayaran (Pensiun)';
$this->params['breadcrumbs'][] = ['label' => 'Skpppensiun'];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpp-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create SKPP Pensiun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <!-- <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'nomorskpp',
                    // 'id_pegawai',
                    'pegawai.namapegawai',
                    // 'id_sk',
                    'sk.nosk',
                    'tmtberhenti',
                    //'create_at',
                    //'update_at',
                    //'iduser',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?> -->

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
                    $searchModelSkppgaji = new backend\models\SkppgajiSearch();
                    $searchModelSkppgaji->id_skpp = $model['id'];
                    $dataProviderSkppgaji = $searchModelSkppgaji->search(Yii::$app->request->queryParams);

                    $searchModelSkppbayarlain = new backend\models\SkppbayarlainSearch();
                    $searchModelSkppbayarlain->id_skpp = $model['id'];
                    $dataProviderSkppbayarlain = $searchModelSkppbayarlain->search(Yii::$app->request->queryParams);

                    $searchModelSkpputang = new backend\models\SkpputangSearch();
                    $searchModelSkpputang->id_skpp = $model['id'];
                    $dataProviderSkpputang = $searchModelSkpputang->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('skpp_items', [
                        // 'searchModel' => $searchModel,
                        // 'dataProvider' => $dataProvider,
                        'dataProviderSkppgaji' => $dataProviderSkppgaji,
                        'dataProviderSkppbayarlain' => $dataProviderSkppbayarlain,
                        'dataProviderSkpputang' => $dataProviderSkpputang,
                    ]);
                },
            ],

            // 'id',
            'nomorskpp',
            // 'id_pegawai',
            'pegawai.namapegawai',
            // 'id_sk',
            'sk.nosk',
            'tmtberhenti',
            //'create_at',
            //'update_at',
            //'iduser',

            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'dropdownOptions' => ['class' => 'float-right'],
                'template' => "{view}&nbsp;{update}&nbsp;{delete}"
                    . "{report}&nbsp;||&nbsp;{skppgaji}&nbsp;{skppbayarlain}&nbsp;{skpputang}",
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"> Print</span>', '', [
                            'title' => Yii::t('app', 'Print'),
                            'class' => 'fa fa-print',
                            'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                '/skpp/report',
                                'id' => $model->id
                            ]) . "'); return false",
                            'class' => 'btn btn-outline-info btn-xs',
                            // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'skppgaji' => function ($url, $model) {
                        return Html::a('<span>Gaji</span>', $url, [
                            'title' => Yii::t('app', 'Gaji'),
                            'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'skppbayarlain' => function ($url, $model) {
                        return Html::a('<span>Bayar Lainnya</span>', $url, [
                            'title' => Yii::t('app', 'Pembayaran Lainnya'),
                            'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'skpputang' => function ($url, $model) {
                        return Html::a('<span>Utang</span>', $url, [
                            'title' => Yii::t('app', 'Pembayaran Utang'),
                            'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    // 'skppnonaktifsupplier' => function ($url, $model) {
                    //     return Html::a('<span>Nonaktif Supplier</span>', $url, [
                    //         'title' => Yii::t('app', 'Non Aktif Supplier'),
                    //         'class' => 'btn btn-outline-info btn-xs',
                    //     ]);
                    // },
                ],
            ],
        ],
    ]);
    ?>

    <?php Pjax::end(); ?>

</div>