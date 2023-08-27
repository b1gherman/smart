<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dokumen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sk-index">

    <h1><?php // Html::encode($this->title)   ?></h1>

    <p>
        <?php
        if (Yii::$app->session->get('pegawai') == null) {
            echo Html::a('Create Dokumen', ['create'], ['class' => 'btn btn-success']);
        }
        ?>
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
            'jenissk.jenis',
            'nosk',
            'tgl',
            'pejabat',
            'dokumen',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
