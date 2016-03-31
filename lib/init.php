<?php
if (! function_exists ( 'starter_setup' )) :
function starter_setup() {
	load_theme_textdomain( 'starter', get_template_directory() . '/languages' );
	register_nav_menus ( array (
			'primary_navigation' => __( 'Primary Navigation', 'starter' ),
			'footer_navigation' => __( 'Footer Navigation', 'starter' )
	) );

	add_theme_support ( 'custom-header' );
	add_theme_support ( 'post-thumbnails' );
}
endif;
add_action ( 'after_setup_theme', 'starter_setup' );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
if (! function_exists ( 'starter_widgets_init' )) :
function starter_widgets_init() {
	register_sidebar ( array (
			'name' => __ ( 'Primary Sidebar', 'starter' ),
			'id' => 'sidebar-1',
			'description' => __ ( 'Main sidebar that appears on the right.', 'starter' ),
			'before_widget' => '<div id="%1$s" class="panel panel-default"><div class="panel-heading">',
			'after_widget' => '</div></div>',
			'before_title' => '<h3 class="panel-title">',
			'after_title' => '</h3></div><div class="panel-body">'
	) );
}
endif;
add_action ( 'widgets_init', 'starter_widgets_init' );