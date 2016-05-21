<?php
/**
 * The Template for displaying all single posts.
 *
 * @package eight
 */

get_header(); ?>

	<div class="primaryContent ten columns">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('partners'); ?>
<?php get_footer(); ?>