<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>   
	<link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/css/global.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/css/owl.carousel.css" type="text/css" />	
	<script src='/web/js/jquery-2.1.4.min.js'></script> 
</head>
<body>
<header class="header">	
	<div class="inner top">
		<nav id="topMenu" class="nav">
			
<?php
 
    echo Nav::widget([
        'options' => ['class' => 'menu'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            Yii::$app->user->isGuest ?
                ['label' => 'Вход', 'url' => ['/site/login']] :
                ['label' => 'Выход(' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],
                ['label' => 'Регистрация', 'url' => ['/registration'],
    ],
        ],
    ]);            
?>
<!--                        <ul class="menu">
				<li><a id="registrationLink" href="#">Регистрация</a>
					<ul id="regVariants">
						<li>
							<a href="<?php// echo Yii::$app->request->baseUrl;?>/index.php?r=site/user-registration" title="Регистрация клиента">Регистрация клиента</a>
						</li>

						<li>
							<a href="<?php// echo Yii::$app->request->baseUrl; ?>/index.php?r=site/artisan-registration" title="Регистрация мастера">Регистрация мастера</a>
						</li>
					</ul>
				</li>	
			</ul> -->
		</nav>	

            
            
            
            
            
		<div id="language" class="settings">					
			<a href="/uk"><img src="<?php echo Yii::$app->request->baseUrl; ?>/img/flags/ukr.png" alt="UK"/>	</a>
			<a href="/en"><img src="<?php echo Yii::$app->request->baseUrl; ?>/img/flags/eng.png" alt="EN"/></a>
			<a href="/"><img src="<?php echo Yii::$app->request->baseUrl; ?>/img/flags/rus.png" alt="RU"/></a>	
		</div>
		<div id="currency" class="settings">
			<span class="title">Валюта: </span>
			<select class="selector" name="Валюта">
				<option value="USD">USD</option>
				<option value="EURO">EURO</option>
				<option value="UAH">UAH</option>
				<option value="RUB">RUB</option>
			</select> 
		</div>
		<hr/>
	</div>	
	<div class="inner logo cart">
		<div id="logoblock">	
			<a href="#" title="Masterilla - творческая сила!">
				<img src="../web/img/mlogo.png" alt="Masterilla - творческая сила!"/>
				<span class="line1">Masterilla</span>			
				<span class="line2">творческая сила!</span>
			</a>		
		</div>
		<div id="search">
		</div>
		<div id="cart">
		<img src="/web/img/cartbag.png"/>
		<a href="#">Корзина (0)</a>
		</div>
		<hr/>
	</div>
	<!-- Горизонтальное меню -->
	<nav id="main" class="menu">
		<img src="http://cdn.gollos.com/template/48623/list.png" id="listimg">
		<ul>
			<li>
				<a href="#">Изделия ручной работы</a>
				<ul>
					<li>
						<a title="По виду рукоделия" href="/index.php?r=type/type-of-handicraft">По виду рукоделия</a>              	
					</li>
					<li>
						<a title="По виду изделия" href="/index.php?r=type/type-of-item">По виду изделия</a>              	
					</li>
				</ul>
			</li>
			<li>
				<a href="#">Каталог мастеров</a>
				<ul>
					<li>
						<a title="По странам" href="#">По странам</a>              	
					</li>
					<li>
						<a title="По фамилии" href="#">По фамилии</a>              	
					</li>
				</ul>
			</li>
			<li>
				<a href="#">Наш блог</a>
			</li>
			<li>
				<a href="#">Новости</a>
			</li>
			<li>
				<a href="#">Магазин (товары для рукоделия)</a>
			</li>
		</ul>	
	<hr/>		
	</nav>
<hr/>	
</header>
<section class="bodysection">
	<div class="inner">
<!--<ul class="submenu">
					<li><a href="http://m.webshops.club/web/index.php?r=type/type-of-item">по виду изделия</a></li>
					<li><a href="http://m.webshops.club/web/index.php?r=type/type-of-handicraft">по виду рукоделия</a></li>
	</ul>-->
	
	<?= $content ?>
	</div> 
</section>



 <footer class="footer">
	<div class='footerBox'>
		<div id="siteDescription">
		<img alt="Masterilla - творческая сила!" src="../web/img/mlogo.png">
		<p>Мастерилла – сайт по рукоделию: акции, выставки, мастер-классы, магазин для рукоделия. Здесь можно представить каталог своих ручных работ, купить книги по рукоделию. </p>
		</div>		
	</div>
	<div class='footerBox'>
		<div class="footerMenu">
			<h3>Информация</h3>
			<ul>
        	<li><a href="#">как разместить свои изделия?</a></li>
        	<li><a href="#">тарифные планы</a></li>
        	<li><a href="#">часто задаваемые вопросы</a></li>
        	<li><a href="#">новости сайта</a></li>
        	<li><a href="#">стаьи и публикации</a></li>
        	<li><a href="#">о сайте</a></li>
        	<li><a href="#">контакты</a></li>
     	  </ul>
		</div>
	</div>
	<div class='footerBox'>
		<div class="footerMenu">
			<h3>Магазин</h3>
			<ul>
        	<li><a href="#">способы оплаты</a></li>
        	<li><a href="#">варианты доставки</a></li>
        	<li><a href="#">как сэкономить?</a></li>
        	<li><a href="#">дисконтная программа</a></li>        	       	
     	  </ul>
		</div>
	</div>
	<div class='footerBox'>
		<div class="footerMenu">
			<h3>Правила</h3>
			<ul>
        	<li><a href="#">политика конфиденциальности</a></li>
        	<li><a href="#">пользовательское соглашение</a></li>
        	<li><a href="#">возврат товара</a></li>
        	<li><a href="#">возврат денег</a></li>        	       	
     	  </ul>
		</div>
	</div>
	<hr/>
	<div id="cpr">
      <p>
        Copyright &copy; 2014-2015 Мастерилла - творческая сила.
        <a href="http://masterilla.com" title="Мастерилла - творческая сила">masterilla.com</a>
      </p>
    </div>
</footer>
<hr/>
<?php $this->endBody() ?>
<script src='/web/js/frontend.js'></script> 
<script src='/web/js/owl.carousel.js'></script>
<script src='/web/js/owl.carousel.min.js'></script>
</body>
</html>
<?php $this->endPage() ?>