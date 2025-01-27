<?php

add_action('init', 'virtualTour');

function virtualTour()
{
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_62d073de80fef',
			'title' => 'Virtual Tours',
			'fields' => array(
				array(
					'key' => 'field_62d073e4cd0f6',
					'label' => 'Virtual Tour Content Area',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'left',
					'endpoint' => 0,
					'no_preference' => 0,
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_62d07416cd0f8',
					'label' => 'Virtual Tours',
					'name' => 'virtual_tours',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_repeater_stylised_button' => 0,
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'block',
					'button_label' => '',
					'acfe_field_group_condition' => 0,
					'sub_fields' => array(
						array(
							'key' => 'field_62d07431cd0f9',
							'label' => 'Virtual Tour URL',
							'name' => 'virtual_tour_url',
							'type' => 'url',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'acfe_field_group_condition' => 0,
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'page-virtual-tours.blade.php',
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
			'show_in_rest' => 0,
			'acfe_autosync' => '',
			'acfe_form' => 0,
			'acfe_display_title' => '',
			'acfe_meta' => '',
			'acfe_note' => '',
		));

	endif;
}