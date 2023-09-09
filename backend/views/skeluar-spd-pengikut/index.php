<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarSpdPengikutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengikut Perjalanan Dinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-spd-pengikut-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Pengikut Perjalanan Dinas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idspd',
            'nama',
            'tanggal_lahir',
            'keterangan',
            //'create_at',
            //'update_at',
            //'iduser',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
