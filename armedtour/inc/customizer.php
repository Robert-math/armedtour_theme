<?php
/**
 * Armedtour Theme Customizer
 *
 * @package Armedtour
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function armedtour_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	//Footer customization 
	$wp_customize->add_section('footer',array(
		'title'=>'Footer',
		'description'=>'Footer customization section',
		'panel'=>''
	));

	$wp_customize->add_setting('footer_text',array(
		'default' => __('WE CARE,<span>WE CAN</span>')
	));
	$wp_customize->add_control('footer_text',array(
		'label'=>'Main Text',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('footer_url1',array(
		'default' => __('#')
	));
	$wp_customize->add_control('footer_url1',array(
		'label'=>'Facebook url',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('footer_url2',array(
		'default' => __('#')
	));
	$wp_customize->add_control('footer_url2',array(
		'label'=>'Instagram url',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('footer_url3',array(
		'default' => __('#')
	));
	$wp_customize->add_control('footer_url3',array(
		'label'=>'Twitter url',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('footer_url4',array(
		'default' => __('#')
	));
	$wp_customize->add_control('footer_url4',array(
		'label'=>'Whats up url',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('phone_number',array(
		'default' => __('#')
	));
	$wp_customize->add_control('phone_number',array(
		'label'=>'Phone number',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('phone_title',array(
		'default' => __('#')
	));
	$wp_customize->add_control('phone_title',array(
		'label'=>'Phone block title',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('phone_text',array(
		'default' => __('#')
	));
	$wp_customize->add_control('phone_text',array(
		'label'=>'Phone block text',
		'section'=>'footer',
		'priority'=>1,
		'type'=>'textarea'
	));

	$wp_customize->add_setting('copyright',array(
		'default' => __('#')
	));
	$wp_customize->add_control('copyright',array(
		'label'=>'Copyright',
		'section'=>'footer',
		'priority'=>1
	));

	$wp_customize->add_setting('gotop_button',array(
		'default' => __('#')
	));
	$wp_customize->add_control('gotop_button',array(
		'label'=>'Press to go Top button text',
		'section'=>'footer',
		'priority'=>1
	));

	

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'armedtour_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'armedtour_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'armedtour_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function armedtour_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function armedtour_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function armedtour_customize_preview_js() {
	wp_enqueue_script( 'armedtour-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'armedtour_customize_preview_js' );
