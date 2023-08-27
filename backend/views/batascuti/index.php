<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BatascutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Batas cuti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batascuti-index">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Batas cuti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'idpegawai',
            'pegawai.namapegawai',
            'tahun',
            'digunakan',
            'sisa',
            'tangguhkan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
