<?php get_header(); ?>

<section class="content">

	<div class="page-title pad group wiki-bar"><a href="/w/wiki/">Wiki</a></div>
	
	<div class="pad group">		
		<?php if ((category_description() != '') && !is_paged()) : ?>
		
			<h1 class="post-title"><?php echo category_description(); ?></h1>
			
		<?php endif; ?>
		
		<?php if ( have_posts() ) : ?>
		
			<div class="post-list group">
				<?php $i = 1; echo '<div class="post-row custom-archive">'; while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
				<?php if($i % 2 == 0) { echo '</div><div class="post-row custom-archive">'; } $i++; endwhile; echo '</div>'; ?>
			</div><!--/.post-list-->
		
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>