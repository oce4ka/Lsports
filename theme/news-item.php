<?php
if (has_category('article')) {
    $category = 'article';
    $category_name = get_term_by('slug', 'article', 'category')->name;
    $related_heading = get_field('related_articles', 'option');
    $related_all = get_field('view_all_articles', 'option');
} elseif (has_category('blog-post')) {
    $category = 'blog-post';
    $category_name = get_term_by('slug', 'blog-post', 'category')->name;
    $related_heading = get_field('related_news', 'option');
    $related_all = get_field('view_all_news', 'option');
} elseif (has_category('press-release')) {
    $category = 'press-release';
    $category_name = get_term_by('slug', 'press-release', 'category')->name;
    $related_heading = get_field('related_press_releases', 'option');
    $related_all = get_field('view_all_press_releases', 'option');
} elseif (has_category('update')) {
    $category = 'update';
    $category_name = get_term_by('slug', 'update', 'category')->name;
    $related_heading = get_field('related_updates', 'option');
    $related_all = get_field('view_all_updates', 'option');
} elseif (has_category('news')) {
    $category = 'news';
    $category_name = get_term_by('slug', 'news', 'category')->name;
    $related_heading = get_field('related_news', 'option');
    $related_all = get_field('view_all_news', 'option');
};

$category_link = get_permalink(get_page_by_path('news')) . '?cat=' . $category;
?>

<section class="s-news-post bg-grey">
    <div class="container container--post">
        <div class="s-news-post__header">
            <a href="<?php echo $category_link ?>" class="back">Back to lobby ></a>
            <div class="meta">
                <div class="type"><?php echo $category_name ?></div>
                <div class="date"><?php echo get_the_date('F d, Y') ?></div>
            </div>
            <?php if (get_field('title')): ?>
                <h1><?php the_field('title') ?></h1>
            <?php else: ?>
                <h1><?php the_title() ?></h1>
            <?php endif; ?>
            <div class="excerpt"><?php the_field('excerpt') ?></div>
            <div class="nav-social nav-social--post">
                <div class="facebook facebook--black"></div>
                <div class="twitter twitter--black"></div>
                <div class="linkedin linkedin--black"></div>
            </div>
        </div>
        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title() ?>">
        <?php the_content(); ?>
    </div>
</section>

<?php if (have_rows('related_posts')): ?>
    <section class="s-related">
        <div class="container container--post">
            <div class="s-related__wrapper">
                <h2><?php echo $related_heading ?></h2>
                <div class="s-related__grid">

                    <?php while (have_rows('related_posts')) : the_row(); ?>
                        <?php $related_post = get_sub_field('post') ?>
                        <a href="<?php echo get_permalink($related_post) ?>" data-aos="fade-up" class="s-related__item">
                            <div class="image-wrapper" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($related_post)); ?>)"></div>
                            <div class="s-related__item-content">
                                <div class="type"><?php echo $category_name ?></div>
                                <div class="excerpt"><?php echo $related_post->post_title; ?></div>
                                <div class="date"><?php echo get_the_date('F d, Y', $related_post); ?></div>
                                <div class="arrow-after arrow-after--right">&nbsp;</div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <a href="<?php echo $category_link ?>" class="s-related__show-all"><?php echo $related_all ?></a>
            </div>
        </div>
    </section>
<?php endif; ?>
