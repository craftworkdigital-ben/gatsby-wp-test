<?php
/**
 * Register the Example post type
 */
add_action('init', 'registerExamplePostType');

function registerExamplePostType() {
	$labels = [
		'name'               => _x('Examples', 'post type general name', '{{TEXT_DOMAIN}}'),
		'singular_name'      => _x('Example', 'post type singular name', '{{TEXT_DOMAIN}}'),
		'menu_name'          => _x('Examples', 'admin menu', '{{TEXT_DOMAIN}}'),
		'name_admin_bar'     => _x('Example', 'add new on admin bar', '{{TEXT_DOMAIN}}'),
		'add_new'            => _x('Add New', 'order', '{{TEXT_DOMAIN}}'),
		'add_new_item'       => __('Add New Example', '{{TEXT_DOMAIN}}'),
		'new_item'           => __('New Example', '{{TEXT_DOMAIN}}'),
		'edit_item'          => __('Edit Example', '{{TEXT_DOMAIN}}'),
		'view_item'          => __('View Example', '{{TEXT_DOMAIN}}'),
		'all_items'          => __('All Examples', '{{TEXT_DOMAIN}}'),
		'search_items'       => __('Search Examples', '{{TEXT_DOMAIN}}'),
		'parent_item_colon'  => __('Parent Examples:', '{{TEXT_DOMAIN}}'),
		'not_found'          => __('No Examples found.', '{{TEXT_DOMAIN}}'),
		'not_found_in_trash' => __('No Examples found in Trash.', '{{TEXT_DOMAIN}}')
    ];

	register_post_type('Example', [
        'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => false,
		'rewrite'             => ['slug' => 'example'],
		'capability_type'     => 'post',
		'has_archive'         => true,
		'hierarchical'        => false,
		'menu_position'       => null,
		'supports'            => ['title', 'thumbnail', 'editor', 'excerpt'],
		'menu_icon'			  => 'dashicons-networking',
		'show_in_graphql'	  => true,
		'graphql_single_name' => 'example',
      	'graphql_plural_name' => 'examples',
    ]);
}
