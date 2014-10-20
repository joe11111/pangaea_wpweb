<?php
/****************************************

		page.php

		固定ページ用のデフォルトテンプレート

*****************************************/

get_header(); ?>
<div id="main-body">
<?php $stakeholderP = Stakeholder::__getInstance($post->ID); ?>
    <div  id="main-navi">
   		<?php wp_nav_menu( array('menu_id' => 'nav' )); ?>
	</div>
	<div id="content-shadow">
		<div id="title-image">
			<img src="<?php bloginfo('template_directory') ?>/images/title-<?php echo $stakeholderP -> getCurenntName(); ?>.png" alt="title-image" />
		</div>
		<div id="title_underimg">
			<img src="<?php bloginfo('template_directory') ?>/images/title_under_<?php echo $stakeholderP -> getCurenntName(); ?>_ja.jpg" width="200" height="35" alt="title_underimg" />
		</div>

		<?php get_sidebar(); ?>


		<!-- page.php -->
		<div class="grid_9 push_3" id="main-content">

			<div class="box-top"></div>
			<article id="post-<?php the_ID(); ?>" <?php post_class('box-middle post'); ?>>

				<?php if (have_posts()) :

					while (have_posts()) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile;

				else : ?>

					<h3>Not Found</h3>

					<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>

			</article>
			<div class="box-bottom"></div>

		</div><!-- main-content -->
	</div><!--content-shadow end-->

</div><!-- main-body -->

	
	
	<?php get_footer(); ?>
<!-- /page.php -->
