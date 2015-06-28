<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => [
                'class' => 'login-form'
            ]
        ]);
?>
<h3 class="form-title">Sign In</h3>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-actions">
    <?= Html::submitButton('Login', ['class' => 'btn btn-success uppercase', 'name' => 'login-button']) ?>
    <?=
    Html::activeCheckbox($model, 'rememberMe', [
        'labelOptions' => [
            'class' => 'rememberme check',
        ],
    ])
    ?>
</div>
<?php ActiveForm::end(); ?>
