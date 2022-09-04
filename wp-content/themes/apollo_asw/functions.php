<?php

/**
 * @package WordPress
 * @subpackage asw_template
 */

// Thumbnails
add_theme_support('post-thumbnails');



//menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'nav1' => __( 'Main Navigation' )
		)
	);
}
 

function asw_widgets_init() {

	/*
	register_sidebar( array(
		'name'          => 'Footer Line 1',
		'id'            => 'footer_line_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="heading">',
		'after_title'   => '</div>'
	) );
	*/

}
add_action( 'widgets_init', 'asw_widgets_init' );

function mytheme_setup() {
    // Add support for Block Styles
	add_theme_support( 'wp-block-styles' );
	// Add Color Palettes
	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'Black' ),
			'slug' => 'black',
			'color' => '#000',
		),
		array(
			'name' => __( 'White' ),
			'slug' => 'white',
			'color' => '#FFF',
		),
		array(
			'name' => __( 'Cyan' ),
			'slug' => 'cyan',
			'color' => '#00D1FF',
		),
		array(
			'name' => __( 'Gold' ),
			'slug' => 'gold',
			'color' => '#FFD600',
		)
	) );
	add_theme_support( 'disable-custom-colors' );
	add_theme_support('disable-custom-font-sizes');
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
}

// Include Extras
include_once( get_template_directory() . '/customizations/theme-customizations.php' );
include_once( get_template_directory() . '/customizations/page-seo.php' );
include_once( get_template_directory() . '/customizations/testimonials.php' );
include_once( get_template_directory() . '/customizations/testimonial-fields.php' );