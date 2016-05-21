<?php
/*
Template Name:  Catalog
*/
get_header();
?>
<div class="primaryContent">
	<header class="section-header">
		<h2>Full Catalog</h2>
	</header>
	<div class="row catalog">
		<?php
			$args = array(
				'post_type'   => 'books',
				'posts_per_page' => '4'
			);
		$mostRecentThreeBooks = new WP_Query( $args );
		if ( $mostRecentThreeBooks->have_posts() ) : while ( $mostRecentThreeBooks->have_posts() ) : $mostRecentThreeBooks->the_post(); ?>
		<div class="four columns item">
			<?php get_template_part('content', 'item' ); ?>
		</div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<h4>No items found</h4>
		<?php endif; ?>

		<?php
			$args = array(
				'post_type'   => 'books',
				'offset' => 4
			);

		$mostRecentThreeBooks = new WP_Query( $args );
		if ( $mostRecentThreeBooks->have_posts() ) : while ( $mostRecentThreeBooks->have_posts() ) : $mostRecentThreeBooks->the_post(); ?>
		<div class="four columns item">
			<?php get_template_part('content', 'item' ); ?>
		</div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<h4>No items found</h4>
		<?php endif; ?>
	</div> <!-- END CATALOG ROW -->
<?php wp_reset_query();?>

<?php get_sidebar('partners-wide');?>
<?php get_footer();?>
