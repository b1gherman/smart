<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SkpppindahgajiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gaji Dibayarkan (SKPP Pindah)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpppindahgaji-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <!-- <?= Html::a('Create Skpppindahgaji', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'id_skpppindah',
            'skpppindah.nomorskpp',
            // 'id_komponengaji',
            'komponengaji.namakomponen',
            'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
