<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkppnonaktifsupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SKPP Non Aktif Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skppnonaktifsupplier-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create SKPP Non Aktif Supplier', ['create'], ['class' => 'btn btn-success']) ?>
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
            'nomor_surat',
            // 'sifat',
            // 'lampiran',
            'hal:ntext',
            'jenisskpp.namajenisskpp',
            // 'tanggal_surat',
            //'kepada:ntext',
            //'no_dirjen_bendahara',
            //'id_instansi',
            //'no_register_supplier',
            //'id_pegawai',
            'pegawai.namapegawai',
            //'nama_bank',
            //'no_rekening',
            //'id_sk',
            'sk.nosk',
            //'id_pegawai_kpa',
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
                                '/skppnonaktifsupplier/report',
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