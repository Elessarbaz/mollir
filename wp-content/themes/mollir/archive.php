<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mollir
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

	<!--НАЧАЛО breadcrumb-->
	<div class="breadcrumb-container uk-container uk-container-center">
		<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right') ?>
	</div>
	<!--КОНЕЦ breadcrumb-->


	<!--НАЧАЛО список статей -->
	<div class="articles-list-section uk-container uk-container-center">
		<h1><?=$obj->name?></h1>
		<?php
		if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'archive-template' );
			endwhile;
		endif; ?>
	</div>
	<!--КОНЕЦ список статей -->

	<!--НАЧАЛО pagination-->
	<?php if($page_count>1):?>
		<!--НАЧАЛО пагинация-->
		<ul class="uk-pagination uk-pagination-right uk-container uk-container-center">
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
	<!--КОНЕЦ pagination-->
	<br>
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
	<br>
<?php
get_footer();
