<?php
function asw_customize_register( $wp_customize ) {

    // Create our panels
    
    $wp_customize->add_panel( 'theme', array(
        'priority'       => 1,
        'title'          => 'Theme Customizations',
    ) );

    $wp_customize->add_panel( 'homepage', array(
        'priority'       => 1,
        'title'          => 'Homepage Sections',
    ) );
            
    // Create our sections
    
    $wp_customize->add_section( 'defaults' , array(
        'title'             => 'Defaults',
        'description'       => 'Theme Defaults and Fallbacks',
        'panel'             => 'theme',
    ) );
    
    $wp_customize->add_section( 'homepage-cta' , array(
        'title'             => 'CTA Button',
        'panel'             => 'homepage',
    ) );
    
    $wp_customize->add_section( 'homepage-services' , array(
        'title'             => 'Homepage Services',
        'panel'             => 'homepage',
    ) );

            
    // Defaults ----------------------------------------------


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

    /* Homepage CTA Button ----------------------------- */

    $wp_customize->add_setting( 'homepage_cta_line_1' );
    $wp_customize->add_control( 'homepage_cta_line_1', array(
        'label'      => 'Line 1',
        'section'    => 'homepage-cta',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'homepage_cta_line_2' );
    $wp_customize->add_control( 'homepage_cta_line_2', array(
        'label'      => 'Line 2',
        'section'    => 'homepage-cta',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'homepage_cta_line_3' );
    $wp_customize->add_control( 'homepage_cta_line_3', array(
        'label'      => 'Line 3',
        'section'    => 'homepage-cta',
        'type'       => 'text',
    ) );

    /* Homepage Services ----------------------------- */

    $wp_customize->add_setting( 'homepage_service_1' );
    $wp_customize->add_control( 'homepage_service_1', array(
        'label'      => 'Homepage Service #1',
        'section'    => 'homepage-services',
        'type'       => 'dropdown-pages',
    ) );

    $wp_customize->add_setting( 'homepage_service_1_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_service_1_image', array(
        'label'      => 'Service #1 Image',
        'section'    => 'homepage-services',
        'type'       => 'image'
    ) ) );

    $wp_customize->add_setting( 'homepage_service_2' );
    $wp_customize->add_control( 'homepage_service_2', array(
        'label'      => 'Homepage Service #2',
        'section'    => 'homepage-services',
        'type'       => 'dropdown-pages',
    ) );

    $wp_customize->add_setting( 'homepage_service_2_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_service_2_image', array(
        'label'      => 'Service #2 Image',
        'section'    => 'homepage-services',
        'type'       => 'image'
    ) ) );

    $wp_customize->add_setting( 'homepage_service_3' );
    $wp_customize->add_control( 'homepage_service_3', array(
        'label'      => 'Homepage Service #3',
        'section'    => 'homepage-services',
        'type'       => 'dropdown-pages',
    ) );

    $wp_customize->add_setting( 'homepage_service_3_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_service_3_image', array(
        'label'      => 'Service #3 Image',
        'section'    => 'homepage-services',
        'type'       => 'image'
    ) ) );

    

    }
    add_action( 'customize_register', 'asw_customize_register' );