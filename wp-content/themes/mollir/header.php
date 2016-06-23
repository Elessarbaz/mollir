<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/public/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
</head>
<?php
$class='';
if (is_front_page()) {$class='index';} else {
	if (is_page()) $class = 'body-gallery';
	if (is_archive()) $class = 'body-articles-list';
	if (is_single()) $class = 'body-single-article';
}
?>
<body class="body <?=$class?>">

<!--НАЧАЛО Главный раздел включая хедер с навбаром-->
<div class="main-section" id="mainSection">
	<header class="uk-clearfix">
		<div class="logo-col">
			<a href="/">
				<img src="<?=get_field('logo',4)?>" alt="Лого" class="logo">
			</a>
		</div>
		<div class="navbar-and-contacts-col">
			<div class="contacts">
				<p>
					<img src="<?php bloginfo('template_directory') ?>/public/img/header-phone-icon.png" alt="Телефон" class="uk-hidden-small">
					<a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a>
					<span class="uk-hidden-small">/</span>
					<a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a>
					<span class="uk-hidden-small">/</span>
					<a href="mailto:<?=get_field('email',4)?>"><?=get_field('phone1',4)?></a>
				</p>
			</div>
			<nav class="uk-navbar" data-uk-sticky="{getWidthFrom:'.body', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
					<li><a href="#mainSection" data-uk-smooth-scroll>Главная</a></li>
					<li class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false">
						<a href="#services" data-uk-smooth-scroll="{offset: 40}">Услуги</a>
						<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 40px; left: 0;">
							<ul class="uk-nav uk-nav-navbar">
								<li><a href="#">Услуга 1</a></li>
								<li><a href="#">Услуга, ещё одна</a></li>
								<li><a href="#">Услуга, ещё одна</a></li>
								<li><a href="#">Услуга, и ещё одна</a></li>
							</ul>
						</div>
					</li>
					<li><a href="#gallery" data-uk-smooth-scroll="{offset: 40}">Галерея</a></li>
					<li><a href="#news" data-uk-smooth-scroll="{offset: 40}">Новости</a></li>
					<li><a href="#cerificates" data-uk-smooth-scroll="{offset: 40}">Сертификаты</a></li>
					<li><a href="#reviews" data-uk-smooth-scroll="{offset: 40}">Отзывы</a></li>
					<li><a href="#footer" data-uk-smooth-scroll="{offset: 40}">Контакты</a></li>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>
		</div>
	</header>
	<?php if(is_front_page()):?>
	<div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay: true}">
		<ul class="uk-slideshow uk-overlay-active">
			<?php foreach (pp_gallery_get() as $image): ?>
			<li>
				<img src="<?=$image->url?>">
				<div class="uk-overlay-panel uk-overlay-slide-right">
					<div class="overlay-content">
						<h2><?=$image->alt?></h2>
						<p><?=$image->description?></p>
					</div>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
	</div>
	<?php endif; ?>
</div>
<div id="my-id" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
			<li><a href="#mainSection" data-uk-smooth-scroll>Главная</a></li>
			<li><a href="#services" data-uk-smooth-scroll="{offset: 40}">Услуги</a></li>
			<li><a href="#gallery" data-uk-smooth-scroll="{offset: 40}">Галерея</a></li>
			<li><a href="#news" data-uk-smooth-scroll="{offset: 40}">Новости</a></li>
			<li><a href="#cerificates" data-uk-smooth-scroll="{offset: 40}">Сертификаты</a></li>
			<li><a href="#reviews" data-uk-smooth-scroll="{offset: 40}">Отзывы</a></li>
			<li><a href="#footer" data-uk-smooth-scroll="{offset: 40}">Контакты</a></li>
		</ul>
	</div>
</div>
<!--КОНЕЦ Главный раздел включая хедер с навбаром-->

<!--НАЧАЛО сине-черная декор полоска-->
<div class="decorative-line">
	<div class="blue"></div>
	<div class="black"></div>
</div>
<!--КОНЕЦ сине-черная декор полоска-->