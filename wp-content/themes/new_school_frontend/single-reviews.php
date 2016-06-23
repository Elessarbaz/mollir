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
					<div class="others-news">
						<h4>Другие новости</h4>
						<?php $col=0; $post=get_posts(array('category_name'=>'reviews','orderby'=>'rand' ,'numberposts'=>-1));
						foreach ($post as $value): if ($value->ID!=$obj->ID&&$col<2):
							$col++;
						?>
						<figure></figure>
						<div class="other-new-block">
							<a href="<?=get_permalink($value->ID)?>"><h4><?=$value->post_title?></h4></a>
							<p><?=$value->post_date?></p>
							<div class="other-new-image" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)?>)" ></div>
							<article>
								<?php $post=explode('<!--more-->',$value->post_content); echo $post[0]; ?>...
							</article>
							<a href="<?=get_permalink($value->ID)?>">Подробнее...</a>
						</div>
						<?php endif; endforeach;  wp_reset_query(); ?>

					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
					<div class="single-new-block">
						<div class="uk-grid">
							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
								<img src="<?=get_the_post_thumbnail_url()?>" style="    float: left;
    margin: 0 15px 15px 0;" alt="">
							</div>
							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
								<h4><?=get_the_title()?></h4>
								<p><?=get_the_date()?></p>

								<article>
									<?=get_the_content()?>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--End news-single-->

<?php
get_footer();
