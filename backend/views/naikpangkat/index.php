<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NaikpangkatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Naikpangkats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naikpangkat-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?= Html::a('Create Naikpangkat', ['create'], ['class' => 'btn btn-success']) ?>
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
            'jumlahberkas',
            //'idpegawai',
            'pegawai.namapegawai',
            //'idpangkatbaru',
            //'pegawai.golaktif.golongan.pangkat',
            [
                'label' => 'Pangkat Lama',
                'value' => 'pegawai.golaktif.golongan.pangkat'
            ],
            //'golongan.pangkat',
            [
                'label' => 'Pangkat Diajukan',
                'value' => 'golongan.pangkat'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}{report}',
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/naikpangkat/report',
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
