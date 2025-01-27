<?php
/**
 * Plugin Name: GroupTwo Builders Hub Core
 * Description: Prevent 3rd party plugin from being loaded before Builders-Hub plugin operations.
 * Author:      Aj Jardiah jr
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

 /**
 * Place ACF JSON in content directory
 */
add_filter('acf/settings/save_json', function ($path) {
    return WP_CONTENT_DIR . '/acf-json';
});
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = WP_CONTENT_DIR . '/acf-json';
    return $paths;
});

 require_once( dirname( __FILE__ ) . '/sego-homes/feed/community.php' );
 require_once( dirname( __FILE__ ) . '/sego-homes/feed/floorplans.php' );
 require_once( dirname( __FILE__ ) . '/sego-homes/feed/homes.php' );