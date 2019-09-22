<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


$APPLICATION->SetTitle("404 Not Found");
?>
<section class="page-404">
	<div class="hero-404">
		<h1><span>Ошибка 404</span> <br> "Страница не найдена"</h1>
	</div>
	<div class="content-404">
	<h2><b>Почему я вижу это окно?</b></h2>
	<ul class="list">
		<li class="list__item">Возможно вы перешли по неправильной ссылке;</li>
		<li class="list__item">URL страницы в строке браузера прописан не верно;</li>
		<li class="list__item">Страница удалена или доступна по другому URL адресу.</li>
	</ul>
	<h2><b>Как исправить?</b></h2>
	<ul class="list">
		<li class="list__item">Проверьте правильность написания URL ссылки, возможно в ней есть опечатка;</li>
		<li class="list__item">Воспользуйтесь навигацией сайта;</li>
	</ul>
	</div>
</section>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>