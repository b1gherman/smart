<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarKuasa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Kuasa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skeluar-kuasa-view">

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
            // [
            //     'label' => 'Isi Keterangan',
            //     'attribute' => 'isi',
            //     'format' => 'html',
            // ],
            'tempat',
            'tanggal',
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
