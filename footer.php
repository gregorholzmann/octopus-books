<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package eight
 */
?>


	</div><!--END CONTAINER -->
<footer id="footer">

<div class="container">
	<div class="one-third columns mission-statement">
		<?php the_field('footer_mission_statement', 'option');?>
	</div>

	<div class="two-thirds columns">
		<div class="six columns offset-by-three social-menu">
			<p>
			  Contact us <a href="mailto:octopusbooks@gmail.com">here</a>.
			</p>
			<p>Like our page on <a href="https://www.facebook.com/pages/Octopus-Books/1411946542388591" target="_blank">Facebook</a></p>
			<p>Follow us on <a href="https://twitter.com/Octopus__Books" target="_blank">Twitter</a></p>
		</div>

		<!-- <div class="six columns footer-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div> -->
	</div>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
