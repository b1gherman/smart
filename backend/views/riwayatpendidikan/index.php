<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RiwayatpendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Pendidikan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayatpendidikan-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?php // Html::a('Create Riwayatpendidikan', ['create'], ['class' => 'btn btn-success']) ?>
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
            'namasekolah',
            //'idtingkatansekolah',
            'tingkat.kodetingkatan',
            'jurusan.namajurusan',
            'tahunlulus',
            'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
