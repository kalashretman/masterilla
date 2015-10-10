<?php
 
/* @var $this yii\web\View */
//$this->title = 'Masterilla.com - сайт для продажи изделий ручной работы.';
?>

<h1 class="mainH">Masterilla.com - сайт для публикации и продажи изделий ручной работы.</h1>
<!-- Wellcome Info -->
<script>
$(document).ready(function(){
/* Главная Велком Инфо */  
  $('#wellcomeInfo').hide().delay(200).slideDown(744);
  $('#wellcomeInfo').find('div.wibox').each(function(index){
	$(this).addClass("wi-" + index);
  });
  $('#wellcomeInfo').find('div.wi-0').hide().delay(400).fadeIn(844);
  $('#wellcomeInfo').find('div.wi-1').hide().delay(1000).fadeIn(844);
  $('#wellcomeInfo').find('div.wi-2').hide().delay(2000).fadeIn(844);
/**/
});
</script>
<div id="wellcomeInfo">
	<div class="wibox">
		<h3>Доставка и оплата заказов: как? когда? каким способом?</h3>
		<p>Мастерилла предоставляет мастерам и ремесленникам площадку для представления
		своих изделий (выполненных и созданных вручную) в интернете. Мы работаем в режиме каталога.
		Сделав заказ, каждый мастер получит уведомление о своих изделиях в вашем заказе. Далее
		в режиме реального общения Клиент и Мастер решают вопросы о способах доставки и отправки
		между собой без участия сайта masterilla.com</p>
	</div>
	<div class="wibox">
		<h3>Как продавать свои изделия ручной работы?</h3>
		<p>Зарегистрируйтесь на сайте (регистрация Мастера). Выполните вход (авторизируйтесь).
		Войдите в личный кабинет: заполните профиль, информацию о себе (как о мастере-ремесленнике),
		создайте 20 позиций на продажу. Тариф старт бесплатный. И всегда будет бесплатный.</p>
	</div>
	<div class="wibox">
		<h3>Несколько советов по размещению работ на продажу.</h3>
		<p>В первую очередь позаботьтесь о том, чтобы максимально достоверно и по существу
		предоставить информацию о себе, как о ремесленнике. Опишите виды рукоделия, которыми
		вы владеете, возможность работать под заказ или нет, укажите ссылки на свои страницы
		в соц-сетях, контактные данные. Заголовок изделия на продажу создавайте как можно короче,
		но не сокращая сути его описания. Подробнее...</p>
	</div>
</div>
<hr/>
<!--/-->
<script type="text/javascript">
$(document).ready(function(){
	  $("#mainslider").owlCarousel({
      autoPlay : false,            
      stopOnHover : true,
      addClassActive: true,
      navigation:true,
      slideSpeed: 1000,
      paginationSpeed : 1000,  
      rewindSpeed: 900,
      items : 4,
      itemsDesktop : [1024,3],
      itemsDesktopSmall : [768,2],
      itemsTablet: [480,1],
      itemsMobile : false
    });
});
</script>
<h2>Новые изделия на сайте:</h2>
<div id="mainslider" class="owl-carousel owl-theme">
<div>
<img src="/web/img/El01.jpg">
</div>
<div>
<img src="/web/img/El02.jpg">
</div>
<div>
<img src="/web/img/El03.jpg">
</div>
<div>
<img src="/web/img/El04.jpg">
</div>
<div>
<img src="/web/img/El05.jpg">
</div>
<div>
<img src="/web/img/El06.jpg">
</div>
<div>
<img src="/web/img/El07.jpg">
</div>
</div>
<hr/>
<div class='side'>
	<div id="lastNews" class="border">
		<h2>Последние новости:</h2>
	</div>	
</div>
<div class='center'>
	<div id="filtrByYearPeriod" class="border">
		<h2>Подборки по временам года:</h2>
	</div>	
</div>
<hr/>

