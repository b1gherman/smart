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
                    $searchModel = new backend\models\SkeluarPenerimatugasSearch();
                    $searchModel->idtugas = $model['id'];
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                    
                    return Yii::$app->controller->renderPartial('tugas_items', [
                                'searchModel' => $searchModel,
                                'dataProvider' => $dataProvider
                    ]);
                },
            ],
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
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'dropdownOptions' => ['class' => 'float-right'],
                'template' => \mdm\admin\components\Helper::filterActionColumn ("{penerima}&nbsp;{view}&nbsp;{update}&nbsp;{delete}<br/>"),
                'buttons' => [
                    'penerima' => function ($url, $model) {
                        return Html::a('<span>Penerima</span>', $url, [
                                    'title' => Yii::t('app', 'Penerima'),
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
            // 'idpemberi',
    //         [
    //             'label' => 'Pemberi Tugas',
    //             'attribute' => 'idpemberi0.namapegawai'
    //         ],
            // 'penerima:ntext',
    //         'tugas:ntext',
            //'tanggal_tugas',
            //'selama',
            //'lokasi',
            //'keterangan:ntext',
            //'tempat',
            //'tanggal',
            //'status',
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
