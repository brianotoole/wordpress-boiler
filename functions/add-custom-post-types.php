<?php
// Register Custom Post Type Team Member
// Post Type Key: teammember
function create_teammember_cpt() {

  $labels = array(
    'name' => __( 'Team Members', 'Post Type General Name', 'sparxoodev' ),
    'singular_name' => __( 'Team Member', 'Post Type Singular Name', 'sparxoodev' ),
    'menu_name' => __( 'Team Members', 'sparxoodev' ),
    'name_admin_bar' => __( 'Team Member', 'sparxoodev' ),
    'archives' => __( 'Team Member Archives', 'sparxoodev' ),
    'attributes' => __( 'Team Member Attributes', 'sparxoodev' ),
    'parent_item_colon' => __( 'Parent Team Member:', 'sparxoodev' ),
    'all_items' => __( 'All Team Members', 'sparxoodev' ),
    'add_new_item' => __( 'Add New Team Member', 'sparxoodev' ),
    'add_new' => __( 'Add New', 'sparxoodev' ),
    'new_item' => __( 'New Team Member', 'sparxoodev' ),
    'edit_item' => __( 'Edit Team Member', 'sparxoodev' ),
    'update_item' => __( 'Update Team Member', 'sparxoodev' ),
    'view_item' => __( 'View Team Member', 'sparxoodev' ),
    'view_items' => __( 'View Team Members', 'sparxoodev' ),
    'search_items' => __( 'Search Team Member', 'sparxoodev' ),
    'not_found' => __( 'Not found', 'sparxoodev' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'sparxoodev' ),
    'featured_image' => __( 'Featured Image', 'sparxoodev' ),
    'set_featured_image' => __( 'Set featured image', 'sparxoodev' ),
    'remove_featured_image' => __( 'Remove featured image', 'sparxoodev' ),
    'use_featured_image' => __( 'Use as featured image', 'sparxoodev' ),
    'insert_into_item' => __( 'Insert into Team Member', 'sparxoodev' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'sparxoodev' ),
    'items_list' => __( 'Team Members list', 'sparxoodev' ),
    'items_list_navigation' => __( 'Team Members list navigation', 'sparxoodev' ),
    'filter_items_list' => __( 'Filter Team Members list', 'sparxoodev' ),
  );
  $args = array(
    'label' => __( 'Team Member', 'sparxoodev' ),
    'description' => __( 'Employees of Solana Empowered', 'sparxoodev' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-id',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields', ),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
  );
  register_post_type( 'teammember', $args );
}
add_action( 'init', 'create_teammember_cpt', 0 );


// Register Custom Post Type Resource
// Post Type Key: resource
function create_resource_cpt() {

	$labels = array(
		'name' => __( 'Resources', 'Post Type General Name', 'sparxoodev' ),
		'singular_name' => __( 'Resource', 'Post Type Singular Name', 'sparxoodev' ),
		'menu_name' => __( 'Resources', 'sparxoodev' ),
		'name_admin_bar' => __( 'Resource', 'sparxoodev' ),
		'archives' => __( 'Resource Archives', 'sparxoodev' ),
		'attributes' => __( 'Resource Attributes', 'sparxoodev' ),
		'parent_item_colon' => __( 'Parent Resource:', 'sparxoodev' ),
		'all_items' => __( 'All Resources', 'sparxoodev' ),
		'add_new_item' => __( 'Add New Resource', 'sparxoodev' ),
		'add_new' => __( 'Add New', 'sparxoodev' ),
		'new_item' => __( 'New Resource', 'sparxoodev' ),
		'edit_item' => __( 'Edit Resource', 'sparxoodev' ),
		'update_item' => __( 'Update Resource', 'sparxoodev' ),
		'view_item' => __( 'View Resource', 'sparxoodev' ),
		'view_items' => __( 'View Resources', 'sparxoodev' ),
		'search_items' => __( 'Search Resource', 'sparxoodev' ),
		'not_found' => __( 'Not found', 'sparxoodev' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sparxoodev' ),
		'featured_image' => __( 'Featured Image', 'sparxoodev' ),
		'set_featured_image' => __( 'Set featured image', 'sparxoodev' ),
		'remove_featured_image' => __( 'Remove featured image', 'sparxoodev' ),
		'use_featured_image' => __( 'Use as featured image', 'sparxoodev' ),
		'insert_into_item' => __( 'Insert into Resource', 'sparxoodev' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Resource', 'sparxoodev' ),
		'items_list' => __( 'Resources list', 'sparxoodev' ),
		'items_list_navigation' => __( 'Resources list navigation', 'sparxoodev' ),
		'filter_items_list' => __( 'Filter Resources list', 'sparxoodev' ),
	);
	$args = array(
		'label'               => __( 'Resource', 'sparxoodev' ),
		'description'         => __( 'Guides, news, and other resources', 'sparxoodev' ),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-portfolio',
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'hierarchical'        => true,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
        'taxonomies'          => array( 'category' )
	);
	register_post_type( 'resource', $args );

}
add_action( 'init', 'create_resource_cpt', 0 );
?>
