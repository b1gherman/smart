<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Cuti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Permohonan Cuti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?=
    \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'nomor',
            // 'id_pegawai',
            'pegawai.namapegawai',
            // 'id_jeniscuti',
            'jeniscuti.namajeniscuti',
            'alasan:ntext',
            [
                'label' => 'Tanggal',
                'value' => function($data) {
                    return Yii::$app->formatter->asDate($data->tglmulaicuti, 'dd-MM-yyyy') . ' sampai ' . Yii::$app->formatter->asDate($data->tglakhircuti, 'dd-MM-yyyy');
                },
            ],
            'lama',
            'status',
            'status1',
            //'tglmulaicuti',
            //'tglakhircuti',
            //'catatancuti:ntext',
            //'alamatselamacuti',
            //'telpon',
            //'create_at',
            //'update_at',
            //'iduser',
            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'template' => '{report} {formulir} {view} {update} {delete} <br> '
                . 'Atasan Langsung --> {setuju}{rubah}{tangguh}{nosetuju}<br>'
                . 'Pejabat --> {setuju1}{rubah1}{tangguh1}{nosetuju1}<br>',
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/cuti/report',
                                        'id' => $model->id
                                    ]) . "'); return false",
                                        // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'formulir' => function ($url, $model) {
                        return Html::a('<span class="fa fa-list"></span>', '', [
                                    'title' => Yii::t('app', 'Formulir'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/cuti/formulir',
                                        'id' => $model->id
                                    ]) . "'); return false",
                                        // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'view' => function ($url, $model) {
                        return Html::a('<span class="fas fa-eye"></span>', $url, [
                                    'title' => Yii::t('app', 'View'),
                                        // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="fas fa-pencil-alt"></span>', $url, [
                                    'title' => Yii::t('app', 'View'),
                                        // 'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="fas fa-trash-alt"></span>', $url, [
                                    'title' => Yii::t('app', 'Delete'),
                                    //'class' => 'btn btn-outline-info btn-xs',
                                    'data-confirm' => Yii::t('app', 'Are you sure to delete this item?'),
                                    'data-method' => 'post',
                        ]);
                    },
                    'setuju' => function ($url, $model) {
                        return Html::a('<span>Disetujui</span>', $url, [
                                    'title' => Yii::t('app', 'Setuju'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'rubah' => function ($url, $model) {
                        return Html::a('<span>Dirubah</span>', $url, [
                                    'title' => Yii::t('app', 'Rubah'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'tangguh' => function ($url, $model) {
                        return Html::a('<span>Tangguhkan</span>', $url, [
                                    'title' => Yii::t('app', 'Tangguhkan'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'nosetuju' => function ($url, $model) {
                        return Html::a('<span>Tidak Disetujui</span>', $url, [
                                    'title' => Yii::t('app', 'Tidak Disetujui'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'setuju1' => function ($url, $model) {
                        return Html::a('<span>Disetujui</span>', $url, [
                                    'title' => Yii::t('app', 'Setuju'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'rubah1' => function ($url, $model) {
                        return Html::a('<span>Dirubah</span>', $url, [
                                    'title' => Yii::t('app', 'Rubah'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'tangguh1' => function ($url, $model) {
                        return Html::a('<span>Tangguhkan</span>', $url, [
                                    'title' => Yii::t('app', 'Tangguhkan'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                    'nosetuju1' => function ($url, $model) {
                        return Html::a('<span>Tidak Disetujui</span>', $url, [
                                    'title' => Yii::t('app', 'Tidak Disetujui'),
                                    'class' => 'btn btn-outline-success btn-xs'
                        ]);
                    },
                ]
            ],
        ],
    ]);
    ?>

</div>