    <?php
    if (has_category('article')) {
        $category_name = get_term_by('slug', 'article', 'category')->name;
    } elseif (has_category('blog-post')) {
        $category_name = get_term_by('slug', 'blog-post', 'category')->name;
    } elseif (has_category('press-release')) {
        $category_name = get_term_by('slug', 'press-release', 'category')->name;
    } elseif (has_category('update')) {
        $category_name = get_term_by('slug', 'update', 'category')->name;
    } elseif (has_category('news')) {
        $category_name = get_term_by('slug', 'news', 'category')->name;
    };
    ?>

    <a href="<?php the_permalink() ?>" class="s-news__item">
        <div class="image-wrapper" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>)" alt="<?php the_title() ?> >
            <!--img src=""-->
        </div>
        <div class="s-news__item-content">
            <div class="type"><?php echo $category_name ?></div>
            <h3 class="two-lines"><?php the_field('title') ?></h3>
            <p class="excerpt three-lines"><?php the_field('excerpt') ?></p>
            <div class="date arrow-after arrow-after--right">
                <div class="icon-calendar"></div>
                <?php echo get_the_date('F d, Y'); ?>
            </div>
        </div>
    </a>
