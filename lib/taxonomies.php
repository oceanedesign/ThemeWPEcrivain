<?php
// Register Custom Taxonomy
function langue_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Langues', 'Taxonomy General Name', 'starter' ),
		'singular_name'              => _x( 'Langue', 'Taxonomy Singular Name', 'starter' ),
		'menu_name'                  => __( 'Taxonomy', 'starter' ),
		'all_items'                  => __( 'All Langues', 'starter' ),
		'parent_item'                => __( 'Parent Langue', 'starter' ),
		'parent_item_colon'          => __( 'Parent Langue:', 'starter' ),
		'new_item_name'              => __( 'New Langue Name', 'starter' ),
		'add_new_item'               => __( 'Add New Langue', 'starter' ),
		'edit_item'                  => __( 'Edit Langue', 'starter' ),
		'update_item'                => __( 'Update Langue', 'starter' ),
		'view_item'                  => __( 'View Langue', 'starter' ),
		'separate_items_with_commas' => __( 'Separate Langues with commas', 'starter' ),
		'add_or_remove_items'        => __( 'Add or remove Langues', 'starter' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'starter' ),
		'popular_items'              => __( 'Popular langues', 'starter' ),
		'search_items'               => __( 'Search Langues', 'starter' ),
		'not_found'                  => __( 'Not Found', 'starter' ),
		'no_terms'                   => __( 'No Langues', 'starter' ),
		'items_list'                 => __( 'Langues list', 'starter' ),
		'items_list_navigation'      => __( 'Langues list navigation', 'starter' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'langue', array( 'post', 'ecrivain', 'livre' ), $args );

}
add_action( 'init', 'langue_taxonomy', 0 );

// Register Custom Taxonomy
function annee_sortie_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Années de sortie', 'Taxonomy General Name', 'starter' ),
		'singular_name'              => _x( 'Année de sortie', 'Taxonomy Singular Name', 'starter' ),
		'menu_name'                  => __( 'Taxonomy', 'starter' ),
		'all_items'                  => __( 'All Années de sortie', 'starter' ),
		'parent_item'                => __( 'Parent Année de sortie', 'starter' ),
		'parent_item_colon'          => __( 'Parent Année de sortie:', 'starter' ),
		'new_item_name'              => __( 'New Année de sortie Name', 'starter' ),
		'add_new_item'               => __( 'Add New Année de sortie', 'starter' ),
		'edit_item'                  => __( 'Edit Année de sortie', 'starter' ),
		'update_item'                => __( 'Update Année de sortie', 'starter' ),
		'view_item'                  => __( 'View Année de sortie', 'starter' ),
		'separate_items_with_commas' => __( 'Separate Années de sortie with commas', 'starter' ),
		'add_or_remove_items'        => __( 'Add or remove Années de sortie', 'starter' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'starter' ),
		'popular_items'              => __( 'Popular Années de sortie', 'starter' ),
		'search_items'               => __( 'Search Années de sortie', 'starter' ),
		'not_found'                  => __( 'Not Found', 'starter' ),
		'no_terms'                   => __( 'No Années de sortie', 'starter' ),
		'items_list'                 => __( 'Années de sortie list', 'starter' ),
		'items_list_navigation'      => __( 'Années de sortie list navigation', 'starter' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'annee_sortie', array( 'post', 'livre' ), $args );

}
add_action( 'init', 'annee_sortie_taxonomy', 0 );