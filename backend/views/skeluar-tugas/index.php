<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarTugasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Tugas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-tugas-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Surat Tugas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?php //=
    // kartik\grid\GridView::widget([
    //     'dataProvider' => $dataProvider,
    //     'filterModel' => $searchModel,
    //     'columns' => [
    //         ['class' => 'kartik\grid\SerialColumn'],
    //         [
    //             'class' => 'kartik\grid\ExpandRowColumn',
    //             'value' => function ($model, $key, $index, $column) {
    //                 return kartik\grid\GridView::ROW_COLLAPSED;
    //             },
    //             'headerOptions' => ['class' => 'kartik-sheet-style'],
    //             'expandOneOnly' => true,
    //             'detail' => function ($model, $key, $index, $column) {
    //                 $searchModel = new backend\models\SkeluarPenerimatugasSearch();
    //                 $searchModel->idtugas = $model['id'];
    //                 $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //                 return Yii::$app->controller->renderPartial('tugas_items', [
    //                             'searchModel' => $searchModel,
    //                             'dataProvider' => $dataProvider
    //                 ]);
    //             },
    //         ],
    //         // 'id',
    //         'nomor',
    //         // 'idpemberi',
    //         [
    //             'label' => 'Pemberi Tugas',
    //             'attribute' => 'idpemberi0.namapegawai'
    //         ],
    //         // 'penerima:ntext',
    //         'tugas:ntext',
    //         // 'tanggal_tugas',
    //         // 'selama',
    //         // 'lokasi',
    //         // 'keterangan:ntext',
    //         // 'tempat',
    //         // 'tanggal',
    //         'status',
    //         // 'file_upload',
    //         // 'create_at',
    //         // 'update_at',
    //         // 'iduser',
    //         [
    //             'class' => 'kartik\grid\ActionColumn',
    //             'dropdown' => true,
    //             'dropdownOptions' => ['class' => 'float-right'],
    //             'template' => \mdm\admin\components\Helper::filterActionColumn ("{penerima}&nbsp;{view}&nbsp;{update}&nbsp;{delete}&nbsp;{report}<br/>"),
    //             'buttons' => [
    //                 'penerima' => function ($url, $model) {
    //                     return Html::a('<span>Penerima</span>', $url, [
    //                                 'title' => Yii::t('app', 'Penerima'),
    //                                 'class' => 'btn btn-outline-info btn-xs',
    //                     ]);
    //                 },
    //                 'view' => function ($url, $model) {
    //                     return Html::a('<span>View</span>', $url, [
    //                                 'title' => Yii::t('app', 'View'),
    //                                 'class' => 'btn btn-outline-info btn-xs',
    //                     ]);
    //                 },
    //                 'update' => function ($url, $model) {
    //                     return Html::a('<span>Update</span>', $url, [
    //                                 'title' => Yii::t('app', 'Update'),
    //                                 'class' => 'btn btn-outline-info btn-xs',
    //                     ]);
    //                 },
    //                 'delete' => function ($url, $model) {
    //                     return Html::a('<span>Delete</span>', $url, [
    //                                 'title' => Yii::t('app', 'Delete'),
    //                                 'class' => 'btn btn-outline-info btn-xs',
    //                                 'data-confirm' => Yii::t('app', 'Are you sure to delete this item?'),
    //                                 'data-method' => 'post',
    //                     ]);
    //                 },
    //                 'report' => function ($url, $model) {
    //                     return Html::a('<span class="fa fa-print" style="font-size:10px">Print</span>', '', [
    //                                 'title' => Yii::t('app', 'Print'),
    //                                 'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
    //                                     '/skeluar-tugas/report',
    //                                     'id' => $model->id
    //                                 ])
    //                                 . "'); return false",
    //                                 'class' => 'btn btn-outline-info btn-xs'
    //                     ]);
    //                 },                      
    //             ],
    //         ],
    //     ],
    // ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nomor',
            // 'idpemberi',
            [
                'label' => 'Pemberi Tugas',
                'attribute' => 'idpemberi0.namapegawai'
            ],
            // 'penerima:ntext',
            'tugas:ntext',
            // 'tanggal_tugas',
            // 'selama',
            // 'lokasi',
            // 'keterangan:ntext',
            // 'tempat',
            // 'tanggal',
            'status',
            // 'file_upload',
            // 'create_at',
            // 'update_at',
            // 'iduser',

            [
                'class' => 'yii\grid\ActionColumn',
                // 'template' => '{view} {update} {delete} {report}',
                'template' => '{view} {update} {delete} {toword}',
                'buttons' => [
                    'toword' => function ($url, $model) {
                        return Html::a('<span class="fas fa-file-word"></span>', $url, [
                                    'title' => Yii::t('app', 'Word'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    // 'report' => function ($url, $model) {
                    //     return Html::a('<span class="fa fa-print"></span>', '', [
                    //                 'title' => Yii::t('app', 'Print'),
                    //                 'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                    //                     '/skeluar-suratdinas/report',
                    //                     'id' => $model->id
                    //                 ]) . "'); return false",
                    //                     // 'class' => 'btn btn-outline-success btn-xs'
                    //     ]);
                    // },
                ]
            ],
        ],
    ]);
    ?>

    <?php Pjax::end(); ?>

</div>