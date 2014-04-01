<?php
/* Create Custom Post Type */
add_action('init', 'gallery_init');
function gallery_init() 
{
  $labels = array(
	'name' => _x( 'Media Gallery', 'transcript' ),
	'singular_name' => _x( 'Multimedia', 'transcript' ),
	'add_new' => _x( 'Add New', 'transcript' ),
	'add_new_item' => _x( 'Add New', 'transcript' ),
	'edit_item' => _x( 'Edit', 'transcript' ),
	'new_item' => _x( 'New', 'transcript' ),
	'view_item' => _x( 'View', 'transcript' ),
	'search_items' => _x( 'Search', 'transcript' ),
	'not_found' => _x( 'Nothing found', 'transcript' ),
	'not_found_in_trash' => _x( 'Nothing found in Trash', 'transcript' ),
	'parent_item_colon' => _x( 'Parent:', 'transcript' ),
	'menu_name' => _x( 'Multimedia', 'transcript' ), 
  );
    
  $args = array(
        'labels' => $labels,
        'hierarchical' => true,
		'menu_icon' => get_bloginfo('template_directory') . '/images/framework/gabfire-icon.png',
        'supports' => array( 'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail', 'custom-fields', 'revisions', 'post-formats' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
  ); 
  register_post_type('gab_gallery',$args);
}

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'gallery_taxonomies', 0 );

//create two taxonomies, genres and writers for the post type "book"
function gallery_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'gallery-cats', 'transcript' ),
    'singular_name' => _x( 'gallery-cat', 'transcript' ),
    'search_items' =>  _x( 'Search', 'transcript' ),
    'all_items' => _x( 'All', 'transcript' ),
    'parent_item' => _x( 'Parent', 'transcript' ),
    'parent_item_colon' => _x( 'Parent:', 'transcript' ),
    'edit_item' => _x( 'Edit', 'transcript' ), 
    'update_item' => _x( 'Update', 'transcript' ),
    'add_new_item' => _x( 'Add New', 'transcript' ),
    'new_item_name' => _x( 'New Name', 'transcript' ),
    'menu_name' => _x( 'Gallery Categories', 'transcript' ),
  ); 	

  register_taxonomy('gallery-cat',array('gab_gallery'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'gallery-cats' ),
  ));

  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'gallery-tags', 'transcript' ),
    'singular_name' => _x( 'gallery-tag', 'transcript'),
    'search_items' =>  _x( 'Search', 'transcript' ),
    'popular_items' => _x( 'Popular', 'transcript' ),
    'all_items' => _x( 'All', 'transcript' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => _x( 'Edit', 'transcript' ), 
    'update_item' => _x( 'Update', 'transcript' ),
    'add_new_item' => _x( 'Add New', 'transcript' ),
    'new_item_name' => _x( 'New', 'transcript' ),
    'separate_items_with_commas' => _x( 'Separate with commas', 'transcript' ),
    'add_or_remove_items' => _x( 'Add or remove', 'transcript' ),
    'choose_from_most_used' => _x( 'Choose from the most used', 'transcript' ),
    'menu_name' => _x( 'Gallery Tags', 'transcript' ),
  ); 

  register_taxonomy('gallery-tag','gab_gallery',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'gallery-tag' ),
  ));
}