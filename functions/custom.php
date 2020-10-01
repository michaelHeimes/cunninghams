<?php
	
/**
 * Enqueue Google fonts.
 */
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans', false ); 
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Options') );
}


// Redirect SIngle REview posts to Reviews Page
add_action( 'template_redirect', 'redirect_cpt_singular_posts' );
    function redirect_cpt_singular_posts() {
      if ( is_singular('review') ) {
        wp_redirect( '/patient-reviews/', 302 );
        exit;
      }
 	}


// Disable Gutenberg

if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
	
} else {
	
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
	
}

// Add Commas to ACF Number Fields
add_filter('acf/format_value/type=number', 'fix_number', 30, 3);
function fix_number($value, $post_id, $field) {
  $value = number_format($value);
  return $value;
}