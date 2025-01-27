<?php

add_action('init', 'better_future');

function better_future()
{
    add_action( 'acf/include_fields', function() {
        if ( ! function_exists( 'acf_add_local_field_group' ) ) {
            return;
        }

        acf_add_local_field_group( array(
            'key' => 'group_6499be483e119',
            'title' => 'Better Future',
            'fields' => array(
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
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
            'acfe_autosync' => '',
            'acfe_form' => 0,
            'acfe_display_title' => '',
            'acfe_meta' => '',
            'acfe_note' => '',
        ) );
    } );

}