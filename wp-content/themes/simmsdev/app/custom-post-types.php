<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

add_action( 'init', function() {

	register_extended_post_type( 'testimonials', array(
		# Add the post type to the site's main RSS feed:
		'show_in_feed' => true,

		# Use the block editor:
		'show_in_rest' => false,

		'dashboard_glance' => true,

		# Show all posts on the post type archive:
		'archive' => array(
			'nopaging' => true
		),

		# Add some custom columns to the admin screen:
		'admin_cols' => array(
			'published' => array(
				'title'       => 'Published',
				'meta_key'    => 'published_date',
				'date_format' => 'd/m/Y'
			),
		
		),

		), array(

			# Override the base names used for labels:
			'singular' => 'testimonial',
			'plural'   => 'Testimonials',
			'slug'     => 'testimonials',
			'dashicon' => 'dashicons-archive',
			# Add the menu name for the CPT
			'menu_name' => 'Testimonials',
			'supports' => array( 'title', 'excerpt', 'revisions'), 
		)
	);


	register_extended_taxonomy( 'testimonials_type', 'testimonials', array (
		# Show this taxonomy in the 'At a Glance' dashboard widget:
		'dashboard_glance' => true,
		

		# Add a custom column to the admin screen:
		'admin_cols' => array(
			'updated' => array(
				'title'       => 'Updated',
				'meta_key'    => 'updated_date',
				'date_format' => 'd/m/Y'
			),
		),

		), array(
			# Override the base names used for labels:
			'singular' => 'Testimonial Type',
			'plural'   => 'Testimonial Types',
			'slug'     => 'testimonial-types',
			'dashicon' => 'dashicons-tag',
			'menu_name'  => _x( 'Types',  ' menu name'),
           
		) 
	);

} );