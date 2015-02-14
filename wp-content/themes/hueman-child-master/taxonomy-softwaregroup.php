<?php get_header(); ?>

<section class="content">

	<div class="page-title pad group appcenter-bar"><a href="/a/">Appcenter</a> : 


<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

echo $term->name;

?>


</div>
	<div class="pad group">	

<?php if ((category_description() != '') && !is_paged()) : ?>
		
			
		<?php endif; ?>
		
		<?php if ( have_posts() ) : ?>
		
			<div class="post-list group">



<?php

$obj = get_queried_object();
$post_object = get_field('featured', $obj );

if( $post_object ): 

	$post = $post_object;
	setup_postdata( $post ); 

	?>
<div class="post-row custom-archive featured">
<h2 class="single post-title">Featured: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<a href="<?php the_field('screenshot'); ?>"><img class="aligncenter size-full" style="width:400px; display: block;" src="<?php the_field('screenshot'); ?>" /></a>

</div>

<h2 class="post-title">All <?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

echo $term->name;

?>:</h2>

<?php wp_reset_postdata(); ?>
<?php endif; ?>



<?php
global $wp_query;
query_posts(
	array_merge(
		$wp_query->query,
		array(
		'order' => 'ASC',
		'orderby'=>'title',
		'posts_per_page' => 20,
		)
	)
);
?>


<div class="post-row custom-archive">
<?php while ( have_posts() ): the_post(); ?>

<?php get_template_part('content'); ?>

<?php endwhile; ?>
</div>
			</div><!--/.post-list-->
		
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>