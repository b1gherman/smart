<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PasanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Istri/Suami';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasangan-index">

    <h1><?php // Html::encode($this->title)  ?></h1>

    <p>
        <?php // Html::a('Create Pasangan', ['create'], ['class' => 'btn btn-success']) ?>
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
            'nama',
            'tgllahir',
            'tglperkawinan',
            //'tglpisah',
            //'idpekerjaan',
            'pekerjaan.namapekerjaan',
            'penghasilan',
            'aktif',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
