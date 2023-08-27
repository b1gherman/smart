<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Silahkan Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="card">
        <div class="card-body login-card-body">
            <h5><?= Html::encode($this->title) ?></h5>
            <!--<p>Silahkan Register</p>-->
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <div style="color:#999;margin:1em 0">
                Login ? <?php echo Html::a("login",['site/login']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
