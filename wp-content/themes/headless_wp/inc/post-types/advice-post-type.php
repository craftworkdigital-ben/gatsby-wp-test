<?php
/**
 * Register the advice post type.
 */
add_action('init', 'registerAdvicePostType');

function registerAdvicePostType() {
	$labels = [
		'name'               => _x('Advice Articles', 'post type general name', 'cia-landlords'),
		'singular_name'      => _x('Advice Article', 'post type singular name', 'cia-landlords'),
		'menu_name'          => _x('Advice Articles', 'admin menu', 'cia-landlords'),
		'name_admin_bar'     => _x('Advice Article', 'add new on admin bar', 'cia-landlords'),
		'add_new'            => _x('Add New', 'order', 'cia-landlords'),
		'add_new_item'       => __('Add New Advice Article', 'cia-landlords'),
		'new_item'           => __('New Advice Article', 'cia-landlords'),
		'edit_item'          => __('Edit Advice Article', 'cia-landlords'),
		'view_item'          => __('View Advice Article', 'cia-landlords'),
		'all_items'          => __('All Advice Articles', 'cia-landlords'),
		'search_items'       => __('Search Advice Articles', 'cia-landlords'),
		'parent_item_colon'  => __('Parent Advice Articles:', 'cia-landlords'),
		'not_found'          => __('No Advice Articles found.', 'cia-landlords'),
		'not_found_in_trash' => __('No Advice Articles found in Trash.', 'cia-landlords')
    ];

	register_post_type('advice', [
        'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => false,
		'rewrite'             => ['slug' => 'advice'],
		'capability_type'     => 'post',
		'has_archive'         => true,
		'hierarchical'        => false,
		'menu_position'       => null,
		'supports'            => ['title', 'thumbnail', 'editor', 'excerpt'],
		'menu_icon'			  => 'dashicons-networking',
		'show_in_graphql'	  => true,
		'graphql_single_name' => 'advice',
      	'graphql_plural_name' => 'advices',
    ]);
}

/**
 * Register the rating taxonomy.
 */
add_action('init', 'registerRatingTaxonomy');

function registerRatingTaxonomy() {
	$labels = [
		'name'                       => _x('Ratings', 'taxonomy general name', 'cia-landlords'),
		'singular_name'              => _x('Rating', 'taxonomy singular name', 'cia-landlords'),
		'search_items'               => __('Search Ratings', 'cia-landlords'),
		'popular_items'              => __('Popular Ratings', 'cia-landlords'),
		'all_items'                  => __('All Ratings', 'cia-landlords'),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __('Edit Rating', 'cia-landlords'),
		'update_item'                => __('Update Rating', 'cia-landlords'),
		'add_new_item'               => __('Add New Rating', 'cia-landlords'),
		'new_item_name'              => __('New Rating Name', 'cia-landlords'),
		'separate_items_with_commas' => __('Separate ratings with commas', 'cia-landlords'),
		'add_or_remove_items'        => __('Add or remove ratings', 'cia-landlords'),
		'choose_from_most_used'      => __('Choose from the most used ratings', 'cia-landlords'),
		'not_found'                  => __('No ratings found.', 'cia-landlords'),
		'menu_name'                  => __('Ratings', 'cia-landlords'),
	];

	$args = [
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => ['slug' => 'rating'],
	];

	register_taxonomy('rating', 'game', $args);
}

/**
 * Register the advice category taxonomy.
 */
add_action('init', 'registerAdviceCategoryTaxonomy');

function registerAdviceCategoryTaxonomy() {
	$labels = [
		'name'                       => _x('Categories', 'taxonomy general name', 'cia-landlords'),
		'singular_name'              => _x('Category', 'taxonomy singular name', 'cia-landlords'),
		'search_items'               => __('Search Categories', 'cia-landlords'),
		'popular_items'              => __('Popular Categories', 'cia-landlords'),
		'all_items'                  => __('All Categories', 'cia-landlords'),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __('Edit Category', 'cia-landlords'),
		'update_item'                => __('Update Category', 'cia-landlords'),
		'add_new_item'               => __('Add New Category', 'cia-landlords'),
		'new_item_name'              => __('New Category Name', 'cia-landlords'),
		'separate_items_with_commas' => __('Separate categories with commas', 'cia-landlords'),
		'add_or_remove_items'        => __('Add or remove categories', 'cia-landlords'),
		'choose_from_most_used'      => __('Choose from the most used categories', 'cia-landlords'),
		'not_found'                  => __('No categories found.', 'cia-landlords'),
		'menu_name'                  => __('Categories', 'cia-landlords'),
	];

	$args = [
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => ['slug' => 'advice-category'],
		'show_in_graphql' => true,
		'graphql_single_name' => 'adviceCategory',
      	'graphql_plural_name' => 'adviceCategories',
	];

	register_taxonomy('advice_category', 'advice', $args);
}
