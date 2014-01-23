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