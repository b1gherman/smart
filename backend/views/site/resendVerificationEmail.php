<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Resend verification email';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-resend-verification-email">
    <div class="card">
        <div class="card-body login-card-body">
            <h5><?= Html::encode($this->title) ?></h5>

            <p>Please fill out your email. A verification email will be sent there.</p>

            <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
            </div>
            
            <div style="color:#999;margin:1em 0">
                Login ? <?php echo Html::a("login",['site/login']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
