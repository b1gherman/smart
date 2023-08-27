<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NaikjabatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Naikjabatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naikjabatan-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?= Html::a('Create Naikjabatan', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'idjabatanbaru',
            [
                'label' => 'Jabatan Lama',
                'value' => 'pegawai.jabatanaktif.jabatan.namajabatan',
            ],
            [
                'label' => 'Jabatan Baru',
                'value' => 'jabatanbaru.namajabatan',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}{report}',
                'buttons' => [
                    'report' => function ($url, $model) {
                        return Html::a('<span class="fa fa-print"></span>', '', [
                                    'title' => Yii::t('app', 'Print'),
                                    'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
                                        '/naikjabatan/report',
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
