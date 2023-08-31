<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SurattugasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat tugas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surattugas-index">

    <h1><?php // Html::encode($this->title)   ?></h1>

    <p>
        <?= Html::a('Create Surat tugas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'nomor',
            //'idpemberi',
            'pemberi.namapegawai',
            //'idpenerima',
            'penerima.namapegawai',
            'namatugas:ntext',
            //'waktu',
            //'lokasi:ntext',
            //'daritgl',
            //'sampaitgl',
            //'sumberdana',
            //'create_at',
            //'update_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {report}',
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/surattugas/report',
                                        'id' => $model->id
                                    ]) . "'); return false",
                                        // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                ]
            ],
        ],
    ]);
    ?>


</div>