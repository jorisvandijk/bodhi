<?php
/*
Template Name: Index Page
*/
?>
<?php include_once( 'index_header.php' ); ?>

<section class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
		
			<article <?php post_class('group'); ?>>
				
				<?php get_template_part('inc/page-image'); ?>
				
				<div class="entry themeform">
					<?php the_content(); ?>
					<div class="clear"></div>
				</div><!--/.entry-->
				
			</article>
			
			<?php if ( ot_get_option('page-comments') == 'on' ) { comments_template('/comments.php',true); } ?>
			
		<?php endwhile; ?>


<?php query_posts('showposts=1'); ?>
 
<?php while (have_posts()) : the_post(); ?>
<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<span class="entry-date"><em><?php echo get_the_date(); ?></em></span>
<div class="entry-inner">
<?php the_excerpt(); ?></div>
<a href="<?php the_permalink() ?>">Continue reading</a>
<?php endwhile;?>


	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
