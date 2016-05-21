<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package eight
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function eight_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'eight_jetpack_setup' );
