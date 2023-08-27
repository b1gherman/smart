<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JabatanstrukturalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jabatan Struktural';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatanstruktural-index">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jabatan Struktural', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'idjabatan',
            'jabatan.namajabatan',
            //'idpegawai',
            'pegawai.namapegawai',
            'urutan',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
