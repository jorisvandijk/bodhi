<?php
global $blog_id, $wp_query, $wiki, $post, $current_user;
get_header( 'wiki' );
?>

<section class="content">
	<div class="page-title pad group wiki-bar">Wiki</div><!--/.page-title-->

	<div class="pad group">
		
		
			<article <?php post_class(); ?>>	
				<div class="post-inner group">
					
					<h1 class="post-title"><?php the_title(); ?></h1>
					
					
					
					
					<div class="clear"></div>
					
						
						<div class="entry-inner">
						


<div id="primary" class="wiki-primary-event">
    <div id="content">
        <div class="padder">
            <div id="wiki-page-wrapper">
                

                <div class="incsub_wiki incsub_wiki_single">
                    <?php _e('Wiki page you are looking for does not exist. Feel free to create it yourself.', 'wiki'); ?>
                    
                </div>
                <?php
                $wiki->new_wiki_form(false);
                ?>
            </div>
        </div>
    </div>
</div>


						
					
						
						<div class="clear"></div>				
					</div><!--/.entry-->
					
				</div><!--/.post-inner-->	
			</article><!--/.post-->				
		
		<div class="clear"></div>
		
		
		
		
	
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
