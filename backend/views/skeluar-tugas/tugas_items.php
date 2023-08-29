<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolonganpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="penerimatugas-index">
    <h5>Penerima Tugas</h5>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'idtugas',
            // 'idpenerima',
            [
                'label' => 'Penerima',
                'attribute' => 'idpenerima0.namapegawai'
            ],
            'keterangan',
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
