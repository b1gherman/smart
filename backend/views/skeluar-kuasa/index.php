<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkeluarKuasaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Surat Kuasa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-kuasa-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Surat Kuasa', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'idpemberi',
            [
                'label' => 'Pemberi Kuasa',
                'attribute' => 'idpemberi0.namapegawai'
            ],
            // 'idpenerima',
            [
                'label' => 'Penerima Kuasa',
                'attribute' => 'idpenerima0.namapegawai'
            ],
            // 'isi:ntext',
            [
                'label' => 'Isi Surat Kuasa',
                'attribute' => 'isi',
                'format' => 'html',
            ],
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
