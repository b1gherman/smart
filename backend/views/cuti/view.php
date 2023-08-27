<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cuti */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cuti-view">

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
            //'id_pegawai',
            'pegawai.namapegawai',
            'pegawai.nip',
            // 'id_jeniscuti',
            'jeniscuti.namajeniscuti',
            'alasan:ntext',
            'tglmulaicuti',
            'tglakhircuti',
            'catatancuti:ntext',
            'alamatselamacuti',
            'telpon',
            'tanggal_surat',
            'tembusan:ntext',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>