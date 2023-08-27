<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkpputangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Utang Kepada Negara (SKPP Pensiun)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpputang-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <!-- <?= Html::a('Create Skpputang', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'id_skpp',
            'skpp.nomorskpp',
            'uraianpotongan',
            'jumlah',
            'potongan',
            //'akunpenerimaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>