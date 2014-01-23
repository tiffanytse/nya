<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<div id="footer-feature" class="footer col four-col" role="complementary">
			<?php dynamic_sidebar( 'footer' ); ?>
		</div><!-- #footer-feature -->
	<?php endif; ?>
	
	<footer id="colophon" role="contentinfo">
    <!-- Footer Navigation -->
    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'fallback_cb' => false ) ); ?>
    <!-- Footer navigation close -->
    
		<div class="site-info">
      <p class="copyright">Copyright &copy; <?php echo date( 'Y' ) ?> Northern Youth Abroad</p>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>
</html>