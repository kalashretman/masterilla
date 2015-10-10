/* Меню категорий и каталог мастеров */
var mainMenu = $('#main.menu');
var mainMenuTopUl = mainMenu.children('ul');
var mainMenuTopUlLi = mainMenuTopUl.children('li');
var mainMenuTopTitleLink = mainMenuTopUlLi.children('a');
var mainMenu1SubUl = mainMenuTopUlLi.children('ul');
var mainMenu1SubUlLi = mainMenu1SubUl.children('li');
var mainMenu1SubLink = mainMenu1SubUlLi.children('a');
mainMenuTopUl.addClass('global');
mainMenuTopUlLi.addClass('global_li');
mainMenu1SubUl.each(function () { //добавляем класс только тем у кого есть подменю
  $(this).prev('a').addClass('global_title');
});
mainMenu1SubUl.addClass('sub1');
mainMenu1SubUlLi.addClass('sub1_li');
mainMenu1SubLink.addClass('sub1_link');
mainMenuTopTitleLink.on('click', function (event) {
  if ($(this).hasClass('global_title')) {
    event.preventDefault();
  }
});
mainMenuTopTitleLink.on('click', function () {
  $(this).addClass('current');
  $(this).next('ul').toggle();
});
mainMenuTopUlLi.on('mouseleave', function () {
  $(this).children('ul').delay(400).fadeOut(100)
  $(this).children('a').removeClass('current');
});
/**/

$(document).ready(function () {
  //Парсинг данных LD+JSON
  $('body').append('<script type="application/ld+json"></script>'); // создаем тег в конец боди
	// массив для @type WebSite
 var WebSite = {
  "@context" : "http://schema.org",
  "@type" : "WebSite",
  "name" : "masterilla.com",
  "alternateName" : "Masterilla",
  "url" : "http://masterilla.com" 
}
var jsonDataWebSite = (JSON.stringify( WebSite )); // формируем строку для WebSite
$('body').children('script:last').text(jsonDataWebSite); // публикуем массив
/*$('body').children('script:last').append(jsonDataWebSite); // добавляем еще один массив при необходимости*/

  /* 
  // старый код проба
  var openJson = ('{');
  var closJson = ('}');
  var websiteJson = ('"@context" : "http://schema.org","@type" : "WebSite","name" : "masterilla.com","alternateName" : "Masterilla","url" : "http://masterilla.com"');
  
  $('body').children('script:last').text(openJson + websiteJson + closJson);*/
  
  


/* Регистрация - ссылка */
$('#registrationLink').on('click', function (e) {
  e.preventDefault();
  $('#regVariants').toggle();
  $('#regVariants').parent('li').on('mouseleave', function () {
    $('#regVariants').delay(400).hide(100);
  });
});
/**/ 
});
