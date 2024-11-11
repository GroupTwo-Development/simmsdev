<?php 
    namespace App;
    // app/helpers.php
    if (!function_exists('format_phone_number')) {
        function format_phone_number($phone_number) {
            // Remove non-numeric characters
            $phone_number = preg_replace('/[^0-9]/', '', $phone_number);

            // Ensure the phone number is exactly 10 digits long
            if (strlen($phone_number) == 10) {
                return substr($phone_number, 0, 3) . '-' . substr($phone_number, 3, 3) . '-' . substr($phone_number, 6);
            } else {
                return $phone_number;
            }
        }
    }


    if (!function_exists('clean_phone_number')) {
        function clean_phone_number($phone_number) {
            // Remove all non-numeric characters (dashes, spaces, parentheses, etc.)
            return preg_replace('/[^0-9]/', '', $phone_number);
        }
    }



/**
 * Get image HTML by image ID with alt text.
 *
 * @param int $image_id The attachment ID of the image.
 * @param string $size The size of the image (e.g., 'full', 'medium', etc.).
 * @param array $attributes Additional attributes for the image tag (optional).
 * @return string The HTML for the image.
 */

// Setup google map API key
add_action('acf/init', function() {
    $builders_hub_api_key = get_option('builders_hub_api_key');
    acf_update_setting('google_api_key', $builders_hub_api_key);
});

function get_image_with_alt($image_id, $size = 'full', $attributes = [])
{
    if (! $image_id) {
        return '';
    }

    // Get the alt text
    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

    // Merge the alt text into attributes
    $attributes = array_merge($attributes, ['alt' => esc_attr($alt_text)]);

    // Return the image HTML
    return wp_get_attachment_image($image_id, $size, false, $attributes);
}


if (!function_exists('format_currency')) {
    function format_currency($amount)
    {
        return '$' . number_format($amount, 0, '.', ',');
    }
}


// Replace 'my_sort_facet' with the name of your sort facet
add_filter( 'facetwp_facet_html', function( $output, $params ) {
 
    if ( 'my_sort_facet' == $params['facet']['name'] ) {
      $output .= '<div class="facetwp-sort-radio">';
      $output .= '<div class="facetwp-radio sort-radio" data-value="" data-type="sort">' . facetwp_i18n('Any') . '</div>'; // Optional "Any" option
      foreach ( $params['facet']['sort_options'] as $key => $atts ) {
        $output .= '<div class="facetwp-radio sort-radio" data-value="' . $atts['name'] . '" data-type="sort">' . facetwp_i18n($atts['label']) . '</div>';
      }
      $output .= '</div>';
    }
   
    return $output;
  }, 10, 2 );


  add_action( 'wp_footer', function() {
    ?>
<link href="/wp-content/plugins/facetwp/assets/vendor/fSelect/fSelect.css" rel="stylesheet" type="text/css">
<script src="/wp-content/plugins/facetwp/assets/vendor/fSelect/fSelect.js"></script>
<script>
document.addEventListener('facetwp-loaded', function() {
    fUtil('.facetwp-type-sort select').fSelect({
        showSearch: false
    });
});
</script>
<?php
  }, 100 );



  // Replace 'my_sort_facet' with the name of your sort facet
 
add_action( 'wp_footer', function() {
    ?>
<script>
(function($) {

    var sortfacet = 'my_sort_facet';

    $(document).on('click', '.sort-radio', function() {
        var val = $(this).attr('data-value');
        FWP.facets[sortfacet] = [val];
        FWP.toggleOverlay('on');
        FWP.fetchData();
        FWP.setHash();
    });

    $(document).on('facetwp-loaded', function() {
        if ('undefined' !== typeof FWP.facets[sortfacet]) {
            $('.sort-radio').filter('[data-value="' + FWP.facets[sortfacet][0] + '"]').addClass('checked');
        }
    });

})(jQuery);
</script>

<style>
/* Replace 'my_sort_facet' with the name of your sort facet */
.facetwp-facet-my_sort_facet select {
    display: none;
}
</style>
<?php
  }, 100 );