<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skpppensiun', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skpp-view">

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
            'nomorskpp',
            // 'id_pegawai',
            'pegawai.namapegawai',
            // 'id_jabatan',
            [
                'label' => 'No SK',
                'value' => $model->sk->nosk,
            ],
            'tmtberhenti',
            'tanggal_surat',
            'jabatan_mengetahui',
            'nama_mengetahui',
            'nip_mengetahui',
            'tembusan:ntext',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>