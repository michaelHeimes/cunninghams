<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
        
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
    
    // Localize Home Page Community Numbers 
    wp_localize_script('site-js', 'site_js', array(  

		'col_1_number' => get_field( 'itc_column_1_number', ($post->ID) ), 
		'col_2_number' => get_field( 'itc_column_2_number', ($post->ID) ), 
		'col_3_number' => get_field( 'itc_column_3_number', ($post->ID) ), 
	)); 
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' ); 

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);




