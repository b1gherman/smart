<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarNotadinasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Nota Dinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-notadinas-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Nota Dinas', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'tanggal',
            //'isi:ntext',
            //'idttd',
            //'tembusan:ntext',
            'status',
            //'file_upload',
            //'create_at',
            //'update_at',
            //'iduser',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {report}',
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/skeluar-notadinas/report',
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