<?php
/*
Plugin Name: Lyra Musicians
Plugin URI: http://lyrabaroque.org
Description: Musician content type for Lyra Baroque
Author: Amy Dalrymple
Version: 1.0
Author URI: http://amydalrymple.org/
*/

add_action( 'init', 'register_cpt_musician' );

function register_cpt_musician() {

    $labels = array( 
        'name' => _x( 'Musicians', 'musician' ),
        'singular_name' => _x( 'Musician', 'musician' ),
        'all_items' => __('All Musicians', 'musician' ),
        'add_new' => _x( 'Add New', 'musician' ),
        'add_new_item' => _x( 'Add New Musician', 'musician' ),
        'edit_item' => _x( 'Edit Musician', 'musician' ),
        'new_item' => _x( 'New Musician', 'musician' ),
        'view_item' => _x( 'View Musician', 'musician' ),
        'search_items' => _x( 'Search Musicians', 'musician' ),
        'not_found' => _x( 'No authors found', 'musician' ),
        'not_found_in_trash' => _x( 'No authors found in Trash', 'musician' ),
        'parent_item_colon' => _x( 'Parent Musician:', 'musician' ),
        'menu_name' => _x( 'Musicians', 'musician' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
// 			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
        'menu_icon' => 'dashicons-groups',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
            'slug' => 'musician', 
            'with_front' => false//,
//             'feeds' => false,
//             'pages' => true
        ),
        'capability_type' => 'post',
        'taxonomies' => array('post_tag')
    );

    register_post_type( 'musician', $args );
}

// Add/remove permalinks when deactivating/reactivating plugin
function lyra_authors_activate() {
	add_action( 'init', 'flush_rewrite_rules', 999 );
}
register_activation_hook( __FILE__, 'lyra_authors_activate' );

function lyra_authors_deactivate() {
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'lyra_authors_deactivate' );