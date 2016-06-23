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

	<div class="about-body">
		<div class="uk-container uk-container-center">
			<h3 class="head-text-custom"><?=get_the_title()?></h3>
			<?php pp_get_breadcrumb('uk-breadcrumb'); ?>
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
					<ul class="uk-nav submenu-gallery">
						<?php
						$languages=true;
						$print=true;
						$menu=wp_get_nav_menu_items('about');
						foreach ($menu as $key=>$val) { $class='';if ($obj->ID==$val->object_id||$category->term_id==$val->object_id) $class='uk-active'; ?>
							<li class="<?=$class?>"><a  href="<?=$val->url?>"><?=$val->title?></a></li>
							<?php
						}
						?>
					</ul>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
					<div class="block-language">
						<h4>Русский язык</h4>
						<figure></figure>
						<div class="block-language-image" style="background-image: url(<?=get_the_post_thumbnail_url($obj->ID)?>)" ></div>
						<article>
							<?=$obj->post_content?>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>




<?php
get_footer();
