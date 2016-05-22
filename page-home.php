<?php
/*
Template Name:  Homepage
*/
get_header();
?>
<div class="primaryContent columns">
	<div class="row catalog ">

		<br class="clear">
		<?php $args = array(
				//Type & Status Parameters
				'post_type'   => 'books',
				//Order & Orderby Parameters
				'order'               => 'DESC',
				'orderby'             => 'date',
				//Pagination Parameters
				'posts_per_page'         => 8
				);
		$catalogPreview = new WP_Query($args);
		?>
		<?php if ( $catalogPreview->have_posts() ) : while ( $catalogPreview->have_posts() ) : $catalogPreview->the_post(); ?>
		<div class="four columns item">
			<?php get_template_part('content', 'item' );?>
		</div>
		<?php endwhile; ?>
		<?php else: ?>
		<h2>No catalog items found</h2>
		<?php endif; ?>
		<header class="section-header">
			<a class="read-more" href="/catalog">full catalog &#187;</a>
		</header>
	</div><!--END ROW CATALOG-->
<?php wp_reset_query();?>
	<div class="row updates">

		<?php
			$args = array(
				'posts_per_page'         => 5,
				'category_name'    => 'octopus-books'

			);
		$latestPosts = new WP_Query( $args );?>

		<?php if ( $latestPosts->have_posts() ) : while ( $latestPosts->have_posts() ) : $latestPosts->the_post(); ?>
			<?php get_template_part( 'content', 'article' );?>
		<?php endwhile; ?>
		<?php else: ?>
		<h4>No posts found</h4>
		<?php endif; ?>
		<header class="section-header">
			<a href="/updates" class="read-more">past updates &#187;</a>
		</header>
	</div> <!-- END ROW UPDATES -->
</div><!--END PRIMARY CONTENT-->
<?php wp_reset_query();?>

<!-- <?php get_sidebar('partners');?> -->
<?php get_footer();?>
