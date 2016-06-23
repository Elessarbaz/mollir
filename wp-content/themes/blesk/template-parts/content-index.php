<!--НАЧАЛО разделитель-тень-->
<div class="divider-shadow">
	<img src="<?php bloginfo('template_directory') ?>/public/img/sections-divider-shadow.png" alt="Разделитель">
</div>
<!--КОНЕЦ разделитель-тень-->
<!--НАЧАЛО О нас-->
<div class="about" id="about">
	<div class="uk-container uk-container-center">
		<h2><?=get_field('about_block',4)?></h2>
		<div class="uk-grid uk-grid-large">
			<?php
			$about=query_posts(array('category_name'=>'about', 'numberposts'=>3, 'order'=>'ASC'));
			foreach( $about as $post ) {
				setup_postdata($post);
				?>
				<div class="uk-width-medium-1-3">
					<img src="<?= get_the_post_thumbnail_url() ?>">
					<h3><?= get_the_title() ?></h3>
					<p><?=get_the_content('')?> </p>
				</div>
				<?php
			}
			wp_reset_query();
			?>

		</div>
	</div>
</div>
<!--КОНЕЦ О нас-->

<!--НАЧАЛО услуги-->
<div class="services" id="services">
	<div class="uk-container uk-container-center">
		<h2><?=get_field('block_services',4)?></h2>
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
					<?php
					$about=query_posts(array('category_name'=>'services', 'numberposts'=>-1, 'order'=>'ASC'));
					foreach( $about as $post ) {
						setup_postdata($post);
						?>
						<li>
							<a href="<?=get_permalink()?>">
								<img src="<?=get_the_post_thumbnail_url()?>">
								<h3><?=get_the_title()?></h3>
								<p>
									<?=get_the_content('')?>
								</p>
							</a>
						</li>
						<?php
					}
					wp_reset_query();
					?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
				<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-white-prev.png" alt="Предыдущее фото">
			</a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
				<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-white-next.png" alt="Следущее фото">
			</a>
		</div>

	</div>
</div>
<!--КОНЕЦ услуги-->

<!--НАЧАЛО галерея-->
<div class="gallery" id="gallery">
	<div class="uk-container uk-container-center">
		<h2><?=get_field('block_works',4)?></h2>
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
					<?php foreach (pp_gallery_get(32)as $value) : ?>
					<li>
						<a href="<?=$value->url?>" data-uk-lightbox="{group:'slider-group'}">
							<img src="<?=$value->url?>">
						</a>
						<p><?=$value->description?></p>
					</li>
					<?php endforeach; ?>

				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
				<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-white-prev.png" alt="Предыдущее фото">
			</a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
				<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-white-next.png" alt="Следущее фото">
			</a>
		</div>
	</div>
</div>
<!--КОНЕЦ галерея-->

<!--НАЧАЛО отзывы-->
<div class="reviews uk-container uk-container-center" id="reviews">
	<h2><?=get_field('reviews',4)?></h2>
	<div class="data-uk-slider uk-slidenav-position" data-uk-slider>
		<div class="uk-slider-container">
			<ul class="uk-slider uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
				<?php foreach (pp_gallery_get(4)as $value) : ?>
				<li>
					<a href="#reviews-modal" data-uk-modal="{center:true}" data-video-src="<?=$value->description?>" class="video-modal-caller">
						<img src="<?=$value->url?>">
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
			<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-blue-prev.png" alt="Предыдущее фото">
		</a>
		<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
			<img src="<?php bloginfo('template_directory') ?>/public/img/arrow-blue-next.png" alt="Следущее фото">
		</a>
	</div>
</div>
<!--КОНЕЦ отзывы-->

<!--НАЧАЛО оставить заявку-->
<div class="request" id="request">
	<div class="uk-container uk-container-center">
		<h2>Оставить заявку</h2>
		<p><?=get_field('form_rew',4)?></p>
		<form class="blink-mailer">
			<input type="hidden" name="title" value="Заявка">
			<label for="name">Ваше имя</label>
			<input type="text" name="Имя" required id="name">
			<label for="phoneNumber">Номер телефона</label>
			<input type="tel" pattern="\+7\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}" required placeholder="+7-XXX-XXX-XX-XX" name="Номер телефона" id="phoneNumber">
			<input type="submit" value="отправить">
		</form>
		<div style="display: none" class="success-mail-text">

		</div>
		<img src="<?=get_field('rew_image',4)?>" alt="Чистка" class="hand">
	</div>
	<br>
</div>
<!--КОНЕЦ оставить заявку-->

<!--НАЧАЛО новости (подраздел главной)-->
<div class="news" id="news">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-grid-divider">
			<div class="uk-width-medium-1-2">
				<h2><?=get_field('block_news',4)?></h2>
				<?php
				$about=query_posts(array('category_name'=>'news', 'numberposts'=>3, 'order'=>'ASC'));
				foreach( $about as $post ) {
					setup_postdata($post);
					?>
					<article>
						<h3><a href="<?=get_permalink()?>"><?=get_the_title()?></a></h3>
						<p><?=get_the_content('')?></p>
					</article>
					<?php
				}
				wp_reset_query();
				?>
				<a href="<?=get_term_link(4)?>" class="show-all">Читать все новости</a>
			</div>
			<div class="uk-width-medium-1-2">
				<h2><?=get_field('block_articles',4)?></h2>
				<?php
				$about=query_posts(array('category_name'=>'articles', 'numberposts'=>3, 'order'=>'ASC'));
				foreach( $about as $post ) {
					setup_postdata($post);
					?>
					<article>
						<h3><a href="<?=get_permalink()?>"><?=get_the_title()?></a></h3>
						<p><?=get_the_content('')?></p>
					</article>
					<?php
				}
				wp_reset_query();
				?>
				<a href="<?=get_term_link(5)?>" class="show-all">Читать все новости</a>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ новости (подраздел главной)-->

<!--КОНЕЦ вопрос-ответ-->
<div class="faq" id="faq">
	<div class="uk-container uk-container-center">
		<h2><?=get_field('faq',4)?></h2>
		<?php $comment=get_comments(array('post_id'=>get_the_ID(),'status' => 'approve',));?>
		<?php foreach ($comment as $value):  if (!$value->comment_parent): ?>
		<div class="uk-grid uk-grid-large">
			<div class="question uk-width-medium-1-2">
				<p>
						<?=$value->comment_content; ?>
				</p>
			</div>
			<div class="answer uk-width-medium-1-2">
			<?php foreach ($comment as $value1): if ($value->comment_ID==$value1->comment_parent):?>
				<p><?=$value1->comment_content; ?></p>
			<?php endif; endforeach; ?>
			</div>

		</div>
		<hr class="uk-grid-divider">
		<?php endif; endforeach; ?>
		<div class="flex-row">
			<div class="col-picture">
				<img src="<?=get_field('faq-image',4)?>" alt="Вопросы">
			</div>
			<?php if (!is_user_logged_in()): ?>
			<div class="col-form">
				<h3>Задайте свой вопрос</h3>
				<?php comment_form(array(
					'fields'=>array(
						'author'=>'
					<div class="uk-grid">
						<div class="uk-width-medium-1-2">
						<label for="questioner-name">Ваше имя</label>
							<input id="author" name="author" type="text" placeholder="" required>	
					',
						'email'=>'
					<label for="questioner-email">Ваш E-mail</label>
							<input id="email" name="email" type="email" placeholder="" required>
					</div>',
						'url'=>'',
						'comment_field'=>'
				<div class="uk-width-medium-1-2">
						<label for="message">Сообщение</label>
					<textarea id="comment" name="comment" cols="30" rows="5" placeholder=""></textarea>
				',

					),
					'title_reply'=>'',
					'title_reply_before'=>'',
					'title_reply_after'=>'',
					'comment_field'=>'',
					'comment_notes_before'=>'',
					'submit_button'=>'
					<input type="submit" value="Отправить">
				</div>
			',

				),4); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<br>
</div>
<!--КОНЕЦ вопрос-ответ-->