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
		<div class="wrapper no-padding">
    	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
    		<div id="footer-feature" class="footer col four-col" role="complementary">
    			<?php dynamic_sidebar( 'footer' ); ?>
    		</div><!-- #footer-feature -->
    	<?php endif; ?>
    </div> <!-- wrapper -->
    
	
	<div class="black-wrapper sponsor-slider">
    <div class="wrapper">
      <h2 class="epsilon">Our Dedicated Partners</h2>
    <?php 
        echo do_shortcode("[metaslider id=106]"); 
    ?>
    </div>
  </div>

	<div class="black-wrapper">
	<footer id="colophon" role="contentinfo">
    <div class="vcard">
      <div class="org">Northern Youth Abroad</div>
      <div class="adr">
        <div class="street-address">311 Richmond Road, Unit 308</div>
        <span class="locality">Ottawa</span>
        , 
        <span class="region">ON</span>
        <span class="postal-code">K1Z 6X3</span>
     </div>

     <div class="tel">613-232-9989</div>
    </div>

    <!-- Footer Navigation -->
    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'fallback_cb' => false ) ); ?>
    <!-- Footer navigation close -->
    
		<div class="site-info">
      <p class="milli">Copyright &copy; <?php echo date( 'Y' ) ?> Northern Youth Abroad</p>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
  </div>
</div><!-- #page -->



<?php wp_footer(); ?>

</body>
</html>