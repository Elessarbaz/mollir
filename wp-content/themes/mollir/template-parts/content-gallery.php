<!--НАЧАЛО breadcrumb-->
<div class="breadcrumb-container uk-container uk-container-center">
	<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right'); ?>
</div>
<!--КОНЕЦ breadcrumb-->


<!--НАЧАЛО галерея -->
<div class="gallery-on-gallery-page uk-container uk-container-center">
	<h1><?=get_the_title()?></h1>

	<div class="uk-grid">
		<?php foreach (pp_gallery_get() as $image): ?>
		<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
			<a href="<?=$image->url?>" style="background-image: url('<?=$image->url?>')" data-uk-lightbox="{group:'slider-group'}">
				<span><?=$image->alt?></span>
			</a>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<!--КОНЕЦ галерея -->

<!--НАЧАЛО pagination-->
<!--<ul class="uk-pagination uk-pagination-right uk-container uk-container-center">
	<li><a href=""><i class="uk-icon-angle-double-left"></i></a></li>
	<li class="uk-active"><span>1</span></li>
	<li><a href="">2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><span>...</span></li>
	<li><a href=""><i class="uk-icon-angle-double-right"></i></a></li>
</ul>-->
<!--КОНЕЦ pagination-->

<!--НАЧАЛО оставить заявку консультация-->
<div class="request" id="request">
	<div class="uk-container uk-container-center">
		<div class="summary">
			<h2 class="brand-underline"><?= get_field('rew_title', 4) ?></h2>
			<p>
				<?= get_field('rew_text', 4) ?>
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
</div>
<!--КОНЕЦ оставить заявку консультация-->