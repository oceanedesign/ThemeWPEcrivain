<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists(get_template_directory() . '/cmb2/init.php' ) ) {
	require_once get_template_directory() . '/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/CMB2/init.php' ) ) {
	require_once get_template_directory() . '/CMB2/init.php';
}

/*===================================================================
 x                                                                  x
 x                     		Ecrivain			                    x
 x                                                                  x
===================================================================*/

add_action( 'cmb2_admin_init', 'ecrivain_metabox' );
function ecrivain_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_ecrivain_';

	$cmb_ecrivain = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Ecrivain Informations', 'starter' ),
		'object_types'  => array( 'ecrivain')
	) );
	
	$cmb_ecrivain->add_field( array(
	    'name'     => 'siecle',
	    'desc'     => 'Siècle de l\'auteur',
	    'id'       => $prefix . 'siecle',
	    'taxonomy' => 'siecle', // Enter Taxonomy Slug
	    'type'     => 'taxonomy_radio',
	    // Optional:
	    'options' => array(
	        'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
	    ),
	) );
}