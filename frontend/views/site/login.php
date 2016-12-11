<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t('app','Login');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <h1 class="logindiv text"><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="logindiv">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username', ['labelOptions' => ['label' => Yii::t('app','Username')]]) ?>

                <?= $form->field($model, 'password', ['labelOptions' => ['label' => Yii::t('app','Password')]])->passwordInput() ?>

                <?= $form->field($model, 'rememberMe', ['labelOptions' => ['label' => Yii::t('app','Remember Me')]])->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app','Login'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            <a href="<?=Url::toRoute('site/signup')?>" class="btn btn-primary btn-block"><?= Yii::t('app','SignUp') ?></a>
        </div>
    </div>
</div>