<?php
function asw_customize_register( $wp_customize ) {

    // Create our panels
    
    $wp_customize->add_panel( 'theme', array(
        'priority'       => 1,
        'title'          => 'Theme Customizations',
    ) );
            
    // Create our sections
    
    $wp_customize->add_section( 'defaults' , array(
        'title'             => 'Defaults',
        'description'       => 'Theme Defaults and Fallbacks',
        'panel'             => 'theme',
    ) );

            
    // Defaults ----------------------------------------------

    /*
    $wp_customize->add_setting( 'logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label'      => 'Logo',
        'section'    => 'defaults',
        'type'       => 'image',
        'Description' => 'If this is empty, a text logo will be displayed.'
    ) ) );
    */

    $wp_customize->add_setting( 'phone');
    $wp_customize->add_control( 'phone', array(
        'label'      => 'Phone Number',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'location');
    $wp_customize->add_control( 'location', array(
        'label'      => 'Location Blurb',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );
    
    $wp_customize->add_setting( 'wordmark');
    $wp_customize->add_control( 'wordmark', array(
        'label'      => 'Wordmark',
        'section'    => 'defaults',
        'type'       => 'textarea',
    ) );

    }
    add_action( 'customize_register', 'asw_customize_register' );