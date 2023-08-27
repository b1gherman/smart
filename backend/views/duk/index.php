<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DUK';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duk-index">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create DUK', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'pegawai.nip',
            'pegawai.namapegawai',
            'urutan',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
