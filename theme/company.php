<?php
/**
 * Template Name: Company
 *
 * This is the template that displays page Company
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>

<?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
    <section class="s-about-header bg-grey">
        <div class="container s-prod-header__grid">
            <h1><?php the_sub_field('title') ?></h1>
            <div class="slogan">
                <p><?php the_sub_field('description') ?></p>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_rows('category_items')): while (have_rows('category_items')) : the_row(); ?>
    <section class="s-cat-features bg-white about">
        <div class="container">
            <?php $decor_number = 8; ?>
            <?php if (have_rows('category_item')): while (have_rows('category_item')) : the_row(); ?>
                <div data-aos="fade-up"
                     data-aos-delay="50"
                     data-aos-offset="10"
                     data-aos-duration="600" class="s-cat-features__feature">
                    <div class="s-cat-features__content">
                        <h2><?php the_sub_field('title') ?></h2>
                        <p><?php the_sub_field('description') ?></p>
                    </div>
                    <div class="s-cat-features__image decor-<?php echo $decor_number ?>"><img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>"></div>
                </div>
                <?php
                $decor_number++;
                if ($decor_number == 10) $decor_number = 8;
                ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_rows('values')): while (have_rows('values')) : the_row(); ?>
    <section class="s-about-values">
        <div class="container">
            <h2><?php the_sub_field('title') ?></h2>
            <div class="s-about-values__slides-wrapper">
                <div class="s-about-values__slides">
                    <?php
                    $slide_number = 0;
                    $color_classes = ['bg-turquoise', 'bg-purple', 'bg-yellow'];
                    ?>
                    <?php if (have_rows('slide')): while (have_rows('slide')) : the_row(); ?>
                        <div>
                            <div class="s-about-values__slide">
                                <div class="s-about-values__image <?php echo $color_classes[$slide_number % 3]; ?>">
                                    <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                                </div>
                                <h3><?php the_sub_field('title') ?></h3>
                                <h6><?php the_sub_field('subtitle') ?></h6>
                                <p><?php the_sub_field('description') ?></p>
                            </div>
                        </div>
                        <?php $slide_number++; ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="s-about-values__prev arrow-after"></div>
            <div class="s-about-values__next arrow-after"></div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_rows('timeline')): while (have_rows('timeline')) : the_row(); ?>
    <section class="s-about-story bg-white">
        <div class="container">
            <h2><?php the_sub_field('title') ?></h2>
        </div>
        <div class="timeline">
            <div class="line"></div>

            <?php
            $point_last = count(get_sub_field('point')) - 1;
            $point_number = 0;
            ?>

            <?php if (have_rows('point')): while (have_rows('point')) : the_row(); ?>

                <?php if ($point_number == 0): ?>
                    <div class="timeline-point first">
                        <div class="image">
                            <div data-aos="fade"
                                 data-aos-delay="150"
                                 data-aos-offset="50"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                            </div>
                        </div>
                        <div data-aos="fade"
                             data-aos-delay="100"
                             data-aos-offset="0"
                             data-aos-easing="ease-out"
                             data-aos-duration="600">
                            <div class="year">
                                <?php the_sub_field('year') ?>
                            </div>
                        </div>
                        <div class="content">
                            <div data-aos="fade"
                                 data-aos-delay="150"
                                 data-aos-offset="200"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <h3><?php the_sub_field('title') ?></h3>
                                <p><?php the_sub_field('description') ?></p>
                            </div>
                        </div>
                    </div>

                <?php elseif ((($point_number % 2) == 1) && ($point_number != $point_last)): ?>

                    <div class="timeline-point right">
                        <div class="image">
                            <div data-aos="fade"
                                 data-aos-delay="150"
                                 data-aos-offset="50"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                            </div>
                        </div>
                        <div data-aos="fade"
                             data-aos-delay="100"
                             data-aos-offset="0"
                             data-aos-easing="ease-out"
                             data-aos-duration="600">
                            <div class="year"><?php the_sub_field('year') ?></div>
                        </div>
                        <div class="content">
                            <div data-aos="fade"
                                 data-aos-delay="150"
                                 data-aos-offset="200"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <h3><?php the_sub_field('title') ?></h3>
                                <p><?php the_sub_field('description') ?></p>
                            </div>
                        </div>
                    </div>

                <?php elseif ((($point_number % 2) == 0) && ($point_number != $point_last)): ?>

                    <div class="timeline-point left">
                        <div class="image">
                            <div data-aos="fade"
                                 data-aos-delay="250"
                                 data-aos-offset="450"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                            </div>
                        </div>
                        <div data-aos="fade"
                             data-aos-delay="100"
                             data-aos-offset="0"
                             data-aos-easing="ease-out"
                             data-aos-duration="600">
                            <div class="year"><?php the_sub_field('year') ?></div>
                        </div>
                        <div class="content">
                            <div data-aos="fade"
                                 data-aos-delay="150"
                                 data-aos-offset="200"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <h3><?php the_sub_field('title') ?></h3>
                                <p><?php the_sub_field('description') ?></p>
                            </div>
                        </div>
                    </div>

                <?php elseif ($point_number == $point_last): ?>

                    <div class="timeline-point last">
                        <div class="year"><?php the_sub_field('year') ?></div>
                        <div class="content">
                            <div data-aos="fade"
                                 data-aos-delay="150"
                                 data-aos-offset="200"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <h3><?php the_sub_field('title') ?></h3>
                                <p><?php the_sub_field('description') ?></p>
                            </div>
                        </div>
                        <div class="image">
                            <div data-aos="fade"
                                 data-aos-delay="150"
                                 data-aos-offset="50"
                                 data-aos-easing="ease-out"
                                 data-aos-duration="600">
                                <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php $point_number++; ?>

            <?php endwhile; endif; ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_rows('news')): while (have_rows('news')) : the_row(); ?>
    <section class="s-hp-news bg-yellow image-bordered">
        <div class="s-hp-news__headings">
            <h2><?php the_sub_field('title') ?></h2>
            <a href="<?php the_sub_field('see_all_link') ?>"><h6 class="arrow-after"><?php the_field('see_all_news', 'option') ?></h6></a>
        </div>
        <div class="s-hp-news__content">
            <div class="s-hp-news__carousel-wrapper">
                <div class="s-hp-news__carousel">
                    <?php
                    wp_reset_postdata();
                    $args_news = array(
                        'posts_per_page' => 3,
                        'category_name' => 'news'
                    );

                    $latest_news = new WP_Query($args_news);
                    ?>
                    <?php if ($latest_news->have_posts()) : while ($latest_news->have_posts()) : $latest_news->the_post(); ?>
                        <div class="s-hp-news__news-item">
                            <div class="s-hp-news__news-item__content">
                                <div class="image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-read-more"><span class="text-vertical arrow-after"><?php the_field('read_more', 'option') ?></span></a>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="s-hp-news__controls">
                <div class="s-hp-news__arrow-prev arrow-after"></div>
                <div class="s-hp-news__dots"></div>
                <div class="s-hp-news__arrow-next arrow-after"></div>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endwhile; endif; ?>

<?php if (have_rows('acknowledgements')): while (have_rows('acknowledgements')) : the_row(); ?>
    <section class="s-about-acknowledgments bg-white">
        <div class="container">
            <h2><?php the_sub_field('title') ?></h2>
            <div class="s-about-acknowledgments__list">
                <?php if (have_rows('item')): while (have_rows('item')) : the_row(); ?>
                    <div class="s-about-acknowledgments__item">
                        <div class="s-about-acknowledgments__image">
                            <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                        </div>
                        <h3><?php the_sub_field('title') ?></h3>
                        <p><?php the_sub_field('subtitle') ?></p>
                        <p class="year"><?php the_sub_field('year') ?></p>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_rows('positions')): while (have_rows('positions')) : the_row(); ?>
    <section class="s-about-positions">
        <div class="container s-about-positions__grid">
            <div class="s-about-positions__content">
                <h2><?php the_sub_field('title') ?></h2>
                <p><?php the_sub_field('description') ?></p>
            </div>
            <div class="s-about-positions__video">
                <img src="<?php the_sub_field('video_preview_image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
            </div>
            <div class="s-about-positions__gallery">
                <?php if (have_rows('gallery')): while (have_rows('gallery')) : the_row(); ?>
                    <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                <?php endwhile; endif; ?>
            </div>
            <a href="<?php the_sub_field('link') ?>" class="btn-yellow">see all positions</a>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();
