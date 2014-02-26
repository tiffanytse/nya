<?php

// Add the new menu
register_nav_menus( array(
    'primary' => __( 'Top Menu (Header)', 'tto' ),
    'social' => __( 'Social Menu (Header)', 'tto'),
    'footer' => __( 'Footer Menu', 'tto'),
) );

// Add Widgetized Footer
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Footer', 'twentytwelve' ),
		'id' => 'footer',
		'description' => __( 'Appears on all pages, just before the footer. Contains featured items.', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

// Add custom js in footer

function load_scripts_footer() {
	wp_enqueue_script('waypoints', get_stylesheet_directory_uri() . '/js/waypoints.min.js', array( 'jquery' ));
	wp_enqueue_script('waypoints-sticky', get_stylesheet_directory_uri() . '/js/waypoints-sticky.min.js', array( 'waypoints' ));
	wp_enqueue_script('toc', get_stylesheet_directory_uri() . '/js/table-of-contents.jquery.js', array( 'jquery' ));
  wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
  
}

add_action( 'wp_footer', 'load_scripts_footer' );



//Add custom login stylesheet
function custom_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login.css" />';
}
  add_action('login_head', 'custom_login_css');
  
  
  
  
  
  
  
  
  
  
  