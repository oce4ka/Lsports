<?php
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>
    <section class="s-hp-header-promo bg-grey">
        <div class="s-hp-header-promo__slides">
            <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
                <div class="s-hp-header-promo__slide">
                    <div class="container s-hp-header-promo__grid">
                        <div class="s-hp-header-promo__content-container">
                            <h2 data-aos="fade-up"><?php the_sub_field('title') ?></h2>
                            <p data-aos="fade-up" data-aos-offset="300" data-aos-delay="300" data-aos-duration="600"><?php the_sub_field('description') ?></p>
                            <a href="#" class="btn-yellow"><?php the_field('tell_us_what_you_need', 'option') ?></a>
                        </div>
                        <div class="s-hp-header-promo__image-container">
                            <img src="<?php the_sub_field('image') ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="s-hp-trusted">
        <div class="container">
            <div class="s-hp-trusted__content">
                <div class="trusted-label"><?php the_field('trusted_by', 'option') ?></div>
                <?php if (have_rows('trusted')): while (have_rows('trusted')) : the_row(); ?>
                    <img src="<?php the_sub_field('image') ?>" alt="">
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section class="s-hp-features bg-white">
        <div class="container">
            <?php if (have_rows('features')): while (have_rows('features')) : the_row(); ?>
                <div class="feature">
                    <div class="feature__image-container">
                        <lottie-player src="<?php echo get_template_directory_uri().'/img/lottie/'.get_sub_field('lottie_file_name') ?>" background="transparent"  speed="1" loop autoplay></lottie-player>
                    </div>
                    <h3><?php the_sub_field('title') ?></h3>
                    <p><?php the_sub_field('description') ?></p>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="s-hp-products bg-grey">
        <div class="container">
            <h6>Our Products</h6>
            <h2>
                <?php
                $delay = 0;
                $delay_difference = 50;
                $offset = 0;
                $offset_difference = 100;
                ?>
                <?php if (have_rows('products_heading')): while (have_rows('products_heading')) : the_row(); ?>
                    <?php
                    $delay = $delay + $delay_difference;
                    $offset = $offset + $offset_difference;
                    ?>
                    <div data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" data-aos-offset="<?php echo $offset; ?>"><?php the_sub_field('title_line'); ?></div>
                <?php endwhile; endif; ?>
            </h2>
            <div class="s-hp-products__carousel">
                <div class="s-hp-products__controls">
                    <div class="s-hp-products__prev arrow-after"></div>
                    <div class="s-hp-products__img-title">
                        <div class="s-hp-products__img-title-slides">
                            <?php if (have_rows('products')): while (have_rows('products')) : the_row(); ?>
                                <div>
                                    <div class="text-vertical"><?php the_sub_field('vertical_title'); ?></div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="s-hp-products__next arrow-after"></div>
                </div>
                <div class="s-hp-products__slides">
                    <?php if (have_rows('products')): while (have_rows('products')) : the_row(); ?>
                        <div class="s-hp-products__slide">
                            <div class="s-hp-products__slide-content">
                                <div class="s-hp-products__content">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                    <a href="<?php the_sub_field('link'); ?>" class="btn-yellow"><?php the_field('learn_more', 'option') ?></a>
                                </div>
                                <div class="s-hp-products__image">
                                    <img src="<?php the_sub_field('image'); ?>" alt=""/>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="s-hp-news bg-yellow">
        <div class="s-hp-news__headings">
            <h2><?php the_field('latest_news', 'option') ?></h2>
            <h6 class="arrow-after"><?php the_field('see_all_news', 'option') ?></h6>
        </div>

        <?php
        wp_reset_postdata();
        $args_news = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
        );

        $latest_news = new WP_Query($args_news);
        ?>

        <div class="s-hp-news__content">
            <div class="s-hp-news__carousel-wrapper">
                <div class="s-hp-news__carousel">
                    <?php
                    if ($latest_news->have_posts()) : while ($latest_news->have_posts()) : $latest_news->the_post(); ?>
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
        <?php wp_reset_postdata(); ?>
    </section>
    <section class="s-hp-events bg-grey">
        <h2 data-aos="fade-up"><?php the_field('upcoming_events', 'option') ?></h2>
        <h6 class="arrow-after"><?php the_field('see_all_events', 'option') ?></h6>
        <div class="s-hp-events__event-wrapper">
            <?php
            wp_reset_postdata();
            $args_events = array(
                'posts_per_page' => 3,
                'category_name' => 'events'
            );

            $latest_events = new WP_Query($args_events);
            ?>
            <?php if ($latest_events->have_posts()) : while ($latest_events->have_posts()) : $latest_events->the_post(); ?>
                <div class="s-hp-events__event-item">
                    <div class="date">
                        <?php
                        if (get_field('date_end')):
                            echo date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("M", strtotime(get_field('date_end', false, false)));
                        else:
                            echo date("j", strtotime(get_field('date_start', false, false))) . ' ' . date("M", strtotime(get_field('date_start', false, false)));
                        endif;
                        ?>
                    </div>
                    <div class="image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                    <h3><?php the_field('title_short') ?></h3>
                    <div class="country"><?php the_field('location') ?></div>
                    <div class="info"><?php the_field('stand_location') ?></div>
                    <a href="<?php the_permalink() ?>" class="btn-event-details arrow-after"><?php the_field('event_details', 'option') ?></a>
                </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
<?php if (have_rows('sportsbooks')): while (have_rows('sportsbooks')) : the_row(); ?>
    <section class="s-hp-sportsbooks<?php if (get_sub_field('do_not_show_right_section')) echo ' alternative'; ?>">
        <div class="s-hp-sportsbooks__content">
            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <?php if (!get_sub_field('do_not_show_right_section')): ?>
            <div class="s-hp-sportsbooks__content">
                <h2><?php the_sub_field('title_right'); ?></h2>
                <p><?php the_sub_field('description_right'); ?></p>
            </div>
        <?php endif; ?>
    </section>
<?php endwhile; endif; ?>
    <!-- This is just for demonstration, plz remove! -->
<?php if (have_rows('sportsbooks')): while (have_rows('sportsbooks')) : the_row(); ?>
    <section class="s-hp-sportsbooks">
        <div class="s-hp-sportsbooks__content">
            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <div class="s-hp-sportsbooks__content">
            <h2><?php the_sub_field('title_right'); ?></h2>
            <p><?php the_sub_field('description_right'); ?></p>
        </div>
    </section>
<?php endwhile; endif; ?>
    <!-- END This is just for demonstration, plz remove! -->
    <section class="s-hp-sports">
        <?php if (have_rows('covering_headings')): while (have_rows('covering_headings')) : the_row(); ?>
            <h2 data-aos="fade-up"><?php the_sub_field('title'); ?></h2>
            <p data-aos="fade-up" data-aos-delay="100" data-aos-offset="50"><?php the_sub_field('description'); ?></p>
            <a href="<?php the_sub_field('link'); ?>"><h6 class="arrow-after"><?php the_field('read_more', 'option') ?></h6></a>
        <?php endwhile; endif; ?>
        <div class="image-marquee">
            <div><img class="s-hp-sports__image desktop-only" src="<?php echo get_template_directory_uri() ?>/img/img-sports-1.png" alt=""></div>
            <div><img class="s-hp-sports__image desktop-only" src="<?php echo get_template_directory_uri() ?>/img/img-sports-1.png" alt=""></div>
        </div>
        <div class="image-marquee slow">
            <div><img class="s-hp-sports__image desktop-only" src="<?php echo get_template_directory_uri() ?>/img/img-sports-2.png" alt=""></div>
            <div><img class="s-hp-sports__image desktop-only" src="<?php echo get_template_directory_uri() ?>/img/img-sports-2.png" alt=""></div>
        </div>
        <div class="image-marquee">
            <div><img class="s-hp-sports__image desktop-only" src="<?php echo get_template_directory_uri() ?>/img/img-sports-3.png" alt=""></div>
            <div><img class="s-hp-sports__image desktop-only" src="<?php echo get_template_directory_uri() ?>/img/img-sports-3.png" alt=""></div>
        </div>
    </section>
    <section class="s-hp-case-study">
        <div class="container s-hp-case-study__grid">
            <div class="s-hp-case-study__content">
                <div class="s-hp-cs-content__slides">
                    <?php if (have_rows('covering_slides')): while (have_rows('covering_slides')) : the_row(); ?>
                        <div>
                            <h2><?php the_sub_field('title') ?></h2>
                            <p><?php the_sub_field('description') ?></p>
                            <a href="<?php the_sub_field('link') ?>" class="btn-yellow"><?php the_field('learn_more', 'option') ?></a>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="s-hp-case-study__image">
                <div class="s-hp-case-study__slides">
                    <?php if (have_rows('covering_slides')): while (have_rows('covering_slides')) : the_row(); ?>
                        <div><img src="<?php the_sub_field('image') ?>" alt=""></div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="s-hp-case-study__controls">
                    <div class="s-hp-case-study__image-description">
                        <div class="s-hp-case-study__image-description-slides">
                            <?php if (have_rows('covering_slides')): while (have_rows('covering_slides')) : the_row(); ?>
                                <div><?php the_sub_field('image_description') ?></div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="s-hp-case-study__prev arrow-after"></div>
                    <div class="s-hp-case-study__image-title">
                        <div class="s-hp-cs-img-titles__slides">
                            <?php if (have_rows('covering_slides')): while (have_rows('covering_slides')) : the_row(); ?>
                                <div>
                                    <span class="text-vertical"><?php the_sub_field('image_title') ?></span>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="s-hp-case-study__next arrow-after"></div>
                </div>
            </div>

        </div>
    </section>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();
