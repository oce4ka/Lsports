<?php
/**
 * Template Name: News
 *
 * The template for displaying News
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();

wp_reset_postdata();
if (isset($_GET['cat'])) {
    switch ($_GET['cat']) {
        case 'article':
            $cat_slug = 'article';
            break;
        case 'blog-post':
            $cat_slug = 'blog-post';
            break;
        case 'press-release':
            $cat_slug = 'press-release';
            break;
        case 'update':
            $cat_slug = 'update';
            break;
        default:
            $cat_slug = 'news, article, blog-post, press-release, update';
    }
} else {
    $cat_slug = 'news, article, blog-post, press-release, update';
}

$news = new WP_Query([
    'post_type' => 'post',
    'category_name' => $cat_slug,
    'posts_per_page' => 7,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => 1,
]);

?>
    <section class="s-news bg-grey">
        <div class="container">
            <div class="s-news__header">
                <h1><?php the_field('news_decorated', 'option') ?></h1>
                <div class="s-news__types-dropdown dropdown-js-action">
                    <?php
                    if (strpos($cat_slug, ',') !== false)
                        the_field('all_types', 'option');
                    else
                        echo get_term_by('slug', $cat_slug, 'category')->name;
                    ?>
                    <ul>
                        <li><a href="?cat=news"><?php the_field('all_types', 'option') ?></a></li>
                        <li><a href="?cat=article"><?php echo get_term_by('slug', 'article', 'category')->name ?></a></li>
                        <li><a href="?cat=press-release"><?php echo get_term_by('slug', 'press-release', 'category')->name ?></a></li>
                        <li><a href="?cat=blog-post"><?php echo get_term_by('slug', 'blog-post', 'category')->name ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="s-news__wrapper">
                <?php if ($news->have_posts()): ?>
                    <?php while ($news->have_posts()): ?>
                        <?php $news->the_post(); ?>
                        <?php get_template_part('news-card'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <a href="#load-more-news" class="btn-yellow" id="load-more-news"><?php the_field('view_more', 'option') ?></a>
        </div>
    </section>

<?php get_footer();
