<div class="uk-grid">
	<div class="uk-width-medium-1-3">
		<img src="<?=get_the_post_thumbnail_url()?>">
	</div>
	<div class="uk-width-medium-2-3">
		<h3><a href="<?=get_permalink()?>"><?=get_the_title()?></a></h3>
		<p>
			<?=get_the_content()?>
		</p>
	</div>
</div>