<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VGW
 */

?>

	</div><!-- #content -->

	<div id="footer">
		<p class="copyright">All Rights Reserved | Copyright &copy; <?php echo date('o'); ?></p>
		<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		<div class="clearfix"></div>		
	</div>


<?php wp_footer(); ?>

</body>
</html>
