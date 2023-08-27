<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnakpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anak Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anakpegawai-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?php // Html::a('Create Anakpegawai', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'id_pegawai',
            'namaanak',
            //'idstatusanak',
            'tgl_lahir',
            //'id_pekerjaan',
            'pekerjaan.namapekerjaan',
            'statusanak.status',
            'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
