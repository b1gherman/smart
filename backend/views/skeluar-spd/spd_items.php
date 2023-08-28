<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolonganpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="pengikutspd-index">
    <h5>Pengikut</h5>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'idspd',
            'nama',
            'tanggal_lahir',
            'keterangan',
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
