<?php

require_once get_template_directory() . '/customizer.php';
require_once get_template_directory() . '/filters.php';

// Including Stylesheets and Script Files
function load_scripts() {
    wp_enqueue_script( 'bootstrap-js',  'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ), '4.1.3', true );
    wp_enqueue_script( 'filters-js', get_template_directory_uri() . '/assets/js/filters.js', '1.0', true );
    wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/assets/js/carousel.min.js', '1.0', true );
    wp_enqueue_script( 'dropdown-js', get_template_directory_uri() . '/assets/js/mobile-dropdown.min.js', '1.0', true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', '4.1.3', 'all' );
    wp_enqueue_style( 'form', get_template_directory_uri() . '/assets/css/form.prefixed.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'sidebar', get_template_directory_uri() . '/assets/css/sidebar.prefixed.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/master.prefixed.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.prefixed.css', array(), '1.0', 'all' );


}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


//Main Configuration function
function initial_config() {

    //Registering Our Menus
    register_nav_menus( 
        array( 
            'nav_menu' => __( 'Main Menu', 'schoolroot' ),
            'footer_menu' => __( 'Footer Menu', 'schoolroot' )
        )
    );    

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'image', 'video' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height' => 95,
        'width' => 100
    ) );

    // $textdomain = 'schoolroot';
    // load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
    // load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    // Support for Gutenberg Features
    // add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'initial_config', 0 );

//Add Action Hook For Sidebars
add_action( 'widgets_init', 'setup_sidebars' );

//Registering Our Sidebars
function setup_sidebars() {
    
    register_sidebar(
        array(
            'name' => __( 'Left Sidebar', 'schoolroot' ),
            'id' => 'sidebar-1',
            'description' => __( 'This is the Left Sidebar. You can add your widgets here.', 'schoolroot' ),
            'before_widget' => '
                <section class="testimonial-widget">
            ',
            'after_widget' => '
                </section>
            ',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )

    );

    register_sidebar(
        array(
            'name' => __( 'Right Sidebar', 'schoolroot' ),
            'id' => 'sidebar-2',
            'description' => __( 'This is the Right Sidebar. You can add your widgets here.', 'schoolroot' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )

    );
        
}