<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Skeluarmemo */

$this->title = 'Create Memo';
$this->params['breadcrumbs'][] = ['label' => 'Memo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluarmemo-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
