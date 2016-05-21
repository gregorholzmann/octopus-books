<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package eight
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="section-header">
		<h4 class="entry-title"><?php the_title(); ?></h4>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'eight' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

