<?php
/**
 * @package eight
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-articles'); ?>>
	<header>
		<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		<h6><?php the_author();?>&mdash;<?php the_time('F j, Y'); ?></h6>
	</header>

	<main class="content">
		<?php the_content();?>
	</main>

	
</article><!-- #post-## -->
