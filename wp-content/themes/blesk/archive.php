<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blesk
 */
$obj=get_queried_object();
$query_url=$_SERVER['REDIRECT_URL'];
$post=count(get_posts(array('category_name'=>$obj->slug,'posts_per_page'=>-1)));
$page_post=get_option('posts_per_page');
$page_count=ceil($post/$page_post);
$page_num=(int)get_query_var('page');
$offset=$page_num*$page_post;
query_posts(array('category_name'=>$obj->slug,'posts_per_page'=>$page_post,'offset'=>$offset));
get_header(); ?>

	<!--НАЧАЛО список новостей-->
	<div class="articles-list">
		<div class="uk-container uk-container-center">
			<h1><?=$obj->name?></h1>
			<?php
			if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/news/content', 'single' );
				endwhile;
			endif; ?>
			
			<?php if($page_count>1):?>
			<!--НАЧАЛО пагинация-->
			<ul class="uk-pagination uk-pagination-right">
				<li><a href="<?=$query_url?>?page=0"><i class="uk-icon-angle-double-left"></i></a></li>
				<?php for ($i=0; $i<$page_count; $i++): $class=''; if ($i==$page_num){$class='class="uk-active"';} ?>
					<li data-id="<?=$i?>" data-id1="<?=$page_num?>" <?=$class?> >
						<?php if ($i==$page_num):?><span><?php endif;?>
							<a href="<?=$query_url.'?page='.$i?>">
							<?=$i+1?>
							</a>
						<?php if ($i==$page_num):?></span><?php endif;?>
					</li>
				<?php endfor; ?>
				<li><a href="<?=$query_url?>?page=<?=$page_count-1?>"><i class="uk-icon-angle-double-right"></i></a></li>
			</ul>
			<?php endif; ?>
			<!--КОНЕЦ пагинация-->
		</div>
	</div>
	<!--КОНЕЦ список новостей-->
<?php
get_footer();
