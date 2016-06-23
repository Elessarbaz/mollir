<?php
function sub_menu ($menu,$parent)
{
	$res = array();
	foreach ($menu as $value) {
		if ($value->menu_item_parent == $parent->ID) {
			$res[]=$value;
		}
	}
	return $res;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
</head>
<body>
<?php if (is_front_page()) :?>
<!--НАЧАЛО Главный раздел включая хедер с навбаром-->
<div class="main-section" id="mainSection">
	<header class="uk-container uk-container-center">
		<div class="logo-col">
			<a href="/">
				<img src="<?=get_field('logo',4)?>" alt="Лого" class="logo">
			</a>
		</div>
		<div class="navbar-and-contacts-col">
			<div class="contacts">
				<p>
                    <span>
                        <img src="<?php bloginfo('template_directory') ?>/public/img/header-icon-phone.png" alt="Телефон" class="uk-hidden-small">
                        <a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a>
                    </span>
                    <span>
                        <img src="<?php bloginfo('template_directory') ?>/public/img/header-icon-mail.png" alt="Электронная почта" class="uk-hidden-small">
                        <a href="mailto:<?=get_field('email',4)?>ru"><?=get_field('email',4)?></a>
                    </span>
				</p>
			</div>
			<nav class="uk-navbar" data-uk-sticky="{getWidthFrom:'.main-section', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
					<?php $menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent): $sub=sub_menu($menu,$val); ?>
					<li <?php if ($sub) echo 'class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false"';?>>
						<a href="<?=$val->url?>"  data-uk-smooth-scroll="{offset: 40}"><?=$val->title?></a>
					<?php
					if ($sub)
					{?>
						<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 40px; left: 0;">
							<ul class="uk-nav uk-nav-navbar">
								<?php foreach ($sub as $value): ?>
								<li><a href="<?=$value->url?>"><?=$value->title?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php
					}
					?>
					</li>
					<?php endif;} ?>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>

			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
						<?php $menu=wp_get_nav_menu_items('main');
						foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent){ $sub=sub_menu($menu,$val); ?>
							<li <?php if ($sub) echo 'class="uk-parent" aria-expanded="false"';?>>
								<a href="<?=$val->url?>"  data-uk-smooth-scroll><?=$val->title?></a>
							</li>
								<?php
								if ($sub){?>
							<li class="uk-parent" aria-expanded="false">
								<a href="#"><?=$val->title?> список</a>
									<ul class="uk-nav-sub">
											<?php foreach ($sub as $value){ ?>
												<li><a href="<?=$value->url?>"><?=$value->title?></a></li>
											<?php }; ?>
									</ul>
							</li>
									<?php }	?>

						<?php }} ?>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="slogan-and-summary">
		<?=get_field('motto-1',4)?>
	</div>
</div>
<!--КОНЕЦ Главный раздел включая хедер с навбаром-->
<?php endif; ?>
<?php if (is_category()) :?>
<!--НАЧАЛО Главный раздел включая хедер с навбаром-->
<div class="main-section articles" id="mainSection">
	<header class="uk-container uk-container-center">
		<div class="logo-col">
			<a href="/">
				<img src="<?=get_field('logo',4)?>" alt="Лого" class="logo">
			</a>
		</div>
		<div class="navbar-and-contacts-col">
			<div class="contacts">
				<p>
                    <span>
                        <img src="<?php bloginfo('template_directory') ?>/public/img/header-icon-phone.png" alt="Телефон" class="uk-hidden-small">
                        <a href="tel:+7 707 155 22 44">+7 707 155 22 44</a>
                    </span>
                    <span>
                        <img src="<?php bloginfo('template_directory') ?>/public/img/header-icon-mail.png" alt="Электронная почта" class="uk-hidden-small">
                        <a href="mailto:l-antipod@mail.ru">cc-Blesk@mail.ru</a>
                    </span>
				</p>
			</div>
			<nav class="uk-navbar" data-uk-sticky="{getWidthFrom:'.main-section', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
					<?php $menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent): $sub=sub_menu($menu,$val); ?>
						<li <?php if ($sub) echo 'class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false"';?>>
							<a href="<?=get_permalink(4).$val->url?>"><?=$val->title?></a>
							<?php
							if ($sub)
							{?>
								<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 40px; left: 0;">
									<ul class="uk-nav uk-nav-navbar">
										<?php foreach ($sub as $value): ?>
											<li><a href="<?=$value->url?>"><?=$value->title?></a></li>
										<?php endforeach; ?>
									</ul>
								</div>
								<?php
							}
							?>
						</li>
					<?php endif;} ?>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>

			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
						<?php $menu=wp_get_nav_menu_items('main');
						foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent){ $sub=sub_menu($menu,$val); ?>
							<li <?php if ($sub) echo 'class="uk-parent" aria-expanded="false"';?>>
								<a href="<?=get_permalink(4).$val->url?>" ><?=$val->title?></a>
							</li>
							<?php
							if ($sub){?>
								<li class="uk-parent" aria-expanded="false">
									<a href="#"><?=$val->title?> список</a>
									<ul class="uk-nav-sub">
										<?php foreach ($sub as $value){ ?>
											<li><a href="<?=$value->url?>"><?=$value->title?></a></li>
										<?php }; ?>
									</ul>
								</li>
							<?php }	?>

						<?php }} ?>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="slogan-and-summary uk-container uk-container-center">
		<?=get_field('motto-2',4)?>
	</div>
</div>
<!--КОНЕЦ Главный раздел включая хедер с навбаром-->
<?php endif; ?>
<?php if (is_single()) :?>
<!--НАЧАЛО Главный раздел включая хедер с навбаром-->
<div class="main-section articles single" id="mainSection">
	<header class="uk-container uk-container-center">
		<div class="logo-col">
			<a href="/">
				<img src="<?=get_field('logo',4)?>" alt="Лого" class="logo">
			</a>
		</div>
		<div class="navbar-and-contacts-col">
			<div class="contacts">
				<p>
                    <span>
                        <img src="<?php bloginfo('template_directory') ?>/public/img/header-icon-phone.png" alt="Телефон" class="uk-hidden-small">
                        <a href="tel:+7 707 155 22 44">+7 707 155 22 44</a>
                    </span>
                    <span>
                        <img src="<?php bloginfo('template_directory') ?>/public/img/header-icon-mail.png" alt="Электронная почта" class="uk-hidden-small">
                        <a href="mailto:l-antipod@mail.ru">cc-Blesk@mail.ru</a>
                    </span>
				</p>
			</div>
			<nav class="uk-navbar" data-uk-sticky="{getWidthFrom:'.main-section', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
					<?php $menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent): $sub=sub_menu($menu,$val); ?>
						<li <?php if ($sub) echo 'class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false"';?>>
							<a href="<?=get_permalink(4).$val->url?>"><?=$val->title?></a>
							<?php
							if ($sub)
							{?>
								<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 40px; left: 0;">
									<ul class="uk-nav uk-nav-navbar">
										<?php foreach ($sub as $value): ?>
											<li><a href="<?=$value->url?>"><?=$value->title?></a></li>
										<?php endforeach; ?>
									</ul>
								</div>
								<?php
							}
							?>
						</li>
					<?php endif;} ?>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>

			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
						<?php $menu=wp_get_nav_menu_items('main');
						foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent){ $sub=sub_menu($menu,$val); ?>
							<li <?php if ($sub) echo 'class="uk-parent" aria-expanded="false"';?>>
								<a href="<?=get_permalink(4).$val->url?>"  data-uk-smooth-scroll><?=$val->title?></a>
							</li>
							<?php
							if ($sub){?>
								<li class="uk-parent" aria-expanded="false">
									<a href="#"><?=$val->title?> список</a>
									<ul class="uk-nav-sub">
										<?php foreach ($sub as $value){ ?>
											<li><a href="<?=$value->url?>"><?=$value->title?></a></li>
										<?php }; ?>
									</ul>
								</li>
							<?php }	?>

						<?php }} ?>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="slogan-and-summary uk-container uk-container-center">
		<?=get_field('motto-2',4)?>
	</div>
</div>
<!--КОНЕЦ Главный раздел включая хедер с навбаром-->
<?php endif; ?>