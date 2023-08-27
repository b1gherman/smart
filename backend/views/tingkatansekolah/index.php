<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TingkatansekolahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tingkatan Sekolah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tingkatansekolah-index">

    <h1><?php // Html::encode($this->title) 
        ?></h1>

    <p>
        <?= Html::a('Create Tingkatan Sekolah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'kodetingkatan',
            'namatingkatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>