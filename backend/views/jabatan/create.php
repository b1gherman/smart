<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatan */

$this->title = 'Create Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-create">

    <h1><?php // Html::encode($this->title) 
        ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>