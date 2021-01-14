<?php
/**
 * Custom post types
 */
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/image-sizes.php';
require get_template_directory() . '/inc/admin.php';
require get_template_directory() . '/inc/graphql.php';

/**
 * Custom theme setup
 */
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');

    // register_nav_menu('header_menu', 'Header Menu');
});

/**
 * Complete remove comments from site
 */
add_action('admin_init', function () {
    $postTypes = get_post_types();

    foreach ($postTypes as $postType) {
        if (post_type_supports($postType, 'comments')) {
            remove_post_type_support($postType,'comments');
            remove_post_type_support($postType,'trackbacks');
        }
    }
});
add_action('admin_menu', function () {
    remove_menu_page( 'edit-comments.php' );
});
add_action('wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
});

/**
 * Enqueue admin styles
 */
add_action('admin_enqueue_scripts', function () {
	wp_enqueue_style('admin-style', get_stylesheet_directory_uri() . '/admin.css', [], null);
});

/**
 * Custom rewrite for news posts
 */
add_action('generate_rewrite_rules', function ($wpRewrite) {
    $new_rules = [
        'news/(.+?)/?$' => 'index.php?post_type=post&name=' . $wpRewrite->preg_index(1),
    ];

    $wpRewrite->rules = $new_rules + $wpRewrite->rules;
}); 

add_filter('post_link', function ($postLink, $id = 0){
    $post = get_post($id);

    if (is_object($post) && $post->post_type == 'post') {
        return home_url('/news/'. $post->post_name.'/');
    }

    return $postLink;
}, 1, 3);

/**
 * Allow SVG Uploads
 */
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
