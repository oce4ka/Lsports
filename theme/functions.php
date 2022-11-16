<?php
/**
 * LSport functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LSport
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/

add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );

register_nav_menus(
    array(
        'header-menu' => esc_html__('header-menu'),
        'footer-menu' => esc_html__('footer-menu'),
    )
);

//add_action('widgets_init', 'LSport_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function LSport_scripts()
{
    wp_enqueue_style('LSport-style', get_stylesheet_uri(), array(), _S_VERSION);

    wp_enqueue_style('style-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/custom.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('style-animation-aos', '//unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION, 'all');

    // https://code.jquery.com/jquery-3.6.1.min.js - ???
    wp_enqueue_script('script-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('script-animation-aos', '//unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/custom.js', array('jquery'), _S_VERSION, true);


    wp_style_add_data('LSport-style', 'rtl', 'replace');
}

add_action('wp_enqueue_scripts', 'LSport_scripts');

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

if ( ! function_exists( 'lsport_activate_classic_widgets' ) ) :
    function lsport_activate_classic_widgets() {
        remove_theme_support( 'widgets-block-editor' );
    }
endif;
add_action( 'after_setup_theme', 'lsport_activate_classic_widgets' );

// acf

acf_add_options_page(array(
    'page_title'  => __('labels'),
    'menu_title'  => __('Section Labels'),
    'redirect'    => false,
));

acf_add_options_page(array(
    'page_title'  => __('contacts'),
    'menu_title'  => __('Section Contacts'),
    'redirect'    => false,
));

// remove <p> from CF7
add_filter('wpcf7_autop_or_not', '__return_false');
