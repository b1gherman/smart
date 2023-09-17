<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarUndanganeksternal */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Undangan Eksternal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluar-undanganeksternal-view">

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
            'sifat',
            'lampiran',
            'hal',
            'tempat',
            'tanggal',
            'kepada:ntext',
            // [
            //     'label' => 'Kepada',
            //     'attribute' => 'kepada',
            //     'format' => 'html',
            // ],
            'di',
            // 'isi:ntext',
            // [
            //     'label' => 'Isi Surat Undangan Eksternal',
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
