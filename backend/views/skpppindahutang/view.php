<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Skpppindahutang */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Skpppindahutang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skpppindahutang-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create', ['createother', 'id' => $model->id, 'id_skpppindah' => $model->id_skpppindah], ['class' => 'btn btn-success']) ?>
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
            'id_skpppindah',
            'skpppindah.nomorskpp',
            'uraianpotongan',
            'jumlah',
            'potongan',
            'akunpenerimaan',
        ],
    ]) ?>

</div>