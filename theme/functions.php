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
    define('_S_VERSION', '1.8.12');
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
        'lang-menu' => esc_html__('lang-menu'),
    )
);

//add_action('widgets_init', 'LSport_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function LSport_scripts()
{
    wp_enqueue_style('LSport-style', get_stylesheet_uri(), array(), _S_VERSION);

    if (is_page_template('careers.php')) {
        wp_enqueue_style("style-owl-default", get_bloginfo('stylesheet_directory') . "/owlcarousel/owl.theme.default.min.css");
        wp_enqueue_style("style-owl-min", get_bloginfo('stylesheet_directory') . "/owlcarousel/owl.carousel.min.css");
        wp_enqueue_script("my-custom-owl-js", get_template_directory_uri() . "/owlcarousel/owl.carousel.min.js", array("jquery"), "", TRUE);
        wp_enqueue_script('owl-script', get_template_directory_uri() . '/js/owl.js', array('jquery'), _S_VERSION, true);
    }

    wp_enqueue_style('style-slick', get_template_directory_uri() . '/css/slick.css', array(), _S_VERSION, 'all');

    // Main LESS file
    wp_enqueue_style('theme-less-styles', get_template_directory_uri() . '/css/theme-less-styles.css', array(), _S_VERSION, 'all');

    // Additional CSS file (if you cannot work with LESS, add styles here pls)
    wp_enqueue_style('theme-additional-css-styles.css', get_template_directory_uri() . '/css/theme-additional-css-styles.css', array(), _S_VERSION, 'all');

    // styles for event type Event Ice event-item-ice.php
    wp_enqueue_style('style-event-ice', get_template_directory_uri() . '/css/custom-event-ice.css', array(), _S_VERSION, 'all');

    // Mega Menu CSS file
    wp_enqueue_style('style-megamenu', get_template_directory_uri() . '/css/mega-menu.css', array(), _S_VERSION, 'all');

    // Animated headers CSS file
    wp_enqueue_style('style-animation-aos', get_template_directory_uri() . '/css/aos.css', array(), _S_VERSION, 'all');

    wp_enqueue_script('lottie-player', '//unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js', '', _S_VERSION, true);
    wp_enqueue_script('script-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('script-animation-aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), _S_VERSION, true);

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
if (function_exists('acf_add_options_page')) {
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

    acf_add_options_page(array(
        'page_title' => __('megamenu'),
        'menu_title' => __('Mega menu'),
        'redirect' => false,
    ));
}

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


function blogs_load_more()
{

    $ajaxposts = new WP_Query([
        'post_type' => 'blog',
        'post_status' => 'publish',
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

add_action('wp_ajax_blogs_load_more', 'blogs_load_more');
add_action('wp_ajax_nopriv_blogs_load_more', 'blogs_load_more');


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

add_action('wp_ajax_getvideo', 'getvideo');
add_action('wp_ajax_nopriv_getvideo', 'getvideo');


// add blog custom post type
add_action('init', 'create_post_type_blog');
function create_post_type_blog()
{
    register_post_type('blog',
        array(
            'labels' => array(
                'name' => 'Blog',
                'singular_name' => 'Blog',
                'add_new' => 'Add blog',
                'add_new_item' => 'Add new blog',
                'edit' => 'Edit',
                'edit_item' => 'Edit blog',
                'new_item' => 'New blog',
                'view' => 'View',
                'view_item' => 'View blog',
                'search_items' => 'Search blog',
                'not_found' => 'blogs not found',
                'not_found_in_trash' => 'No blogs in cart',
                'parent' => 'Parent blog',
                'menu_name' => 'Blog'
            ),
            'public' => true,
            'menu_position' => 5,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'comments', 'thumbnail', 'custom-fields',),
            'taxonomies' => array('post_tag'),
            'menu_icon' => 'dashicons-media-spreadsheet',
            'has_archive' => true,
            'rewrite' => array('slug' => 'blog'),
        )
    );
}

// add blog categories
// add_action('init', 'blog_category');
function blog_category()
{
    $labels = array(
        'name' => 'Blog categories',
        'singular_name' => 'Blog categories',
        'search_items' => 'Search blog categories',
        'all_items' => 'All blog categories',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Edit category',
        'update_item' => 'Update category',
        'add_new_item' => 'Add new category',
        'new_item_name' => 'Category new name',
        'menu_name' => 'Blog categories',
    );
    $args = array(
        'label' => '',
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => null,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => true,
        'update_count_callback' => '',
        'rewrite' => true,
        //'query_var'             => $taxonomy,
        'capabilities' => array(),
        'meta_box_cb' => null,
        'show_admin_column' => false,
        '_builtin' => false,
        'show_in_quick_edit' => null,
    );
    register_taxonomy('blog_category', array('blog'), $args);
}

/**
 * Polylang customization STRART
 */

function my_pll_language_switcher_args($args)
{
    $args['display_names_as'] = 'slug';  // вместо 'name' ставим 'slug', чтобы отображать короткие коды языков
    return $args;
}

add_filter('pll_the_languages_args', 'my_pll_language_switcher_args', 10, 1);


function polylang_submenu_language_switcher_js()
{
    ?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            // Изменяем пункты выпадающего подменю на полные названия
            document.querySelectorAll('.pll-parent-menu-item .sub-menu .lang-item a').forEach(function (el) {
                var lang = el.textContent;  // У каждого элемента записываем текст ссылки
                switch (lang.toLowerCase()) {
                    case 'en':
                        el.textContent = 'English';
                        break;
                    case 'es':
                        el.textContent = 'Español';
                        break;
                    case 'pt':
                        el.textContent = 'Português';
                        break;
                    case 'ko':
                        el.textContent = '한국어';
                        break;
                    case 'zh':
                        el.textContent = '中文 (中国)';
                        break;
                    // и так далее для других языков
                }
            });

            // Добавляем иконку только к текущему (активному) языку
            var currentLangMenuItem = document.querySelector('.pll-parent-menu-item > a');
            if (currentLangMenuItem) {
                var currentLanguage = currentLangMenuItem.textContent.trim();
            }
        });
    </script>
    <?php
}

add_action('wp_footer', 'polylang_submenu_language_switcher_js');

/**
 * Polylang customization END
 */


/**
 * Решение проблемы Как иметь один и тот же slug для нескольких языков с помощью Polylang
 */


function polylang_slug_unique_slug_in_language($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
{

    // Return slug if it was not changed.
    if ($original_slug === $slug) {
        return $slug;
    }

    global $wpdb;

    // Get language of a post
    $lang = pll_get_post_language($post_ID);
    $options = get_option('polylang');

    // return the slug if Polylang does not return post language or has incompatable redirect setting or is not translated post type.
    if (empty($lang) || 0 === $options['force_lang'] || !pll_is_translated_post_type($post_type)) {
        return $slug;
    }

    // " INNER JOIN $wpdb->term_relationships AS pll_tr ON pll_tr.object_id = ID".
    $join_clause = polylang_slug_model_post_join_clause();
    // " AND pll_tr.term_taxonomy_id IN (" . implode(',', $languages) . ")".
    $where_clause = polylang_slug_model_post_where_clause($lang);

    // Polylang does not translate attachements - skip if it is one.
    // @TODO Recheck this with the Polylang settings
    if ('attachment' == $post_type) {

        // Attachment slugs must be unique across all types.
        $check_sql = "SELECT post_name FROM $wpdb->posts $join_clause WHERE post_name = %s AND ID != %d $where_clause LIMIT 1";
        $post_name_check = $wpdb->get_var($wpdb->prepare($check_sql, $original_slug, $post_ID));

    } elseif (is_post_type_hierarchical($post_type)) {

        // Page slugs must be unique within their own trees. Pages are in a separate
        // namespace than posts so page slugs are allowed to overlap post slugs.
        $check_sql = "SELECT ID FROM $wpdb->posts $join_clause WHERE post_name = %s AND post_type IN ( %s, 'attachment' ) AND ID != %d AND post_parent = %d $where_clause LIMIT 1";
        $post_name_check = $wpdb->get_var($wpdb->prepare($check_sql, $original_slug, $post_type, $post_ID, $post_parent));

    } else {

        // Post slugs must be unique across all posts.
        $check_sql = "SELECT post_name FROM $wpdb->posts $join_clause WHERE post_name = %s AND post_type = %s AND ID != %d $where_clause LIMIT 1";
        $post_name_check = $wpdb->get_var($wpdb->prepare($check_sql, $original_slug, $post_type, $post_ID));

    }

    if (!$post_name_check) {
        return $original_slug;
    }

    return $slug;
}

add_filter('wp_unique_post_slug', 'polylang_slug_unique_slug_in_language', 10, 6);


/**
 * Modify the sql query to include checks for the current language.
 *
 * @param string $query Database query.
 *
 * @return string        The modified query.
 * @since 0.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 */
function polylang_slug_filter_queries($query)
{
    global $wpdb;

    // Query for posts page, pages, attachments and hierarchical CPT. This is the only possible place to make the change. The SQL query is set in get_page_by_path()
    $is_pages_sql = preg_match(
        "#SELECT ID, post_name, post_parent, post_type FROM {$wpdb->posts} .*#",
        polylang_slug_standardize_query($query),
        $matches
    );

    if (!$is_pages_sql) {
        return $query;
    }

    // Check if should contine. Don't add $query polylang_slug_should_run() as $query is a SQL query.
    if (!polylang_slug_should_run()) {
        return $query;
    }

    $lang = pll_current_language();
    // " INNER JOIN $wpdb->term_relationships AS pll_tr ON pll_tr.object_id = ID".
    $join_clause = polylang_slug_model_post_join_clause();
    // " AND pll_tr.term_taxonomy_id IN (" . implode(',', $languages) . ")".
    $where_clause = polylang_slug_model_post_where_clause($lang);

    $query = preg_match(
        "#(SELECT .* (?=FROM))(FROM .* (?=WHERE))(?:(WHERE .*(?=ORDER))|(WHERE .*$))(.*)#",
        polylang_slug_standardize_query($query),
        $matches
    );

    // Reindex array numerically $matches[3] and $matches[4] are not added together thus leaving a gap. With this $matches[5] moves up to $matches[4]
    $matches = array_values($matches);

    // SELECT, FROM, INNER JOIN, WHERE, WHERE CLAUSE (additional), ORBER BY (if included)
    $sql_query = $matches[1] . $matches[2] . $join_clause . $matches[3] . $where_clause . $matches[4];

    /**
     * Disable front end query modification.
     *
     * Allows disabling front end query modification if not needed.
     *
     * @param string $sql_query Database query.
     * @param array $matches {
     * @type string $matches [1] SELECT SQL Query.
     * @type string $matches [2] FROM SQL Query.
     * @type string $matches [3] WHERE SQL Query.
     * @type string $matches [4] End of SQL Query (Possibly ORDER BY).
     * }
     * @param string $join_clause INNER JOIN Polylang clause.
     * @param string $where_clause Additional Polylang WHERE clause.
     * @since 0.2.0
     *
     */
    return apply_filters('polylang_slug_sql_query', $sql_query, $matches, $join_clause, $where_clause);
}

add_filter('query', 'polylang_slug_filter_queries');


/**
 * Extend the WHERE clause of the query.
 *
 * This allows the query to return only the posts of the current language
 *
 * @param string $where The WHERE clause of the query.
 * @param WP_Query $query The WP_Query instance (passed by reference).
 *
 * @return string          The WHERE clause of the query.
 * @since 0.1.0
 *
 */
function polylang_slug_posts_where_filter($where, $query)
{
    // Check if should contine.
    if (!polylang_slug_should_run($query)) {
        return $where;
    }

    $lang = empty($query->query['lang']) ? pll_current_language() : $query->query['lang'];

    // " AND pll_tr.term_taxonomy_id IN (" . implode(',', $languages) . ")"
    $where .= polylang_slug_model_post_where_clause($lang);

    return $where;
}

add_filter('posts_where', 'polylang_slug_posts_where_filter', 10, 2);


/**
 * Extend the JOIN clause of the query.
 *
 * This allows the query to return only the posts of the current language
 *
 * @param string $join The JOIN clause of the query.
 * @param WP_Query $query The WP_Query instance (passed by reference).
 *
 * @return string          The JOIN clause of the query.
 * @since 0.1.0
 *
 */
function polylang_slug_posts_join_filter($join, $query)
{

    // Check if should contine.
    if (!polylang_slug_should_run($query)) {
        return $join;
    }

    // " INNER JOIN $wpdb->term_relationships AS pll_tr ON pll_tr.object_id = ID".
    $join .= polylang_slug_model_post_join_clause();

    return $join;
}

add_filter('posts_join', 'polylang_slug_posts_join_filter', 10, 2);


/**
 * Check if the query needs to be adapted.
 *
 * @param WP_Query $query The WP_Query instance (passed by reference).
 *
 * @return bool
 * @since 0.2.0
 *
 */
function polylang_slug_should_run($query = '')
{

    /**
     * Disable front end query modification.
     *
     * Allows disabling front end query modification if not needed.
     *
     * @param bool     false  Not disabling run.
     * @param WP_Query $query The WP_Query instance (passed by reference).
     * @since 0.2.0
     *
     */

    // Do not run in admin or if Polylang is disabled
    $disable = apply_filters('polylang_slug_disable', false, $query);
    if (is_admin() || is_feed() || !function_exists('pll_current_language') || $disable) {
        return false;
    }
    // The lang query should be defined if the URL contains the language
    $lang = empty($query->query['lang']) ? pll_current_language() : $query->query['lang'];
    // Checks if the post type is translated when doing a custom query with the post type defined
    $is_translated = !empty($query->query['post_type']) && !pll_is_translated_post_type($query->query['post_type']);

    return !(empty($lang) || $is_translated);
}


/**
 * Standardize the query.
 *
 * This makes the standardized and simpler to run regex on
 *
 * @param string $query Database query.
 *
 * @return string        The standardized query.
 * @since 0.2.0
 *
 */
function polylang_slug_standardize_query($query)
{
    // Strip tabs, newlines and multiple spaces.
    $query = str_replace(
        array("\t", " \n", "\n", " \r", "\r", "   ", "  "),
        array('', ' ', ' ', ' ', ' ', ' ', ' '),
        $query
    );
    return trim($query);
}


/**
 * Fetch the polylang join clause.
 *
 * @return string
 * @since 0.2.0
 *
 */
function polylang_slug_model_post_join_clause()
{
    if (function_exists('PLL')) {
        return PLL()->model->post->join_clause();
    } elseif (array_key_exists('polylang', $GLOBALS)) {
        global $polylang;
        return $polylang->model->join_clause('post');
    }
    return '';
}


/**
 * Fetch the polylang where clause.
 *
 * @param string $lang The current language slug.
 *
 * @return string
 * @since 0.2.0
 *
 */
function polylang_slug_model_post_where_clause($lang = '')
{
    if (function_exists('PLL')) {
        return PLL()->model->post->where_clause($lang);
    } elseif (array_key_exists('polylang', $GLOBALS)) {
        global $polylang;
        return $polylang->model->where_clause($lang, 'post');
    }
    return '';
}


//Disable emojis in WordPress
add_action('init', 'smartwp_disable_emojis');

function smartwp_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


function add_nofollow_to_specific_menu($args)
{
    if ($args['theme_location'] == 'footer-links-menu') {
        $args['walker'] = new Walker_Nav_Menu_Nofollow();
    }
    return $args;
}

add_filter('wp_nav_menu_args', 'add_nofollow_to_specific_menu');


class Walker_Nav_Menu_Nofollow extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="nofollow ' . esc_attr($item->xfn) . '"' : ' rel="nofollow"';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}


function allow_svg_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'allow_svg_uploads');


function load_more_posts_by_tags()
{
    $offset = intval($_POST['offset']);
    $tags = explode(',', $_POST['tag_ids']);
    $current_post_id = intval($_POST['current_post_id']);
    $posts_per_page = 6; // or any other default value if not specified

    $args = array(
        'post_type' => array('post', 'blog'),
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
        'tag__in' => $tags,
        'orderby' => 'date',
        'order' => 'DESC',
        'post__not_in' => array($current_post_id), // Exclude current post
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); ?>
            <a data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="600" href="<?php the_permalink() ?>" class="related-posts-widget__item">
                <div class="image-wrapper" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>)" alt="<?php the_title() ?>"></div>
                <div class="related-posts-widget__item-content">
                    <h3 class="two-lines"><?php the_title(); ?></h3>
                    <p class="excerpt three-lines">
                        <?php
                        // Get the ACF excerpt field
                        $acf_excerpt = get_field('excerpt');

                        // Get the description from the "header" group field
                        $header = get_field('header');
                        $description = $header['description'] ?? '';

                        if ($acf_excerpt) {
                            // Case 1: The excerpt field is populated
                            echo esc_html(strip_tags($acf_excerpt));
                        } elseif ($description) {
                            // Case 3: The excerpt field is empty or not set, use the description field
                            echo esc_html(strip_tags($description));
                        } else {
                            // Case 2: No content in excerpt or description, do not display anything
                            echo '';
                        }
                        ?>
                    </p>
                    <div class="date arrow-after arrow-after--right">
                        <div class="icon-calendar"></div>
                        <?php echo get_the_date('F d, Y'); ?>
                    </div>
                </div>
            </a>
        <?php }
    } else {
        echo 'No more posts to load.';
    }

    wp_reset_postdata();
    wp_die();
}

add_action('wp_ajax_nopriv_load_more_posts_by_tags', 'load_more_posts_by_tags');
add_action('wp_ajax_load_more_posts_by_tags', 'load_more_posts_by_tags');


function enqueue_termly_custom_styles()
{
    wp_enqueue_style(
        'termly-custom',
        get_stylesheet_directory_uri() . '/css/termly-custom.css',
        array(),
        null
    );
}

add_action('wp_enqueue_scripts', 'enqueue_termly_custom_styles');
