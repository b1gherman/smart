<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SmasukDisposisiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Report Naskah Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smasuk-report-index">

    <?php Pjax::begin(); ?>
    <?= $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?php //= GridView::widget([
    //     'dataProvider' => $dataProvider,
    //     'filterModel' => $searchModel,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],

    //         // 'id',
    //         'nomor_agenda',
    //         // 'tanggal_terima',
    //         'nomor',
    //         'tanggal',
    //         'asal_surat',
    //         //'hal:ntext',
    //         //'idditeruskan',
    //         //'idketdisposisi',
    //         //'idpildisposisi',
    //         //'catatan',
    //         //'file_upload',
    //         //'create_at',
    //         //'update_at',
    //         //'iduser',

    //         [
    //             'class' => 'yii\grid\ActionColumn',
    //             // 'template' => '{view} {update} {delete} {report}',
    //             'template' => '{view} {update} {delete} {toword}',
    //             'buttons' => [
    //                 'toword' => function ($url, $model) {
    //                     return Html::a('<span class="fas fa-file-word"></span>', $url, [
    //                                 'title' => Yii::t('app', 'Word'),
    //                                 'class' => 'btn btn-outline-info btn-xs',
    //                     ]);
    //                 },
    //                 // 'report' => function ($url, $model) {
    //                 //     return Html::a('<span class="fa fa-print"></span>', '', [
    //                 //         'title' => Yii::t('app', 'Print'),
    //                 //         'onclick' => "window.open ('" . \yii\helpers\Url::toRoute([
    //                 //             '/smasuk-disposisi/report',
    //                 //             'id' => $model->id
    //                 //         ]) . "'); return false",
    //                 //         // 'class' => 'btn btn-outline-success btn-xs'
    //                 //     ]);
    //                 // },
    //             ]
    //         ],
    //     ],
    // ]); ?>

    <?php Pjax::end(); ?>

</div>