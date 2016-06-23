

<!--НАЧАЛО breadcrumb-->
<div class="breadcrumb-container uk-container uk-container-center">
	<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right') ?>
</div>
<!--КОНЕЦ breadcrumb-->


<!--НАЧАЛО одиночная статья -->
<div class="single-article-section uk-container uk-container-center">
	<h1><?=get_the_title()?></h1>
	<img src="<?=get_the_post_thumbnail_url()?>" class="img-big">
	<div class="text-section">
		<article>
		<?php the_content() ?>
		</article>
	</div>
	<div class="prev-next uk-clearfix">
		<?php previous_post_link('%link', '< Предыдущая', true); ?>

		<?php next_post_link('%link', 'Следущая >', true); ?>
	</div>
</div>
<!--КОНЕЦ одиночная статья -->

<!--НАЧАЛО оставить заявку консультация-->
<div class="request uk-container uk-container-center" id="request">
	<div class="summary">
		<h2 class="brand-underline"><?=get_field('rew_title',4)?></h2>
		<p>
			<?=get_field('rew_text',4)?>
		</p>
	</div>
	<form action="" class="blink-mailer">
		<input type="hidden" name="title" value="Обратная связь">
		<input type="text" id="name" name="Имя" placeholder=" Имя">
		<input type="tel" id="phoneNumber" name="Телефон" placeholder=" Телефон">
		<input type="submit" value="Отправить">
	</form>
	<div class="success-mail-text">
		
	</div>
</div>
<!--КОНЕЦ оставить заявку консультация-->