<?php

add_action('init', 'healthy_green_smart');

function healthy_green_smart()
{
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_6348700e92b94',
			'title' => 'Healthy, Green, Smart',
			'fields' => array(
				array(
					'key' => 'field_634870145a7c1',
					'label' => 'Intro Content',
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
					'key' => 'field_634870295a7c2',
					'label' => 'Intro Title',
					'name' => 'hgs_intro_title',
					'type' => 'text',
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
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'acfe_field_group_condition' => 0,
				),
				array(
					'key' => 'field_6348705f5a7c3',
					'label' => 'Intro Content',
					'name' => 'hsg_intro_content',
					'type' => 'textarea',
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
					'maxlength' => 417,
					'rows' => 3,
					'new_lines' => 'wpautop',
					'acfe_textarea_code' => 0,
					'acfe_field_group_condition' => 0,
				),
                array(
                    'key' => 'field_6499b98ec69438943b',
                    'label' => 'Video',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_field_group_condition' => 0,
                    'placement' => 'top',
                    'endpoint' => 0,
                    'no_preference' => 0,
                ),
                array(
                    'key' => 'field_6499b9b0c68saddab',
                    'label' => 'Video URL',
                    'name' => 'bp_video_url',
                    'aria-label' => '',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_field_group_condition' => 0,
                    'default_value' => '',
                    'placeholder' => '',
                ),

				array(
					'key' => 'field_634870b55a7c4',
					'label' => 'Repeater Section',
					'name' => 'hsg_repeater_section',
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
					'max' => 4,
					'layout' => 'block',
					'button_label' => '',
					'acfe_field_group_condition' => 0,
					'sub_fields' => array(
						array(
							'key' => 'field_634870f15a7c5',
							'label' => 'Section Title',
							'name' => 'hsg_section_title',
							'type' => 'text',
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
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'acfe_field_group_condition' => 0,
						),
						array(
							'key' => 'field_634871075a7c6',
							'label' => 'Section Description',
							'name' => 'hsg_section_description',
							'type' => 'textarea',
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
							'maxlength' => 641,
							'rows' => 8,
							'new_lines' => 'wpautop',
							'acfe_textarea_code' => 0,
							'acfe_field_group_condition' => 0,
						),
						array(
							'key' => 'field_634871385a7c7',
							'label' => 'Section Image',
							'name' => 'hsg_section_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'uploader' => '',
							'acfe_thumbnail' => 0,
							'return_format' => 'array',
							'preview_size' => 'medium',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'acfe_field_group_condition' => 0,
							'library' => 'all',
						),
					),
				),

                array(
                    'key' => 'field_6499be482ed48',
                    'label' => 'Ready for the Future',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_field_group_condition' => 0,
                    'placement' => 'left',
                    'endpoint' => 0,
                    'no_preference' => 0,
                ),
                array(
                    'key' => 'field_6499be6d2ed49',
                    'label' => 'Ready for the Future Options',
                    'name' => 'ready_for_the_future_options',
                    'aria-label' => '',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_field_group_condition' => 0,
                    'acfe_repeater_stylised_button' => 0,
                    'layout' => 'block',
                    'pagination' => 0,
                    'min' => 0,
                    'max' => 0,
                    'collapsed' => '',
                    'button_label' => 'Add Row',
                    'rows_per_page' => 20,
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6499be862ed4a',
                            'label' => 'Title',
                            'name' => 'title',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_field_group_condition' => 0,
                            'default_value' => '',
                            'maxlength' => 50,
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'parent_repeater' => 'field_6499be6d2ed49',
                        ),
                        array(
                            'key' => 'field_6499be982ed4b',
                            'label' => 'Description',
                            'name' => 'description',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_field_group_condition' => 0,
                            'default_value' => '',
                            'maxlength' => 50,
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'parent_repeater' => 'field_6499be6d2ed49',
                        ),
                    ),
                ),

			),
			'location' => array(
				array(
					array(
						'param' => 'post_template',
						'operator' => '==',
						'value' => 'page-healthy-smart-green.blade.php',
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