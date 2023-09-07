<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TemplateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Templates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-index">

    <h1><?php // Html::encode($this->title)   ?></h1>

    <p>
        <?= Html::a('Create Template', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nama',
            'file',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => "{update} {delete} {download}",
//                'urlCreator' => function ($action, \backend\models\CsvPrestasi $model, $key, $index, $column) {
//                    return Url::toRoute([$action, 'nomor_pendaftaran' => $model->nomor_pendaftaran, 'no_prestasi' => $model->no_prestasi]);
//                 }
                'buttons' => [
                    'download' => function ($url, $model) {
                        return Html::a('<span>Download</span>', $url, [
                                    'title' => Yii::t('app', 'Download'),
                                    'class' => 'btn btn-outline-info btn-xs',
                        ]);
                    },
                ]
            ],
        ],
    ]);
    ?>


</div>
