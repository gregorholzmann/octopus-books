<?php
/**
 * The Sidebar listing latest updates from our partners: Bad Blood, 
 * Poor Claudia, & Octopus Magazine
 * @package eight
 */
?>

<div class="sidebar six columns">
	<div class="widget">
	
	<?php 	/**
		 * The WordPress Query class.
		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
		 *
		 */
		$args = array(
			'category_name'    => 'octopus-books',
			'order'               => 'DESC',
			'orderby'             => 'date',
			'posts_per_page'         => 3,
		);
	$latestMag = new WP_Query( $args );

	if ( $latestMag->have_posts() ) : while ( $latestMag->have_posts() ) : $latestMag->the_post(); 
	
	get_template_part('content', 'article' );
	
	endwhile; 
	
	endif; ?>

<header class="section-header">
			<div class="moreNews">
				<a href="/category/octopus-books" >MORE OCTOPUS NEWS</a>
			</div>
		</header>

	
	<?php wp_reset_query();?>

	
	
	<?php 	/**
		 * The WordPress Query class.
		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
		 *
		 */
		$args = array(
			'category_name'    => 'octopus-magazine',
			'order'               => 'DESC',
			'orderby'             => 'date',
			'posts_per_page'         => 0,
		);
	
	$latestMag = new WP_Query( $args );

	if ( $latestMag->have_posts() ) : while ( $latestMag->have_posts() ) : $latestMag->the_post(); 
	
	get_template_part('content', 'article' );
	
	endwhile; 

	endif; ?>
	
<?php wp_reset_query();?>
	

	<?php 	/**
		 * The WordPress Query class.
		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
		 *
		 */
		$args = array(
			'category_name'    => 'bad-blood',
			'order'               => 'DESC',
			'orderby'             => 'date',
			'posts_per_page'         =>0 ,
		);
	
	$latestMag = new WP_Query( $args );

	if ( $latestMag->have_posts() ) : while ( $latestMag->have_posts() ) : $latestMag->the_post(); 
	
	get_template_part('content', 'article' );
	
	endwhile; 
	
	endif; ?>
	<?php wp_reset_query();?>

<div class="twitterWidget">
	<a class="twitter-timeline" href="https://twitter.com/Octopus__Books" data-link-color="#30c187" data-chrome="noheader nofooter transparent" data-widget-id="491422414765441026">Tweets by @Octopus__Books</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>



</div>
	
</div>