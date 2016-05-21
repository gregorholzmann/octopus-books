<?php
/**
 * The Sidebar containing the most recent books
 *
 * @package eight
 */
?>




<div class="sidebar books six columns ">
	<div class="widget">
		<header class="widget-header">
			<h3>Recently Released</h3>
		</header>
		<div class="innerWrapper catalog">
		<?php 	/**
				 * The WordPress Query class.
				 * @link http://codex.wordpress.org/Function_Reference/WP_Query
				 *
				 */
				$args = array(	
					'post_type'    => 'books',		
					'posts_per_page'         => 4
				);
			$recentBooks = new WP_Query( $args );
			
			if ( $recentBooks->have_posts() ) : while ( $recentBooks->have_posts() ) : $recentBooks->the_post(); ?>
			<div class="row">
				<div class="eight columns item">
					<?php get_template_part('content','item' );?>
				</div>
				<div class="seven columns  offset-by-one short-excerpt">
					<?php the_field('short_blurb');?>
				</div>
			</div>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
	</div>
</div>