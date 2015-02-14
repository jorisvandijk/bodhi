<?php get_header(); ?>

<section class="content">
	
<div class="page-title pad group donations-bar"><a href="/donate/">Donations</a></div>
<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?>>	
				<div class="post-inner group">
					
					<h1 class="post-title"></h1>
					
					<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					
					<div class="clear"></div>
					
					<div class="entry <?php if ( ot_get_option('sharrre') != 'off' ) { echo 'share'; }; ?>">	
					<div class="entry-inner">
<?php $jan = get_post_meta($post->ID, 'january_donors', true);
//Checking if anything exists for the key Songs
if ($jan) { ?>
<span class="anchor" id="january"></span>
<h3 class="donation_header">January</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('january_donors'); ?> </div>
    <div class="donor_value"><?php the_field('january_values'); ?> </div>
    <br />
    <div class="donor_name"><em>January Total: </em></div>
    <div class="donor_value"><em><?php the_field('january_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $feb = get_post_meta($post->ID, 'february_donors', true);
//Checking if anything exists for the key Songs
if ($feb) { ?>
<span class="anchor" id="february"></span>
<h3 class="donation_header">February</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('february_donors'); ?> </div>
    <div class="donor_value"><?php the_field('february_values'); ?> </div>
    <br />
    <div class="donor_name"><em>February Total: </em></div>
    <div class="donor_value"><em><?php the_field('february_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $mar = get_post_meta($post->ID, 'march_donors', true);
//Checking if anything exists for the key Songs
if ($mar) { ?>
<span class="anchor" id="march"></span>
<h3 class="donation_header">March</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('march_donors'); ?> </div>
    <div class="donor_value"><?php the_field('march_values'); ?> </div>
    <br />
    <div class="donor_name"><em>March Total: </em></div>
    <div class="donor_value"><em><?php the_field('march_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $apr = get_post_meta($post->ID, 'april_donors', true);
//Checking if anything exists for the key Songs
if ($apr) { ?>
<span class="anchor" id="april"></span>
<h3 class="donation_header">April</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('april_donors'); ?> </div>
    <div class="donor_value"><?php the_field('april_values'); ?> </div>
    <br />
    <div class="donor_name"><em>April Total: </em></div>
    <div class="donor_value"><em><?php the_field('april_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $may = get_post_meta($post->ID, 'may_donors', true);
//Checking if anything exists for the key Songs
if ($may) { ?>
<span class="anchor" id="may"></span>
<h3 class="donation_header">May</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('may_donors'); ?> </div>
    <div class="donor_value"><?php the_field('may_values'); ?> </div>
    <br />
    <div class="donor_name"><em>May Total: </em></div>
    <div class="donor_value"><em><?php the_field('may_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $jun = get_post_meta($post->ID, 'june_donors', true);
//Checking if anything exists for the key Songs
if ($jun) { ?>
<span class="anchor" id="june"></span>
<h3 class="donation_header">June</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('june_donors'); ?> </div>
    <div class="donor_value"><?php the_field('june_values'); ?> </div>
    <br />
    <div class="donor_name"><em>June Total: </em></div>
    <div class="donor_value"><em><?php the_field('june_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $jul = get_post_meta($post->ID, 'july_donors', true);
//Checking if anything exists for the key Songs
if ($jul) { ?>
<span class="anchor" id="july"></span>
<h3 class="donation_header">July</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('july_donors'); ?> </div>
    <div class="donor_value"><?php the_field('july_values'); ?> </div>
    <br />
    <div class="donor_name"><em>July Total: </em></div>
    <div class="donor_value"><em><?php the_field('july_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $aug = get_post_meta($post->ID, 'august_donors', true);
//Checking if anything exists for the key Songs
if ($aug) { ?>
<span class="anchor" id="august"></span>
<h3 class="donation_header">August</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('august_donors'); ?> </div>
    <div class="donor_value"><?php the_field('august_values'); ?> </div>
    <br />
    <div class="donor_name"><em>August Total: </em></div>
    <div class="donor_value"><em><?php the_field('august_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $sep = get_post_meta($post->ID, 'september_donors', true);
//Checking if anything exists for the key Songs
if ($sep) { ?>
<span class="anchor" id="september"></span>
<h3 class="donation_header">September</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('september_donors'); ?> </div>
    <div class="donor_value"><?php the_field('september_values'); ?> </div>
    <br />
    <div class="donor_name"><em>September Total: </em></div>
    <div class="donor_value"><em><?php the_field('september_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $oct = get_post_meta($post->ID, 'october_donors', true);
//Checking if anything exists for the key Songs
if ($oct) { ?>
<span class="anchor" id="october"></span>
<h3 class="donation_header">October</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('october_donors'); ?> </div>
    <div class="donor_value"><?php the_field('october_values'); ?> </div>
    <br />
    <div class="donor_name"><em>October Total: </em></div>
    <div class="donor_value"><em><?php the_field('october_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $nov = get_post_meta($post->ID, 'november_donors', true);
//Checking if anything exists for the key Songs
if ($nov) { ?>
<span class="anchor" id="november"></span>
<h3 class="donation_header">November</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('november_donors'); ?> </div>
    <div class="donor_value"><?php the_field('november_values'); ?> </div>
    <br />
    <div class="donor_name"><em>November Total: </em></div>
    <div class="donor_value"><em><?php the_field('november_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>

<?php $dec = get_post_meta($post->ID, 'december_donors', true);
//Checking if anything exists for the key Songs
if ($dec) { ?>
<span class="anchor" id="december"></span>
<h3 class="donation_header">December</h3>
<section class="donation">
    <div class="donor_name"><?php the_field('december_donors'); ?> </div>
    <div class="donor_value"><?php the_field('december_values'); ?> </div>
    <br />
    <div class="donor_name"><em>December Total: </em></div>
    <div class="donor_value"><em><?php the_field('december_total'); ?></em> </div>
</section>
&nbsp;
<?php } ?>




							<?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','hueman'),'after'=>'</div>')); ?>
						</div>
						<?php if ( ot_get_option('sharrre') != 'off' ) { get_template_part('inc/sharrre'); } ?>
						<div class="clear"></div>				
					</div><!--/.entry-->
					
				</div><!--/.post-inner-->	
			</article><!--/.post-->				
		<?php endwhile; ?>
		
		<div class="clear"></div>
		
		<?php the_tags('<p class="post-tags"><span>'.__('Tags:','hueman').'</span> ','','</p>'); ?>
		
		<?php if ( ( ot_get_option( 'author-bio' ) != 'off' ) && get_the_author_meta( 'description' ) ): ?>
			<div class="author-bio">
				<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
				<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
				<p class="bio-desc"><?php the_author_meta('description'); ?></p>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		
		<?php if ( ot_get_option( 'post-nav' ) == 'content') { get_template_part('inc/post-nav'); } ?>
		
		<?php if ( ot_get_option( 'related-posts' ) != '1' ) { get_template_part('inc/related-posts'); } ?>
		
		<?php comments_template('/comments.php',true); ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>