<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarPengumumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pengumuman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-pengumuman-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Pengumuman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'nomor',
            // 'idpembuat',
            [
                'label' => 'Pembuat',
                'attribute' => 'idpembuat0.namapegawai'
            ],
            'tentang:ntext',
            // 'isi:ntext',
            //'tempat',
            //'tanggal',
            'status',
            //'file_upload',
            //'create_at',
            //'update_at',
            //'iduser',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
