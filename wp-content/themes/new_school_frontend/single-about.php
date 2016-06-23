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
<?php if (get_field('hi-title',$obj->ID)!=''&& get_field('hi-content',$obj->ID)!=''): ?>
	<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
					<div class="about-block">
						<div class="uk-grid">
							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
								<h4 class="about-title">Сведения о школе</h4>
								<figure class="about-figure"></figure>
								<article class="about-article">
									<?=$obj->post_content?>
								</article>
							</div>

							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
								<div class="about-director">
									<img src="<?=get_field('thumbnail',$obj->ID)?>" alt="">
									<p>Директор школы</p>
									<p><?=get_field('director',$obj->ID)?></p>
								</div>
							</div>

						</div>
					</div>
					
					<div class="about-title title-about-normal title-margin"><?=get_field('video-name',$obj->ID)?></div>
					<div class="viedo-about">
					<?=get_field('video',$obj->ID) ?>
					</div>
				</div>
<?php else:
	$gallery=pp_gallery_get($obj->ID);
	if (get_the_post_thumbnail_url($obj->ID)!=''&&$obj->post_content!=''):?>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
			<div class="article-akmar">
				<div class="img-akmar" style="background-image: url(<?=get_the_post_thumbnail_url($obj->ID)?>)" ></div>
				<?php if($obj->post_excerpt ): ?>
				<article>
					<?=$obj->post_excerpt?>
				</article>
				<?php endif; ?>
			</div>
			<article class="berkut-article">
				<?=$obj->post_content?>
			</article>
			<?php if ($gallery): ?>
			<div class="gallery-block">
				<h4 class="berkut-title"> <?=get_field('director',$obj->ID)?></h4>
				<div data-uk-slideset="{small: 1, medium: 2, large: 3}">
					<div class="uk-slidenav-position">
						<ul class="uk-grid uk-slideset">
							<?php foreach ($gallery as $value): ?>
							<li>
								<a href="<?=$value->url?>" data-uk-lightbox="{group:'my-group'}" title="<?=$value->description?>"><div class="gallery-block-single" style="background-image: url(<?=$value->url?>)" ></div></a>
							</li>
							<?php endforeach; ?>
						</ul>
						<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
						<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	<?php else:
		if ($gallery):
	?>

	<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
		<div class="about-block">
			<div class="uk-grid uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-3">
				<?php foreach ($gallery as  $value): ?>
				<div class="about-director">
					<img src="<?=$value->url?>" alt="">
					<p><?=$value->alt?></p>
					<p><?=$value->description?></p>
				</div>
				<?php endforeach;  ?>
			</div>
		</div>
	</div>

<?php endif; endif; endif; ?>
			</div>
		</div>
	</div>




<?php
get_footer();
