<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RiwayatkerjaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Pekerjaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayatkerja-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?php // Html::a('Create Riwayatkerja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    if (Yii::$app->session->get('pegawai') == null) {
        echo $this->render('_search', ['model' => $searchModel]);
    }
    ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'idpegawai',
            //'idjenissk',
            'sk.jenissk.jenis',
            'tglmulai',
            'golongan1.kode_gol',
            //'gapok',
            [
                'label' => 'Gaji Pokok',
                'attribute' => 'gapok',
                'contentOptions' => ['class' => 'col-lg-1'],
                'format' => ['decimal']
            ],
            'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
