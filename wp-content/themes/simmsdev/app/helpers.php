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