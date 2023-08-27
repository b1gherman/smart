<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JurusanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jurusan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-index">

    <h1><?php // Html::encode($this->title) 
        ?></h1>

    <p>
        <?= Html::a('Create Jurusan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'namajurusan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>