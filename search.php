<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package eight
 */

get_header(); ?>

<div class="primaryContent ten columns">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h4 class="page-title"><?php printf( __( 'Search Results for: %s', 'eight' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php eight_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

</div>

<?php get_sidebar('partners'); ?>
<?php get_footer(); ?>
