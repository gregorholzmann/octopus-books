<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package eight
 */

get_header(); ?>

	<div class="primaryContent ten columns">

				<header class="page-header">
					<h4 class="page-title"><?php _e( 'Hey it looks like you lost your way....', 'eight' ); ?></h4>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'eight' ); ?></p>

					<?php get_search_form(); ?>

					

				</div><!-- .page-content -->
</div>
<?php get_sidebar('books'); ?>
<?php get_footer(); ?>