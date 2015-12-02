<?php
/*
Plugin Name: Midterm Post Type Plugin
*/

function ht_setup_post_type() {
 
    // Register our "book" custom post type
    register_post_type( 'midterm_item', 
      array(
        'labels' => array(
          'name' => __('miderm item'),
          'singular_name' => __('Midterm')
          ),
       'public' => true,
       'has_archive' => true
      ) 
    );
 
}
// make sure the second argument of this function matches the name of the method above
add_action( 'init', 'ht_setup_post_type' );


// ==================================================================
 

// this will fix any permalink issues that might reult from adding the post type
function ht_install() {
 
    // Trigger our function that registers the custom post type
    ht_setup_post_types();
 
    // Clear the permalinks after the post type has been registered
    flush_rewrite_rules();
 
}
register_activation_hook( __FILE__, 'ht_install' );


// ==================================================================


// Show posts of 'post', 'page' and 'midterm_item' post types on home page
// add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

// function add_my_post_types_to_query( $query ) {
//   if ( is_home() && $query->is_main_query() )
//     $query->set( 'post_type', array( 'post', 'page', 'midterm_item' ) );
//   return $query;
// }