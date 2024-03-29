<?php 

// To add Style Sheet
function css_resourses(){
    wp_enqueue_style('style' , get_stylesheet_rui() );
}
add_action('wp_enqueue_script','css_resourses');


// Logo Code
add_theme_support('custom-logo');
add_theme_support('custom-logo' , array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
));


// Menu Bar
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu_1' => __( 'Product' ),
            'footer-menu_2' => __( 'Services' ),
            'footer-menu_3' => __( 'Company' ),
            'footer-menu_4' => __( 'More' )
        )
    );
}

add_action( 'init', 'wpb_custom_new_menu' );

// Theme Options Using ACF Plugin
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Option',
		'menu_slug'		=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}