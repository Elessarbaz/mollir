<div class="uk-grid">
	<div class="uk-width-medium-1-3">
		<?php if(get_the_post_thumbnail_url()): ?>
			<div class="img" style="background-image: url(<?php the_post_thumbnail_url()?>);"></div>
		<?php endif; ?>
	</div>
	<div class="uk-width-medium-2-3">
		<h3 class="brand-underline"><a href="<?=get_permalink()?>"><?=get_the_title()?></a></h3>
		<p>
			<?php the_content('') ?>
		</p>
		<p><a href="<?=get_permalink()?>" class="read-more">Читать далее..</a></p>
	</div>
</div>