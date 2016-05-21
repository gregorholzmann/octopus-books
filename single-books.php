<?php 
/*
This is the template for handling custom post type: issues
*/
$product_ID = get_field('estore_id');
get_header();
?>
<div class="primaryContent">
	<div class="row single-catalog-entry">
		<div class="book-details seven columns">
			<header class="row book-details-header">
			<h2><?php the_title();?></h2>
			<h3><?php the_field('the_author');?></h3>
			</header>
			<div class="eight columns book-thumbnail">
				<img src="<?php the_field('large_thumbnail');?>" class="scale-with-grid">
			</div>
			<div class="buy-specs eight columns">
				<div class="measurements">
					<h6 class="price">$<?php echo 
eStore_show_product_details($product_ID,"price"); ?></h6>
					<h6 class="available"><?php echo 
eStore_get_remaining_copies_counter($product_ID); ?> available</h6>
					<h6 class="format"><?php the_field('the_format');?></h6>
					<h6 class="isbn">isbn: <?php the_field('the_isbn');?></h6>
					<h6 class="date"><?php $date = DateTime::createFromFormat('Ymd', get_field('publication_date'));
						echo $date->format('m/Y');?></h6>
					<h6 class="page-number"><?php the_field('page_number'); ?> pages</h6>
				</div>
				<div class="buttons">
					<?php //echo get_button_code_for_product($product_ID); ?>
					<?php //echo print_eStore_buy_now_button($product_ID); ?> 
					<?php echo do_shortcode("[wp_eStore_add_to_cart id=$product_ID]"); ?>
				</div>
			</div>	
			<br class="clear">
			<div class="bio">
				<h6><?php the_field('the_author');?></h6>
				<?php the_field('authors_bio');?>
			
			</div>
		</div>
		<div class="eight columns offset-by-one praise-excerpt">
		
		<?php echo eStore_shopping_cart(); ?>

			<?php if(get_field('praise')) {
				
				echo '<h4>praise for <em>';
				echo the_title();
				echo '</em></h4>';
				echo '<div class="praise">' . get_field('praise') . '</div>';
			}
			?>


			<?php if(get_field('the_excerpt')) {
				
				echo '<h4>excerpt from <em>';
				echo the_title();
				echo '</em></h4>';
				echo '<div class="excerpt-wrapper"><div class="excerpt">' . get_field('the_excerpt') . '</div></div>';
			}?>

			

		</div>
	</div>
</div> <!-- END PRIMARY CONTENT -->

<?php get_footer();?>