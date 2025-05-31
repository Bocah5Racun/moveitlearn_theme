<?php

// Move It Learn styles
function moveitlearn_theme_styles() {
    $theme_version = wp_get_theme()->get('Version'); // grab the theme version
    wp_enqueue_style( 'main', get_stylesheet_uri(), array(), $theme_version, 'all' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/includes/styles/header.css', array(), $theme_version, 'all' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/includes/styles/footer.css', array(), $theme_version, 'all' );

    if( is_front_page() ) wp_enqueue_style( 'front-page', get_template_directory_uri() . '/includes/styles/front-page.css', array(), $theme_version, 'all' );
    if( is_singular() || is_category() ) wp_enqueue_style( 'singular-page', get_template_directory_uri() . '/includes/styles/singular.css', array(), $theme_version, 'all' );
}

// Move It Learn menus
function moveitlearn_theme_menus() {
    register_nav_menus(
        array(
            'topbar-menu'       => __( 'Topbar Menu' ),
            'moveit-menu'       => __( 'Proyek Move It Menu' ),
            'aidran-menu'       => __( 'AIDRAN Menu' ),
            'sumber-daya-menu'  => __( 'Sumber Daya Menu' ),
        )
    );
}

// new taxonomies
function moveitlearn_theme_taxonomies() {

    $labels = array(
      'name'              => 'Image Locations',
      'singular_name'     => 'Location',
      'plural_name'       => 'Locations',
      'menu_name'         => 'Location',
    );

    register_taxonomy( 'image_location', array( 'attachment' ), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => true,
      ) );
    
}

// // get moodle courses
function moveitlearn_set_default_options() {
    if (get_option('moodle_api_token') === false) {
        update_option('moodle_api_token', 'a334bffb1704c9bda260efab58a15459');
    }
}

function get_moodle_courses() {
    $moodle_url = 'https://moveitlearn.com/belajar/webservice/rest/server.php';
    $token = get_option( 'moodle_api_token' );
    $function = 'core_course_get_courses_by_field';

    $params = array(
        'wstoken' => $token,
        'wsfunction' => $function,
        'moodlewsrestformat' => 'json',
        'field' => 'category',
        'value' => 1,
    );  

    $response = wp_remote_get($moodle_url . '?' . http_build_query($params));

    if (is_wp_error($response)) {
        return 'API request failed: ' . $response->get_error_message();
    }

    $result = json_decode(wp_remote_retrieve_body( $response ), true );

    return isset($result['courses']) ? $result['courses'] : [];
}

function get_moodle_url() {
    return "https://moveitlearn.com/belajar/";
}

// Add actions
add_action( 'wp_enqueue_scripts', 'moveitlearn_theme_styles' );
add_action( 'init', 'moveitlearn_theme_taxonomies' );
add_action( 'init', 'moveitlearn_theme_menus' );
add_action( 'after_switch_theme', 'moveitlearn_set_default_options' );


// Misc. functionality
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );