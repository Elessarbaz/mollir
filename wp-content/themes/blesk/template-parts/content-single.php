<?php
	$current_category=get_the_category();
	$current_category=$current_category[0];
	$obj=get_queried_object();
	?>
<!--НАЧАЛО список новостей и сама новость-->
<article>
<div class="uk-container uk-container-center article-box">
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 other-articles">
			<div class="border">
				<?php

				$single=query_posts(array('category_name'=>$current_category->slug, 'numberposts'=>-1, 'order'=>'ASC'));
				foreach( $single as $post ) :
				setup_postdata($post); if (get_the_ID()!=$obj->ID):
				?>
				<a href="<?=get_permalink()?>"><?=get_the_title()?></a>
				<?php endif; endforeach; wp_reset_query(); ?>
			</div>
		</div>
		<div class="uk-width-medium-3-4 article">
			<div class="border on-article">
				<h2><?=get_the_title()?></h2>
				<p>
					<img src="<?=get_the_post_thumbnail_url()?>" alt="">

					<?=get_the_content()?>

				</p>
			</div>
		</div>
	</div>
</div>
</article>
<!--КОНЕЦ список новостей и сама новость-->

<!--НАЧАЛО оставить заявку-->
<div class="request" id="request">
	<div class="uk-container uk-container-center">
		<h2>Оставить заявку</h2>
		<p><?=get_field('form_rew',4)?></p>
		<form class="blink-mailer">
			<input type="hidden" name="title" value="Заявка">
			<label for="name">Ваше имя</label>
			<input type="text" required name="Имя" id="name">
			<label for="phoneNumber">Номер телефона</label>
			<input type="tel" required pattern="\+7\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}" placeholder="+7-XXX-XXX-XX-XX" name="Номер телефона" id="phoneNumber">
			<input type="submit" value="отправить">
		</form>
		<div style="display: none" class="success-mail-text">

		</div>
		<img src="<?=get_field('rew_image',4)?>" alt="Чистка" class="hand">
	</div>
</div>
<!--КОНЕЦ оставить заявку-->