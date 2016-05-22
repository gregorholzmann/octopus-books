<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package eight
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type="text/javascript" src="//use.typekit.net/jdu4hiq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link href='https://fonts.googleapis.com/css?family=Karla|Halant' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="fullWidth">
		<div class="container">
		<a href="http://octopusbooks.net">
			<img src="http://www.octopusbooks.net/wp-content/uploads/2014/07/title.png" alt="octopus books">
		</a>
		</div>
	</div>

	<div class="container">
				<header id="header">
					<div class="octopus">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</div>

					<div class="mobileNav">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</div>
				</header>
			</div>
<div class="container">
