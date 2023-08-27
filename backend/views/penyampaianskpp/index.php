<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PenyampaianskppSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Penyampaian SKPP';
$this->params['breadcrumbs'][] = ['label' => 'Penyampaianskpp'];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="Penyampaianskpp-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Penyampaian SKPP', ['create'], ['class' => 'btn btn-success']) ?>
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
                    'nomor_surat',
                    'sifat',
                    'lampiran',
                    'hal:ntext',
                    //'tanggal_surat',
                    //'kepada:ntext',
                    //'id_pegawai',
                    //'id_pegawai_kepala',
                    //'create_at',
                    //'update_at',
                    //'iduser',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{report} {view} {update} {delete}',
                        'buttons' => [
                            'report' => function ($url, $model) {
                                return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/Penyampaianskpp/report',
                                        'id' => $model->id
                                    ]) . "'); return false",
                                    // 'class' => 'btn btn-outline-success btn-xs'
                                ]);
                            },
                        ]
                    ],
                ],
            ]); ?> -->

    <?=
    kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            // 'id',
            'nomor_surat',
            'jenisskpp.namajenisskpp',
            // 'sifat',
            // 'lampiran',
            'hal:ntext',
            // 'id_jenisskpp',
            //'tanggal_surat',
            //'kepada:ntext',
            // 'id_pegawai',
            'pegawai.namapegawai',
            //'id_pegawai_kepala',
            //'create_at',
            //'update_at',
            //'iduser',

            [
                'class' => 'kartik\grid\ActionColumn',
                // 'dropdown' => true,
                // 'dropdownOptions' => ['class' => 'float-right'],
                'template' => '{report} {view} {update} {delete}',
                    // . "{report}&nbsp;||&nbsp;{skppnonaktifsupplier}&nbsp;{skpp}",
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                            'title' => Yii::t('app', 'Print'),
                            'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                '/penyampaianskpp/report',
                                'id' => $model->id
                            ]) . "'); return false",
                            // 'class' => 'btn btn-outline-info btn-xs',
                            // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                ]
            ],
        ],
    ]);
    ?>

    <?php Pjax::end(); ?>

</div>