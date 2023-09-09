<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SuratKeteranganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Keterangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?= Html::a('Create Surat Keterangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'kode',
            //'idunit',
            'unit.unit',
            //'idttd',
//            [
//                'label'=>''
//            ],
//            'idterangkan',
            'tanggal',
            //'isi:ntext',
            [
                'label' => 'Isi',
                'format' => 'raw',
                'value' => 'isi'
            ],
            //'idtembusan',
            //'create_at',
            //'create_by',
            //'update_at',
            //'update_by',
                        [
                'class' => 'yii\grid\ActionColumn',
                'template' => "{update} {delete} {report}",
//                'urlCreator' => function ($action, \backend\models\CsvPrestasi $model, $key, $index, $column) {
//                    return Url::toRoute([$action, 'nomor_pendaftaran' => $model->nomor_pendaftaran, 'no_prestasi' => $model->no_prestasi]);
//                 }
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/surat-keterangan/report',
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
