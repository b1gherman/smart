<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarmemoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Memo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluarmemo-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Memo', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'idkepada',
            // 'jabatan.namajabatan',
            [
                'label' => 'Kepada',
                'attribute' => 'idkepada0.namajabatan'
            ],
            // 'iddari',
            [
                'label' => 'Dari',
                'attribute' => 'iddari0.namajabatan'
            ],
            'hal',
            //'tglmemo',
            //'isimemo:ntext',
            //'idttd',
            //'tembusan:ntext',
            'status',
            // [
            //     'label' => 'Status',
            //     'attribute' => 'status',
            //     'value' => function ($model) {
            //         if ($model->status == 0) {
            //             $stat = 'DRAFT';
            //         }
            //         if ($model->status == 1) {
            //             $stat = 'DISETUJUI';
            //         }
            //         return $stat;
            //     },
            //     'format' => 'html',
            // ],
            //'create_at',
            //'update_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {report} {toword}',
                'buttons' => [
                    'toword' => function ($url, $model) {
                        return Html::a('<span>Word</span>', $url, [
                                    'title' => Yii::t('app', 'Word'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/skeluarmemo/report',
                                        'id' => $model->id
                                    ]) . "'); return false",
                                        // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>