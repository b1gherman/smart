<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarNotadinas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nota Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluar-notadinas-view">

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
            //     'label' => 'Isi Nota Dinas',
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
            'file_upload',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>
