<?php get_header(); ?>

<section class="content">

	<div class="page-title pad group 



<?php

$type = get_post_type();

if ( 'incsub_wiki' == $type )
	echo 'wiki-bar"><a href="/w/wiki">Wiki</a> : ';
elseif ( 'appcenter' == $type )
	echo 'appcenter-bar"><a href="/a/">Appcenter</a> : ';
elseif ( 'post' == $type )
	echo '"><a href="/blog">Blog</a> : ';

?>

<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

echo $term->name;

?>


</div>
	<div class="pad group">		
		<?php if ((category_description() != '') && !is_paged()) : ?>
		
			<!--<h1 class="post-title"><?php echo category_description(); ?></h1>-->
			
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