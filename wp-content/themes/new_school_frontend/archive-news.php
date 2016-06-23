<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package new_school_frontend
 */
$query_url=$_SERVER['REDIRECT_URL'];
$post=count(get_posts(array('category_name'=>'news','posts_per_page'=>-1)));
$page_post=get_option('posts_per_page');
$page_count=ceil($post/$page_post);
$page_num=(int)get_query_var('page');
$offset=$page*$page_post;
//print_r($page_count);
print_r($page_num);

$category=get_the_category();
$category=$category[0];
query_posts(array('category_name'=>'news','posts_per_page'=>$page_post,'offset'=>$offset));
get_header(); ?>

	<!--News body-->
	<div class="news-body">
		<div class="uk-container uk-container-center">
			<h3 class="head-text-custom"><?=$category->name?></h3>
			<div class="uk-grid uk-grid-width-1-1">
				<?php

				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/news/news', 'view' );
					endwhile;
				endif; ?>
			</div>
			<ul class="uk-pagination">
				<?php for ($i=0; $i<$page_count; $i++): $class=''; if ($i==$page_num){$class='uk-active';} ?>
				<li data-id="<?=$i?>" data-id1="<?=$page_num?>" class="<?=$class?>" >
					<a href="<?=$query_url.'?page='.$i?>">
						<?=$i+1?>
					</a>
				</li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
	<!--End news body-->



<?php
get_footer();
