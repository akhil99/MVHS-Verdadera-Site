<?php
/**
 * Verdadera Theme Customizer.
 *
 * @package Verdadera
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function verdadera_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

        
  // Input type: Color
    $wp_customize->add_setting( 'header_bgcolor', array(
        'default'        => '#336699',
        'sanitize_callback'    => 'sanitize_hex_color',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_bgcolor', array(
        'label'   => __( 'Header Background Color' ),
        'section' => 'colors',
    ) ) );
    
    // Input type: Color
    $wp_customize->add_setting( 'header_titlecolor', array(
        'default'        => '#F5F5F5',
        'sanitize_callback'    => 'sanitize_hex_color',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_titlecolor', array(
        'label'   => __( 'Header Title Color' ),
        'section' => 'colors',
    ) ) );
    
    // Input type: Color
    $wp_customize->add_setting( 'header_navcolor', array(
        'default'        => '#F5F5F5',
        'sanitize_callback'    => 'sanitize_hex_color',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_navcolor', array(
        'label'   => __( 'Header Navigation Color' ),
        'section' => 'colors',
    ) ) );
    
    // Input type: Color
    $wp_customize->add_setting( 'header_navcolorhover', array(
        'default'        => '#D4D4D4',
        'sanitize_callback'    => 'sanitize_hex_color',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_navcolorhover', array(
        'label'   => __( 'Header Navigation Hover Color' ),
        'section' => 'colors',
    ) ) );
    
    // Input type: Color
    $wp_customize->add_setting( 'footer_bgcolor', array(
        'default'        => '#D1C4E9',
        'sanitize_callback'    => 'sanitize_hex_color',
        'sanitize_js_callback' => 'maybe_hash_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_bgcolor', array(
        'label'   => __( 'Footer Background Color' ),
        'section' => 'colors',
    ) ) );
    
}
add_action( 'customize_register', 'verdadera_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function verdadera_customize_preview_js() {
	wp_enqueue_script( 'verdadera_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'verdadera_customize_preview_js' );
