<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkpppindahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Keterangan Penghentian Pembayaran (Pindah)';
$this->params['breadcrumbs'][] = ['label' => 'Skpppindah'];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpppindah-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create SKPP Pindah', ['create'], ['class' => 'btn btn-success']) ?>
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
                    $searchModelSkpppindahgaji = new backend\models\SkpppindahgajiSearch();
                    $searchModelSkpppindahgaji->id_skpppindah = $model['id'];
                    $dataProviderSkpppindahgaji = $searchModelSkpppindahgaji->search(Yii::$app->request->queryParams);

                    $searchModelSkpppindahbayarlain = new backend\models\SkpppindahbayarlainSearch();
                    $searchModelSkpppindahbayarlain->id_skpppindah = $model['id'];
                    $dataProviderSkpppindahbayarlain = $searchModelSkpppindahbayarlain->search(Yii::$app->request->queryParams);

                    $searchModelSkpppindahutang = new backend\models\SkpppindahutangSearch();
                    $searchModelSkpppindahutang->id_skpppindah = $model['id'];
                    $dataProviderSkpppindahutang = $searchModelSkpppindahutang->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('skpppindah_items', [
                        // 'searchModel' => $searchModel,
                        // 'dataProvider' => $dataProvider,
                        'dataProviderSkpppindahgaji' => $dataProviderSkpppindahgaji,
                        'dataProviderSkpppindahbayarlain' => $dataProviderSkpppindahbayarlain,
                        'dataProviderSkpppindahutang' => $dataProviderSkpppindahutang,
                    ]);
                },
            ],

            // 'id',
            'nomorskpp',
            // 'id_pegawai',
            // 'lampiran',
            'pegawai.namapegawai',
            // 'id_sk',
            'sk.nosk',
            'pindah_sebagai',
            //'create_at',
            //'update_at',
            //'iduser',

            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'dropdownOptions' => ['class' => 'float-right'],
                'template' => "{view}&nbsp;{update}&nbsp;{delete}"
                    . "{report}&nbsp;||&nbsp;{skpppindahgaji}&nbsp;{skpppindahbayarlain}&nbsp;{skpppindahutang}",
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"> Print</span>', '', [
                            'title' => Yii::t('app', 'Print'),
                            'class' => 'fa fa-print',
                            'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                '/skpppindah/report',
                                'id' => $model->id
                            ]) . "'); return false",
                            'class' => 'btn btn-outline-info btn-xs',
                            // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'skpppindahgaji' => function ($url, $model) {
                        return Html::a('<span>Gaji</span>', $url, [
                            'title' => Yii::t('app', 'Gaji'),
                            'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'skpppindahbayarlain' => function ($url, $model) {
                        return Html::a('<span>Bayar Lainnya</span>', $url, [
                            'title' => Yii::t('app', 'Pembayaran Lainnya'),
                            'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'skpppindahutang' => function ($url, $model) {
                        return Html::a('<span>Utang</span>', $url, [
                            'title' => Yii::t('app', 'Pembayaran Utang'),
                            'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    // 'skpppindahnonaktifsupplier' => function ($url, $model) {
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