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



add_filter( 'facetwp_map_init_args', function ( $args ) {
    //    $args['init']['mapTypeId'] = 'roadmap'; // valid options are: roadmap, satellite, hybrid, terrain
        $args['init']['fullscreenControl'] = false; // full screen icon
        $args['init']['zoomControlOptions']['position'] = 1;
        $args['icon'] = @asset('images/google-map-marker.png');
        if ( isset( $args['config']['spiderfy'] ) ) {
    
            // 'Unspiderfy' when clicking a 'spiderfied' marker
            $args['config']['spiderfy']['keepSpiderfied'] = false; // (FacetWP's) default: true
    
            // Do not 'unspiderfy' when clicking an empty spot on the map
            $args['config']['spiderfy']['ignoreMapClick'] = true; // default: false
    
            // Set the pixel radius within which a marker is considered to be overlapping a clicked marker.
            $args['config']['spiderfy']['nearbyDistance'] = 30; // default: 20
    
            // Switch from circular to spiral above 11 markers instead of above 8
            $args['config']['spiderfy']['circleSpiralSwitchover'] = 11; // default: 8
    
            // Set spider leg length when circular
            $args['config']['spiderfy']['circleFootSeparation'] = 40; // default: 23
    
            // Set spider leg length and other settings when spiral
            $args['config']['spiderfy']['spiralFootSeparation'] = 40; // default: 26
            $args['config']['spiderfy']['spiralLengthStart']    = 15; // default: 11
            $args['config']['spiderfy']['spiralLengthFactor']   = 6; // default: 4
    
            // Set spider leg thickness
            $args['config']['spiderfy']['legWeight'] = 3; // default: 1.5
    
        }
        if ( isset( $args['config']['cluster'] ) ) {
            $args['config']['cluster']['zoomOnClick'] = true; // default: false
        }
    
        $args['init']['styles'] = json_decode( '
        [
        {
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "lightness": "27"
                }
            ]
        },
        {
            "featureType": "landscape.natural.terrain",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "lightness": "23"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "lightness": "25"
                }
            ]
        },
        {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "saturation": "0"
                },
                {
                    "lightness": "25"
                }
            ]
        },
        {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "lightness": "50"
                }
            ]
        },
        {
            "featureType": "road.highway.controlled_access",
            "elementType": "labels",
            "stylers": [
                {
                    "lightness": "32"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "lightness": "66"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "lightness": "70"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "transit.line",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "transit.station",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "saturation": "-100"
                }
            ]
        }
    ]
        ' );
        return $args;
    });