<!--НАЧАЛО Услуги (подраздел главной)-->
<div class="services" id="services">
	<div class="uk-container uk-container-center">
		<a href="<?=get_term_link(2)?>"><h2>Услуги</h2></a>
		<div class="uk-grid">
			<?php
			$services=query_posts(array('category_name'=>'services', 'numberposts'=>6, 'orderby'=>'rand'));
			foreach( $services as $post ) {
				setup_postdata($post);
				?>
				<article class="uk-width-medium-1-2">
					<h3 class="brand-underline"><a href="<?=get_permalink()?>"><?=get_the_title()?></a></h3>
					<p><?=get_the_content()?></p>
				</article>
				<?php
			}
			wp_reset_query();
			?>
		</div>
	</div>
</div>
<!--КОНЕЦ Услуги (подраздел главной)-->

<!--НАЧАЛО галерея подраздел главной)-->
<div class="gallery" id="gallery">
	<div class="uk-container uk-container-center">
		<a href="<?=get_permalink(12)?>"><h2>ГАЛЕРЕЯ</h2></a>
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid-medium uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-3 uk-grid-width-small-1-2">
					<?php $gallery=pp_gallery_get(12);
					for ($i=0; $i<=count($gallery)-1; $i=$i+2):
					?>
					<li>
						<?php if(isset($gallery[$i])): ?>
						<a href="<?=$gallery[$i]->url?>" data-uk-lightbox="{group:'slider-group'}">
							<img src="<?=$gallery[$i]->url?>">
						</a>
						<?php endif; ?>
						<?php if(isset($gallery[$i+1])): ?>
						<a href="<?=$gallery[$i+1]->url?>" data-uk-lightbox="{group:'slider-group'}">
							<img src="<?=$gallery[$i+1]->url?>">
						</a>
						<?php endif;?>
					</li>
					<?php endfor; ?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
				<img src="<?php bloginfo('template_directory') ?>/public/img/chevron-left.png" alt="Предыдущее фото">
			</a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
				<img src="<?php bloginfo('template_directory') ?>/public/img/chevron-right.png" alt="Следущее фото">
			</a>
		</div>
	</div>
</div>
<!--КОНЕЦ галерея подраздел главной)-->

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


<!--НАЧАЛО Новости (подраздел главной)-->
<div class="news" id="news">
	<div class="uk-container uk-container-center">
		<a href="<?=get_term_link(3)?>"><h2>Новости</h2></a>
		<div class="uk-grid">
			<?php
			$services=query_posts(array('category_name'=>'news', 'numberposts'=>4, 'orderby'=>'rand'));
			foreach( $services as $post ) {
				setup_postdata($post);
				?>
				<article class="uk-width-medium-1-2">
					<h3 class="brand-underline"><a href="<?=get_permalink()?>"><?=get_the_title()?></a></h3>
					<p><?=get_the_content()?></p>
				</article>
				<?php
			}
			wp_reset_query();
			?>
		</div>
	</div>
</div>
<!--КОНЕЦ Новости (подраздел главной)-->

<!--НАЧАЛО Сертификат (подраздел главной)-->
<div class="cerificates" id="cerificates">
	<div class="uk-container uk-container-center">
		<h2>Сертификат соответстивия</h2>
		<div class="certificate-item">
			<img src="<?=get_field('cerificates-image',4)?>">
			<p>
				<?=get_field('cerificates-text',4)?>
			</p>
		</div>
	</div>
</div>
<!--КОНЕЦ Сертификат (подраздел главной)-->

<!--НАЧАЛО Отзывы-->
<div class="reviews" id="reviews">
	<div class="uk-container uk-container-center">
		<h2>Отзывы</h2>
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid-medium uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
					<?php $comments=get_comments(array('post_id'=>get_the_ID(),'status' => 'approve',));?>
					<?php foreach ($comments as $comment): ?>
					<li>
						<div class="content-wrapper">
							<p class="name brand-underline"><?=$comment->comment_author; ?></p>
							<p><?=$comment->comment_content; ?></p>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
				<img src="<?php bloginfo('template_directory') ?>/public/img/chevron-left.png" alt="Предыдущее фото">
			</a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
				<img src="<?php bloginfo('template_directory') ?>/public/img/chevron-right.png" alt="Следущее фото">
			</a>
		</div>
	</div>

</div>
<!--КОНЕЦ Отзывы-->
<?php if (!is_user_logged_in()): ?>
<!--КОНЕЦ оставить отзыв-->
<div class="send-review uk-container uk-container-center">
	<div class="col-form">
		<h2>Оставить отзыв</h2>

		<?php comment_form(array(
			'fields'=>array(
				'author'=>'
					<div class="uk-grid">
						<div class="uk-width-medium-1-2">
						<label for="questioner-name">Ваше имя</label>
							<input id="author" name="author" type="text" placeholder="" required>	
					',
				'email'=>' <input id="email" name="email" type="hidden" placeholder="" value="test@ml.ru" required>',
				'url'=>'<label for="questioner-email">Ваш Телефон</label>
							<input id="url" name="url" type="text" placeholder="" required>
					</div>',
				'comment_field'=>'
				<div class="uk-width-medium-1-2">
						<label for="message">Отзыв</label>
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

		<!--<form action="" class="uk-grid">
			<div class="uk-width-medium-1-2">
				<label for="reviewer-name">Имя</label>
				<input type="text" id="reviewer-name">
			</div>
			<div class="uk-width-medium-1-2">
				<label for="reviewer-tel">Телефон</label>
				<input type="tel" id="reviewer-tel">
			</div>
			<div class="uk-width-medium-1-1">
				<label for="review">Отзыв</label>
				<textarea name="review" id="review"></textarea>
				<input type="submit" value="Отправить">
			</div>
		</form>-->
	</div>
	<br>
</div>
<!--КОНЕЦ оставить отзыв-->
<?php endif; ?>

<!--НАЧАЛО карта-->
<div class="map">
	<?=get_field('map',4)?>
</div>
<!--КОНЕЦ карта-->