<?php 

/*
================================================
 Include scripts
================================================
*/

function awesome_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_script('customsscript', get_template_directory_uri().'/js/awesome.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '5.0.2', true);
    wp_enqueue_script('bootstrapbundle', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');


/*
================================================
 Activate menus
================================================
*/
function awesome_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('after_setup_theme', 'awesome_theme_setup');

/*
================================================
 Theme support function 
================================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));


/*
================================================
 Replace jQuery default version to 4.0.0 ver.
================================================
*/
function replace_jquery_version() {
    if (!is_admin()) {
        // Remove default WordPress jQuery
        wp_deregister_script('jquery');

        // Register custom jQuery 4.0.0 (Use CDN)
        wp_register_script(
            'jquery',
            'https://code.jquery.com/jquery-4.0.0.min.js',
            array(),
            '4.0.0',
            true
        );

        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'replace_jquery_version');