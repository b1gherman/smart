<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatanstruktural */

$this->title = 'Create Jabatan Struktural';
$this->params['breadcrumbs'][] = ['label' => 'Jabatanstrukturals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatanstruktural-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
