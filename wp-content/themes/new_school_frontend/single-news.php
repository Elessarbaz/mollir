<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package new_school_frontend
 */
$obj=get_queried_object();
$category=get_the_category();
$category=$category[0];
get_header(); ?>

	<!--News-single-->
	<div class="news-single-body">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-visible-large uk-width-large-1-4">
					<div class="others-news" >
						<h4>Другие новости</h4>
						<?php $col=0; $post=get_posts(array('category_name'=>'news','orderby'=>'rand' ,'numberposts'=>-1));
						foreach ($post as $value): if ($value->ID!=$obj->ID&&$col<2):
							$col++;
						?>
						<figure></figure>
						<div class="other-new-block">
							<a href="<?=get_permalink($value->ID)?>"><h4><?=$value->post_title?></h4></a>
							<p><?=$value->post_date?></p>
							<div class="other-new-image" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)?>)" ></div>
							<article>
								<?=str_replace("\n","<br>",mb_substr(strip_tags($value->post_content),0,128))?>...
							</article>
							<a href="<?=get_permalink($value->ID)?>">Подробнее...</a>
						</div>
						<?php endif; endforeach;  wp_reset_query(); ?>

					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
					<div class="single-new-block" style="text-align: center;">
						<h4><?=get_the_title()?></h4>
						<p><?=get_the_date()?></p>
						<div class="uk-grid">
							<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-1 uk-flex uk-flex-center">
								<div class="img-news-block">
									<img src="<?=get_the_post_thumbnail_url()?>" alt="">
								</div>
							</div>
						<div class="uk-width-small-1-1 uk-width-medium-2-3 uk-width-large-1-1">
							<article>
							<?=get_the_content()?>
							</article>
						</div>
						</div>
						<?php $gallery=pp_gallery_get(); if ($gallery): ?>
						<div class="gallery-block">
							<div data-uk-slideset="{small: 1, medium: 2, large: 4}">
								<div class="uk-slidenav-position">
									<ul class="uk-grid uk-slideset">
										<?php
										foreach ($gallery as $value):
											?>
											<li>
												<a href="<?=$value->url?>" data-uk-lightbox="{group:'my-group<?=get_the_ID()?>'}" title="">
												<div class="gallery-block-single" style="background-image: url('<?=$value->url?>')"></div>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
									<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
									<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
								</div>
								<ul class="uk-slideset-nav uk-dotnav uk-flex-center">.</ul>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--End news-single-->

<?php
get_footer();
