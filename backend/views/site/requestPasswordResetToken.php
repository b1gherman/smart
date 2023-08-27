<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <div class="card">
        <div class="card-body login-card-body">
            <h5><?= Html::encode($this->title) ?></h5>

            <p>Silahkan entri email</p>


            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

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
