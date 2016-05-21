<?php
/**
 * The Sidebar listing latest updates from our partners: Bad Blood, 
 * Poor Claudia, & Octopus Magazine at the bottom of the catalog page
 * @package eight
 */
?>
<div class="updates row">
		<div class="one-third columns">
			<?php 	/**
				 * The WordPress Query class.
				 * @link http://codex.wordpress.org/Function_Reference/WP_Query
				 *
				 */
				$args = array(
					'category_name'    => 'octopus-books',
					'order'               => 'DESC',
					'orderby'             => 'date',
					'offset'			=> '3',
					'posts_per_page'         => 3		);
			$latestBadBlood = new WP_Query( $args );

			if ( $latestBadBlood->have_posts() ) : while ( $latestBadBlood->have_posts() ) : $latestBadBlood->the_post(); ?>
			<article class="update">
				<header class="update-header">
					<h4><?php the_title();?></h4>
				</header>
				<?php the_excerpt();?>
			</article>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<h4>No posts found</h4>
			<?php endif; ?>
			<?php wp_reset_query();?>
			
		</div>
		<div class="one-third columns">
			<?php 	/**
				 * The WordPress Query class.
				 * @link http://codex.wordpress.org/Function_Reference/WP_Query
				 *
				 */
				$args = array(
					'category_name'    => 'octopus-magazine',
					'order'               => 'DESC',
					'orderby'             => 'date',
					'posts_per_page'         => 0
				);
			
			$latestOctopusMagazine = new WP_Query( $args );

			if ( $latestOctopusMagazine->have_posts() ) : while ( $latestOctopusMagazine->have_posts() ) : $latestOctopusMagazine->the_post(); ?>
			<article class="update">
				<header class="update-header">
					<h4><?php the_title();?></h4>
				</header>
				<?php the_excerpt();?>
			</article>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<h4>No posts found</h4>
			<?php endif; ?>
			<?php wp_reset_query();?>
		</div>
		<div class="one-third columns">
			<?php 	/**
				 * The WordPress Query class.
				 * @link http://codex.wordpress.org/Function_Reference/WP_Query
				 *
				 */
				$args = array(
					'category_name'    => 'bad-blood',
					'order'               => 'DESC',
					'orderby'             => 'date',
					'posts_per_page'         => 0
				);
			
			$latestPoorClaudia = new WP_Query( $args );

			if ( $latestPoorClaudia->have_posts() ) : while ( $latestPoorClaudia->have_posts() ) : $latestPoorClaudia->the_post(); ?>
			<article class="update">
				<header class="update-header">
					<h4><?php the_title();?></h4>
				</header>
				<?php the_excerpt();?>
			</article>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<h4>No posts found</h4>
			<?php endif; ?>
			<?php wp_reset_query();?>
		</div>
	</div>

			</div>
