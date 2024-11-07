<?php
/**
 * Template Name: News
 *
 * The template for displaying Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();

wp_reset_postdata();


$news = new WP_Query([
    'post_type' => 'blog',
    'posts_per_page' => 7,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => 1,
]);

?>
    <section class="s-news bg-grey">
        <div class="container">
            <div class="s-news__header">
                <h1>LSports B<u>l</u>og</h1>
            </div>
			<div  class="events_under_h1-2" style="justify-content: left !important;"> <p class="events_under_h1" style="text-align: left !important;">Here, you will find tips and insights that help sportsbooks leverage their business operations.</p>
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
            <a href="#load-more-blogs" class="btn-yellow" id="load-more-blogs"><?php the_field('view_more', 'option') ?></a>
        </div>
    </section>

<?php get_footer();
