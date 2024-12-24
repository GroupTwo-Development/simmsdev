<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


add_filter( 'pre_get_posts', function($query){
    if( $query->is_main_query() && !is_admin()  && is_post_type_archive( 'communities' ) ) {
        $query->set( 'posts_per_page', 6 );
        $query->set('post_status', 'publish');
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
    return $query;
} );



add_filter( 'pre_get_posts', function($query){
    if( $query->is_main_query() && !is_admin()  && is_post_type_archive( 'testimonials' ) ) {
        $query->set( 'posts_per_page', 3 );
        $query->set('post_status', 'publish');
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
    return $query;
} );

add_filter('get_the_archive_title', function ($title) {
    // Remove prefixes like "Category: ", "Tag: ", "Author: ", etc.
    return preg_replace('/^[^:]+: /', '', $title);
});


add_filter( 'pre_get_posts', function($query){
    if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'plans' ) ) {
        $query->set( 'posts_per_page', 6 );
        $query->set( 'meta_key', 'plan_name' ); 
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'order', 'ASC' );
        $query->set('post_status', 'publish');
        $query->set('meta_query', array(
            array(
                'key' => 'generic_plan',
                'value' => '1',
            ),
        ));
    }
    return $query;
} );


add_filter( 'pre_get_posts', function($query){
    if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'homes' ) ) {
        $query->set( 'posts_per_page', 6 );
        $query->set( 'meta_key', 'home_name' ); 
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'order', 'ASC' );
    }
    return $query;
} );