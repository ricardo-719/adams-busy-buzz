<?php
/**
* Breadcrumb options
*
* @package Theme Palace
* @subpackage Kids Education
* @since Kids Education 0.1
*/

$wp_customize->add_section( 'kids_education_breadcrumb', array(
	'title'             => esc_html__( 'Breadcrumb','kids-education' ),
	'description'       => esc_html__( 'Breadcrumb section options.', 'kids-education' ),
	'panel'             => 'kids_education_theme_options_panel'
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'kids_education_theme_options[breadcrumb_enable]', array(
	'sanitize_callback'	=> 'kids_education_sanitize_checkbox',
	'default'          	=> $options['breadcrumb_enable']
) );

$wp_customize->add_control( 'kids_education_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Breadcrumb', 'kids-education' ),
	'section'          	=> 'kids_education_breadcrumb',
	'type'             	=> 'checkbox',
) );

