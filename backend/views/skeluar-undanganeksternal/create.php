<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SkeluarUndanganeksternal */

$this->title = 'Create Undangan Eksternal';
$this->params['breadcrumbs'][] = ['label' => 'Surat Undangan Eksternal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skeluar-undanganeksternal-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
