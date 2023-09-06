<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">

    <h1><?php // Html::encode($this->title) ?></h1>

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
            'nip',
            'namapegawai',
            'jeniskelamin',
            // 'statuskepegawaian',
            // 'no_serikarpeg',
            // 'npwp',
            // 'tempatlahir',
            // 'tgllahir',
            // 'alamat',
            // 'hp',
            // 'id_agama',
            // 'gajipokok',
            // 'berkalaakhir',
            // 'statuskawin',
            // 'email:email',
            // 'catmutasi',
            'create_at',
            'update_at',
            'iduser',
        ],
    ]) ?>

</div>
