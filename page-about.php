<?php
/**
 * 
 *
 * Template Name: About
 * 
 * 
 * 
 *
 * @package eight
 */

get_header(); ?>

	
<div class="primaryContent ten columns">

			<article class="content-articles">
	<header class="section-header">
		<h2>About Octopus</h2>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<?php the_content();?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<h4>No content found</h4>
	<?php endif; ?>
	</article>

	<article class="content-articles">
	<header class="section-header">
		<h4>Masthead</h4>
	</header>
	<?php if( have_rows('masthead_staff') ): ?>
	 <?php while( have_rows('masthead_staff') ): the_row(); ?>
		<div class="eight columns masthead-staff">
			<header class="masthead-header">
				<h6><?php the_sub_field('staff_name');?>, <?php the_sub_field('staff_position');?></h6>
					
			</header>
				<div class="masthead-content" style="font-size:12px;">
					<img src="<?php the_sub_field('staff_picture');?>" class="masthead-photo" style="width:35%;">
					<?php the_sub_field('the_bio');?>
			</div>
		</div>
		<?php endwhile;?>
	<?php endif;?>
	</article>

</div><!-- End primary content -->

<?php get_sidebar('books'); ?>
<?php get_footer(); ?>
