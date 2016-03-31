<?php
// Register Custom Post Type
function custom_ecrivain_type() {

	$labels = array(
		'name'                  => _x( 'Ecrivains', 'Post Type General Name', 'starter' ),
		'singular_name'         => _x( 'Ecrivain', 'Post Type Singular Name', 'starter' ),
		'menu_name'             => __( 'Ecrivain', 'starter' ),
		'name_admin_bar'        => __( 'Ecrivain', 'starter' ),
		'archives'              => __( 'Ecrivain Archives', 'starter' ),
		'parent_item_colon'     => __( 'Parent Item:', 'starter' ),
		'all_items'             => __( 'All Ecrivains', 'starter' ),
		'add_new_item'          => __( 'Add New Ecrivain', 'starter' ),
		'add_new'               => __( 'Add Ecrivain', 'starter' ),
		'new_item'              => __( 'New Ecrivain', 'starter' ),
		'edit_item'             => __( 'Edit Ecrivain', 'starter' ),
		'update_item'           => __( 'Update Ecrivain', 'starter' ),
		'view_item'             => __( 'View Ecrivain', 'starter' ),
		'search_items'          => __( 'Search Ecrivain', 'starter' ),
		'not_found'             => __( 'Not found', 'starter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'starter' ),
		'featured_image'        => __( 'Featured Image', 'starter' ),
		'set_featured_image'    => __( 'Set featured image', 'starter' ),
		'remove_featured_image' => __( 'Remove featured image', 'starter' ),
		'use_featured_image'    => __( 'Use as featured image', 'starter' ),
		'insert_into_item'      => __( 'Insert into écrivain', 'starter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this écrivain', 'starter' ),
		'items_list'            => __( 'Ecrivains list', 'starter' ),
		'items_list_navigation' => __( 'Ecrivains list navigation', 'starter' ),
		'filter_items_list'     => __( 'Filter écrivains list', 'starter' ),
	);
	$args = array(
		'label'                 => __( 'Ecrivain', 'starter' ),
		'description'           => __( 'Ecrivain', 'starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'langue' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ecrivain', $args );

}
add_action( 'init', 'custom_ecrivain_type', 0 );

// Register Custom Post Type
function custom_livre_type() {

	$labels = array(
		'name'                  => _x( 'Livres', 'Post Type General Name', 'starter' ),
		'singular_name'         => _x( 'Livre', 'Post Type Singular Name', 'starter' ),
		'menu_name'             => __( 'Livre', 'starter' ),
		'name_admin_bar'        => __( 'Livre', 'starter' ),
		'archives'              => __( 'Livre Archives', 'starter' ),
		'parent_item_colon'     => __( 'Parent Item:', 'starter' ),
		'all_items'             => __( 'All Livres', 'starter' ),
		'add_new_item'          => __( 'Add New Livre', 'starter' ),
		'add_new'               => __( 'Add Livre', 'starter' ),
		'new_item'              => __( 'New Livre', 'starter' ),
		'edit_item'             => __( 'Edit Livre', 'starter' ),
		'update_item'           => __( 'Update Livre', 'starter' ),
		'view_item'             => __( 'View Livre', 'starter' ),
		'search_items'          => __( 'Search Livre', 'starter' ),
		'not_found'             => __( 'Not found', 'starter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'starter' ),
		'featured_image'        => __( 'Featured Image', 'starter' ),
		'set_featured_image'    => __( 'Set featured image', 'starter' ),
		'remove_featured_image' => __( 'Remove featured image', 'starter' ),
		'use_featured_image'    => __( 'Use as featured image', 'starter' ),
		'insert_into_item'      => __( 'Insert into livre', 'starter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this livre', 'starter' ),
		'items_list'            => __( 'Livres list', 'starter' ),
		'items_list_navigation' => __( 'Livres list navigation', 'starter' ),
		'filter_items_list'     => __( 'Filter livres list', 'starter' ),
	);
	$args = array(
		'label'                 => __( 'Livre', 'starter' ),
		'description'           => __( 'Livre', 'starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats', ),
		'taxonomies'            => array( 'category', 'langue', 'annee_sortie' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'livre', $args );

}
add_action( 'init', 'custom_livre_type', 0 );