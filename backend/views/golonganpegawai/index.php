<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolonganpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Golongan Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golonganpegawai-index">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?php // Html::a('Create Golonganpegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  
    if(Yii::$app->session->get('pegawai')==null){
        echo $this->render('_search', ['model' => $searchModel]);
    }
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'idpegawai',
            //'idgolongan',
            'golongan.kode_gol',
            'golongan.pangkat',
            'tmt',
            // 'status',
            [
                'label' => 'Status',
                'attribute' => 'status',
                'value' => function ($model) {
                    if ($model->status == 0) {
                        $stat = 'Tidak Aktif';
                    }
                    if ($model->status == 1) {
                        $stat = 'Aktif';
                    }
                    return $stat;
                },
                'format' => 'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
