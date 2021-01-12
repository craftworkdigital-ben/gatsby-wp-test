<?php
/**
 * Options pages.
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' 	=> 'CIA Landlords Settings',
        'menu_title' 	=> 'CIA Landlords',
        'menu_slug' 	=> 'cia',
        'capability' 	=> 'edit_posts',
        'redirect' 	    => false,
        'position'      => 25.2049,
        'show_in_graphql' => true,
    ]);
}