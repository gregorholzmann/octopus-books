<?php
/*
Template Name:  Catalog
*/
get_header();
?>
<div class="ten columns">
	<header>
		<h2>Subscriptions</h2>
	</header>

	<div class="row catalog">
		<?php
			$args = array(
				'post_type'   => 'subscriptions',
				'posts_per_page' => '4'
			);
		$mostRecentThreeBooks = new WP_Query( $args );
		if ( $mostRecentThreeBooks->have_posts() ) : while ( $mostRecentThreeBooks->have_posts() ) : $mostRecentThreeBooks->the_post(); ?>
		<div class="eight columns item">
			<?php get_template_part('content', 'subscriptions' ); ?>
		</div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<h4>No items found</h4>
		<?php endif; ?>


	</div> <!-- END CATALOG ROW -->

	<?php echo eStore_shopping_cart(); ?>
</div>
<?php wp_reset_query();?>

<?php get_footer();?>
