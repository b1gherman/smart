<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolonganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golongan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-index">

    <h1><?php // Html::encode($this->title) 
        ?></h1>

    <p>
        <?= Html::a('Create Golongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'kode_gol',
            'pangkat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>