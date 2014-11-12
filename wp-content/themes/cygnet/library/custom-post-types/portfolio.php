<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
  flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_portfolio() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio', 'bonestheme' ),
        'singular_name' => __( 'Portfolio Item', 'bonestheme' ),
        'all_items' => __( 'All Portfolio Items', 'bonestheme' ),
        'add_new' => __( 'Add New', 'bonestheme' ),
        'add_new_item' => __( 'Add New Portfolio Item', 'bonestheme' ),
        'edit' => __( 'Edit', 'bonestheme' ),
        'edit_item' => __( 'Edit Portfolio Items', 'bonestheme' ),
        'new_item' => __( 'New Portfolio Item', 'bonestheme' ),
        'view_item' => __( 'View Portfolio Item', 'bonestheme' ),
        'search_items' => __( 'Search Portfolio Items', 'bonestheme' ),
        'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
        'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
        'parent_item_colon' => ''
      ),
      'description' => __( 'This is the portfolio custom post type', 'bonestheme' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'rewrite' => array(
        'slug' => 'portfolio',
        'with_front' => false
      ),
      'has_archive' => 'portfolio',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
        'title',
        'author',
        'thumbnail'
      )
    )
  );

}

  // adding the function to the Wordpress init
  add_action( 'init', 'custom_post_portfolio');

?>
