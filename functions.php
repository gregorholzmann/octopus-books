<?php
/**
 * eight functions and definitions
 *
 * @package eight
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'eight_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function eight_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on eight, use a find and replace
	 * to change 'eight' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'eight', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'eight' ),
		'footer' => __( 'Footer Menu', 'eight' )
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'eight_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // eight_setup
add_action( 'after_setup_theme', 'eight_setup' );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More &#187;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


/**
 * Register widgetized area and update sidebar with default widgets.
 */
function eight_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'eight' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'eight_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function eight_scripts() {
	wp_enqueue_style( 'eight-style', get_stylesheet_uri() );

	wp_enqueue_script( 'eight-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'eight-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eight_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';




/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
 function my_custom_post_books() {

 	$labels = array(
 		'name'                => _x( 'Books', 'post type general name' ),
 		'singular_name'       => _X( 'Book', 'post type singular name' ),
 		'add_new'             => _x( 'Add New Book', 'books' ),
 		'add_new_item'        => __( 'New Book' ),
 		'edit_item'           => __( 'Edit Book' ),
 		'new_item'            => __( 'New Book' ),
 		'view_item'           => __( 'View Book' ),
 		'search_items'        => __( 'Search Books' ),
 		'not_found'           => __( 'No Books found' ),
 		'not_found_in_trash'  => __( 'No Books found in Trash' ),
 		'parent_item_colon'   => __( '' ),
 		'menu_name'           => __( 'Books' ),
 	);

 	$args = array(
 		'labels'        => $labels,
		'description'   => 'Holds our catalog data',
		'public'        => true,
		'menu_position' => 25,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon' => '',
		'has_archive'   => true,
 	);

 	register_post_type( 'books', $args );
 }

add_action( 'init', 'my_custom_post_books' );

function my_custom_post_subscriptions() {

	$labels = array(
		'name'                => _x( 'Subscriptions', 'post type general name' ),
		'singular_name'       => _X( 'Subscription', 'post type singular name' ),
		'add_new'             => _x( 'Add New Subscription', 'subscriptions' ),
		'add_new_item'        => __( 'New Subscription' ),
		'edit_item'           => __( 'Edit Subscription' ),
		'new_item'            => __( 'New Subscription' ),
		'view_item'           => __( 'View Subscription' ),
		'search_items'        => __( 'Search Subscriptions' ),
		'not_found'           => __( 'No Subscriptions found' ),
		'not_found_in_trash'  => __( 'No Subscriptions found in Trash' ),
		'parent_item_colon'   => __( '' ),
		'menu_name'           => __( 'Subscriptions' ),
	);

	$args = array(
		'labels'        => $labels,
	'description'   => 'Holds our catalog data',
	'public'        => true,
	'menu_position' => 25,
	'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	'menu_icon' => '',
	'has_archive'   => true,
	);

	register_post_type( 'subscriptions', $args );
}

add_action( 'init', 'my_custom_post_subscriptions' );

function add_menu_icons_styles(){
?>




<style>
#adminmenu #menu-posts-books div.wp-menu-image:before {
 content: '\f331'!important;
 color:red;
}
#adminmenu #toplevel_page_wp-cart-for-digital-products-wp_eStore1 div.wp-menu-image:before {
content: "\f174"!important;
}
#adminmenu #toplevel_page_edit-post_type-acf div.wp-menu-image:before {
content: "\f175"!important;
}
#adminmenu #toplevel_page_acf-options div.wp-menu-image:before {
content: "\f164"!important;
}


</style>

<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );

function image_tag($html, $id, $alt, $title) {
	return preg_replace(array(
			'/'.str_replace('//','\/\/',get_bloginfo('url')).'/i',
			'/\s+width="\d+"/i',
			'/\s+height="\d+"/i',
			'/alt=""/i'
		),
		array(
			'',
			'',
			'',
			'alt="' . $title . '"'
		),
		$html);
}
add_filter('get_image_tag', 'image_tag', 0, 4);

function image_tag_class($class, $id, $align, $size) {
	return $class = 'border' . ' ' . 'scale-with-grid' . ' ' . 'wp-post-img';
	return $align;
}
add_filter('get_image_tag_class', 'image_tag_class', 0, 4);

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_image_size( 'featured-image', 300, 100, TRUE );
