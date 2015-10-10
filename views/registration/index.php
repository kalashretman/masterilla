<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */
?>
<!DOCTYPE html>
<head>    
	<link rel="stylesheet" href="/web/css/global.css" type="text/css" />
	<link rel="stylesheet" href="/web/css/owl.carousel.css" type="text/css" />	
	<script src='/web/js/jquery-2.1.4.min.js'></script> 
</head>
<body>
<!-- Register Page -->
<div id="regPage">

<h1 class="alignCenter">Регистрация</h1>

<div id="user" class="register">	
    <?php $form = ActiveForm::begin([
        'id' => 'RegistrationForm',
        'action' => 'index.php?r=registration/register',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ],
    ]); 
    $listdata = array('ARTISAN'=>'Мастер', 'BUYER'=>'Покупатель'); ?>
    <?= $form->field($model, 'email')->label('Email') ?>
    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
    <?= $form->field($model, 'password2')->passwordInput()->label('Пароль ещё раз') ?>
    <?= $form->field($model, 'role')->dropDownList($listdata)->label('Кем Вы будете?') ?>
    <div class="form-group">
            <?= Html::submitButton('Зарегистрироваться') ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<hr/>
</div>
</body>
<!--/-->