<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KgbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kenaikan Gaji Berkala';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kgb-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?= Html::a('Create KGB', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'lampiran',
            //'idpegawai',
            'pegawai.namapegawai',
            //'idsklama',
            [
                'label' => 'SK Sebelumnya',
                'value' => 'sklama.nosk'
            ],
            //'gapokbaru',
            //'masakerjabarutahun',
            //'masakerjabarubulan',
            //'golonganbaru',
            //'tanggalbaru',
            //'ttd1',
            //'tembusan:ntext',
            //'create_at',
            //'update_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}{report}',
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/kgb/report',
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
