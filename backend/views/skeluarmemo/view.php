<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Skeluarmemo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Memo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluarmemo-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nomor',
            // 'idkepada',
            [
                'label' => 'Kepada',
                'attribute' => 'idkepada0.namajabatan'
            ],
            // 'iddari',
            [
                'label' => 'Dari',
                'attribute' => 'iddari0.namajabatan'
            ],
            'hal',
            'tanggal',
            // 'isimemo:ntext',
            // [
            //     'label' => 'Isi Memo',
            //     'attribute' => 'isi',
            //     'format' => 'html',
            // ],
            // 'idttd',
            [
                'label' => 'Ttd',
                'attribute' => 'idttd0.namajabatan'
            ],
            // 'tembusan:ntext',
            [
                'label' => 'Template',
                'attribute' => 'idtemplate0.nama'
            ],
            'status',
            // [
            //     'label' => 'Status',
            //     'attribute' => 'status',
            //     'value' => function ($model) {
            //         if ($model->status == 0) {
            //             $stat = 'Draft';
            //         }
            //         if ($model->status == 1) {
            //             $stat = 'Naskah';
            //         }
            //         return $stat;
            //     },
            //     'format' => 'html',
            // ],
            'file_upload',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>
