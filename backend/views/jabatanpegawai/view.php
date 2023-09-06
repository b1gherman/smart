<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatanpegawai */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jabatanpegawai-view">

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
            // 'idpegawai',
            'pegawai.namapegawai',
            // 'idjabatan',
            'jabatan.namajabatan',
            'esl',
            'tmt',
            [
                'label' => 'Status',
                'attribute' => 'status',
                'value' => function ($model) {
                    if ($model->status == 0) {
                        $stat = 'Tidak Aktif';
                    }
                    if ($model->status == 1) {
                        $stat = 'Aktif';
                    }
                    return $stat;
                },
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>
