<?php
/*
 * The Template Part for displaying posts
 *
 * @package eight
 */
?>

<div class="item-wrapper">
	<img src="<?php the_field('small_thumbnail');?>" class="scale-with-grid">
	<a href="<?php the_permalink();?>" class="overlay">
		<div class="circle">
		</div>
		<div class="description">
			<span class="title"><?php the_title();?></span>
			<span class="author"><?php the_field('the_author');?></span>
		</div>
	</a>
</div>
