<?php
/**
 * Register custom GraphQL handlers
 */
add_action('graphql_register_types', function () {
    /**
     * Pages
     */
    // register_graphql_field('Post', 'uri', [
    //     'type' => 'String',
    //     'description' => 'WordPress Page Template',
    //     'resolve' => function ($page) {
    //         error_log($page->uri);
    //         return $page->uri;
    //     },
    // ]);
});

/** 
 * Invalidate Cache
*/
add_filter('acf/save_post', function () {
	error_log('post to frontend here');
	wp_remote_post($_ENV['FRONTEND_URL'] . '/invalidate-cache');
});
