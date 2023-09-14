<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarPengantarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Surat Pengantar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-pengantar-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Surat Pengantar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nomor',
            // 'idpengirim',
            [
                'label' => 'Pengirim',
                'attribute' => 'idpengirim0.namapegawai'
            ],
            // 'tempat',
            'tanggal',
            // 'kepada:ntext',
            // [
            //     'label' => 'Kepada',
            //     'attribute' => 'kepada',
            //     'format' => 'html',
            // ],
            //'isi:ntext',
            'status',
            //'file_upload',
            //'create_at',
            //'update_at',
            //'iduser',

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
                    //                     '/skeluar-pengantar/report',
                    //                     'id' => $model->id
                    //                 ]) . "'); return false",
                    //                     // 'class' => 'btn btn-outline-success btn-xs'
                    //     ]);
                    // },
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>