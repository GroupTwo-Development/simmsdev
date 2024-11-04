<?php 
namespace App;

use WP_REST_Request;

add_action('rest_api_init', function() {
    register_rest_route('wp/v2', '/search-footer-content', [
        'methods' => 'GET',
        'callback' => __NAMESPACE__ . '\\get_footer_content', // Specify the namespace for callback
    ]);
});

function get_footer_content(WP_REST_Request $request) {
    $area = $request->get_param('area');

    // Fetch the term for the selected area in 'market_areas' taxonomy
    $term = get_term_by('slug', $area, 'area');
    
    if (!$term) {
        return new \WP_Error('no_term', 'Market area not found', ['status' => 404]);
    }

    // Retrieve ACF fields associated with the term
    $acf_image = get_field('feature_image', $term);
    $acf_description = $term->description;

    return [
        'title' => $term->name,
        'description' => $acf_description ?: 'No description available',
        'image_url' => $acf_image ? wp_get_attachment_image_url($acf_image, 'full') : ''
    ];
}