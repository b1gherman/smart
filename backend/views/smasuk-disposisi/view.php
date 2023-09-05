<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SmasukDisposisi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lembar Disposisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="smasuk-disposisi-view">

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
            'nomor_agenda',
            'tanggal_terima',
            'nomor',
            'tanggal',
            'asal_surat',
            'hal:ntext',
            'idditeruskan',
            // [
            //     'label' => 'Diteruskan',
            //     'attribute' => 'idditeruskans',
            //     'value' => function ($model) {
            //         $temp = $model->diteruskan;
            //         $no = 0;
            //         foreach ($temp as $val) {
            //             $no++;
            //             return $no . '.'. $val ;
            //         }
            //     },
            //     'format' => 'html',
            // ],
            'idketdisposisi',
            'idpildisposisi',
            'catatan:ntext',
            'file_upload',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>