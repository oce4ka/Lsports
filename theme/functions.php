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
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'header-menu' => esc_html__('header-menu'),
        'footer-menu' => esc_html__('footer-menu'),
        'footer-links-menu' => esc_html__('footer-links-menu'),
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
    wp_enqueue_script('lottie-player', '//unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', '', _S_VERSION, true);
    wp_enqueue_script('script-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('script-animation-aos', '//unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/custom.js', array('jquery'), _S_VERSION, true);


    //wp_style_add_data('LSport-style', 'rtl', 'replace');
}

add_action('wp_enqueue_scripts', 'LSport_scripts');

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false', 100);

// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');

if (!function_exists('lsport_activate_classic_widgets')) :
    function lsport_activate_classic_widgets()
    {
        remove_theme_support('widgets-block-editor');
    }
endif;
add_action('after_setup_theme', 'lsport_activate_classic_widgets');

// acf

acf_add_options_page(array(
    'page_title' => __('labels'),
    'menu_title' => __('Section Labels'),
    'redirect' => false,
));

acf_add_options_page(array(
    'page_title' => __('contacts'),
    'menu_title' => __('Section Contacts'),
    'redirect' => false,
));

// remove <p> from CF7
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Move image inside <p> tag above the <p> tag while preserving any link around image.
 * Can be prevented by adding any attribute or whitespace to <p> tag, e.g. <p class="yolo"> or even <p >
 */
function remove_p_around_img($content)
{
    $contentWithFixedPTags = preg_replace_callback('/<p>((?:.(?!p>))*?)(<a[^>]*>)?\s*(<img[^>]+>)(<\/a>)?(.*?)<\/p>/is', function ($matches) {
        $image = $matches[2] . $matches[3] . $matches[4];
        $content = trim($matches[1] . $matches[5]);
        if ($content) {
            $content = '<p>' . $content . '</p>';
        }
        return $image . $content;
    }, $content);

    // On large strings, this regular expression fails to execute, returning NULL
    return is_null($contentWithFixedPTags) ? $content : $contentWithFixedPTags;
}

add_filter('the_content', 'remove_p_around_img');

// load more button on News page
function news_load_more()
{
    switch ($_POST['category']) {
        case 'article':
            $cat_name = 'article';
            break;
        case 'blog-post':
            $cat_name = 'blog-post';
            break;
        case 'press-release':
            $cat_name = 'press-release';
            break;
        case 'update':
            $cat_name = 'update';
            break;
        default:
            $cat_name = 'news, article, blog-post, press-release, update';
    }

    $ajaxposts = new WP_Query([
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $cat_name,
        'posts_per_page' => 6, // how many news posts should be loaded
        'orderby' => 'date',
        'order' => 'DESC',
        'offset' => (($_POST['paged'] - 1) * 6) + 1, // what is the number of the post in the beginning od scope
    ]);

    $posts_received = count($ajaxposts->posts);

    //var_dump($ajaxposts);
    if ($ajaxposts->have_posts()) {
        ob_start();
        while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
            echo get_template_part('news-card');
        endwhile;
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $response = '';
    }

    $result = [
        'count' => $posts_received, // how many news posts should be loaded
        'html' => $output,
    ];

    echo json_encode($result);
    exit;
}

add_action('wp_ajax_news_load_more', 'news_load_more');
add_action('wp_ajax_nopriv_news_load_more', 'news_load_more');

// Past events functionality https://weichie.com/blog/load-more-posts-ajax-wordpress/
/*
// load more past events button on Events page
function events_past_load_more()
{
    $today = date("Ymd");
    $ajaxposts = new WP_Query([
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'events',
        'posts_per_page' => 4,
        'meta_query' => array( // past
            array(
                'key' => 'date_start',
                'value' => $today,
                'compare' => '<',
            ),
        ),
        'orderby' => 'meta_value',
        'meta_key' => 'date_start',
        'order' => 'DESC',
        'paged' => $_POST['paged'],
    ]);

    $max_pages = $ajaxposts->max_num_pages;

    //var_dump($ajaxposts);
    if ($ajaxposts->have_posts()) {
        ob_start();
        while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
            echo get_template_part('event-past-card');
        endwhile;
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $response = '';
    }

    $result = [
        'max' => $max_pages,
        'html' => $output,
    ];

    echo json_encode($result);
    exit;
}

add_action('wp_ajax_events_past_load_more', 'events_past_load_more');
add_action('wp_ajax_nopriv_events_past_load_more', 'events_past_load_more');
*/
