<?php
/**
 * @package eight
 */
$product_ID = get_field('estore_id');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-articles'); ?>>
	<header>
		<h4><a href="#"><?php the_title();?></a></h4>
	</header>

	<main class="content">
		<?php the_content();?>
	</main>

	<?php echo do_shortcode("[wp_eStore_add_to_cart id=$product_ID]"); ?>


</article><!-- #post-## -->
