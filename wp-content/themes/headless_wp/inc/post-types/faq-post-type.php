<?php
/**
 * Register the faq post type.
 */
add_action('init', 'registerFaqPostType');

function registerFaqPostType() {
	$labels = [
		'name'               => _x('FAQs', 'post type general name', 'cia-landlords'),
		'singular_name'      => _x('FAQ', 'post type singular name', 'cia-landlords'),
		'menu_name'          => _x('FAQs', 'admin menu', 'cia-landlords'),
		'name_admin_bar'     => _x('FAQ', 'add new on admin bar', 'cia-landlords'),
		'add_new'            => _x('Add New', 'order', 'cia-landlords'),
		'add_new_item'       => __('Add New FAQ', 'cia-landlords'),
		'new_item'           => __('New FAQ', 'cia-landlords'),
		'edit_item'          => __('Edit FAQ', 'cia-landlords'),
		'view_item'          => __('View FAQ', 'cia-landlords'),
		'all_items'          => __('All FAQs', 'cia-landlords'),
		'search_items'       => __('Search FAQs', 'cia-landlords'),
		'parent_item_colon'  => __('Parent FAQs:', 'cia-landlords'),
		'not_found'          => __('No FAQs found.', 'cia-landlords'),
		'not_found_in_trash' => __('No FAQs found in Trash.', 'cia-landlords')
    ];

	register_post_type('faq', [
        'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => false,
		'rewrite'             => ['slug' => 'faqs'],
		'capability_type'     => 'post',
		'has_archive'         => true,
		'hierarchical'        => false,
		'menu_position'       => null,
		'supports'            => ['title', 'thumbnail'],
		'menu_icon'			  => 'dashicons-networking',
		'show_in_graphql'	  => true,
		'graphql_single_name' => 'faq',
      	'graphql_plural_name' => 'faqs',
    ]);
}

/**
 * Register the faq category taxonomy.
 */
add_action('init', 'registerFaqCategoryTaxonomy');

function registerFaqCategoryTaxonomy() {
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
		'rewrite'               => ['slug' => 'faq-category'],
		'show_in_graphql' => true,
		'graphql_single_name' => 'faqCategory',
      	'graphql_plural_name' => 'faqCategories',
	];

	register_taxonomy('faq_category', 'faq', $args);
}
