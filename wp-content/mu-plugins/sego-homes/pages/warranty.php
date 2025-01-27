<?php

add_action('init', 'warranty');

function warranty()
{
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_62e7dc1739c31',
			'title' => 'Warranty',
			'fields' => array(
				array(
					'key' => 'field_62e7e259974c2',
					'label' => 'Content Area',
					'name' => 'content_area',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'delay' => 0,
					'acfe_wysiwyg_height' => 200,
					'acfe_wysiwyg_max_height' => '',
					'acfe_wysiwyg_valid_elements' => '',
					'acfe_wysiwyg_custom_style' => '',
					'acfe_wysiwyg_disable_wp_style' => 0,
					'acfe_wysiwyg_autoresize' => 0,
					'acfe_wysiwyg_disable_resize' => 0,
					'acfe_wysiwyg_remove_path' => 0,
					'acfe_wysiwyg_menubar' => 0,
					'acfe_wysiwyg_transparent' => 0,
					'acfe_wysiwyg_merge_toolbar' => 0,
					'acfe_wysiwyg_custom_toolbar' => 0,
					'acfe_field_group_condition' => 0,
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'page-warranty.blade.php',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'acf_after_title',
			'style' => 'default',
			'label_placement' => 'left',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'author',
				1 => 'block_editor',
				2 => 'categories',
				3 => 'comments',
				4 => 'the_content',
				5 => 'discussion',
				6 => 'excerpt',
				7 => 'featured_image',
				8 => 'format',
			),
			'active' => true,
			'description' => '',
			'show_in_rest' => 1,
			'acfe_autosync' => '',
			'acfe_form' => 0,
			'acfe_display_title' => '',
			'acfe_meta' => '',
			'acfe_note' => '',
		));

	endif;
}