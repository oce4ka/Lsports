<?php
/**
 * The template for displaying front page!!
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>
    <section class="s-hp-header-promo bg-grey">
        <div class="s-hp-header-promo__slides">
            <?php $slide_number = 1 ?>
            <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
                <div class="s-hp-header-promo__slide slide-<?php echo $slide_number ?>">
                    <div class="container s-hp-header-promo__grid">
                        <div class="s-hp-header-promo__content-container">
                            <h2 data-aos="fade-up"><?php the_sub_field('title') ?></h2>
                            <p data-aos="fade-up" data-aos-offset="10" data-aos-delay="300" data-aos-duration="600"><?php the_sub_field('description') ?></p>
                        </div>

                        <div class="s-hp-header-promo__image-container">
                            <?php
                            $image = get_sub_field('image'); // Получаем массив изображения для мобильной версии
                            $image_desktop = get_sub_field('image_desktop'); // Получаем массив изображения для десктопной версии
                            $acf_alt = get_sub_field('acf_alt'); // Получаем значение ALT из ACF
                            $alt_text = '';

                            if (!empty($acf_alt)) {
                                $alt_text = esc_attr($acf_alt);
                            } elseif (!empty($image) && is_array($image)) {
                                $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
                            }
                            ?>
                            <script>
                                if (window.innerWidth >= 769) {
                                    document.write('<img class="hero-image" src="<?php echo esc_url($image_desktop['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />');
                                } else {
                                    document.write('<img class="hero-image" src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />');
                                }
                            </script>
                        </div>

                    </div>
                </div>
                <?php $slide_number++ ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="s-hp-trusted">
        <div class="container">
            <div class="s-hp-trusted__content">
                <?php $current_lang = pll_current_language(); ?>
                <div class="trusted-label"><?php the_field('trusted_by_' . $current_lang, 'option') ?></div>
                <div class="s-hp-trusted__slides">
                    <?php $image_counter = 1; ?>
                    <div>
                        <div class="s-hp-trusted__slide">
                            <?php if (have_rows('trusted')): while (have_rows('trusted')) : the_row(); ?>
                                <?php
                                $image_counter++;
                                $image = get_sub_field('image'); // Получаем массив изображения
                                $acf_alt = get_sub_field('acf_alt');
                                $alt_text = '';

                                if (!empty($acf_alt)) {
                                    $alt_text = esc_attr($acf_alt);
                                } elseif (!empty($image) && is_array($image)) {
                                    $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
                                }
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />
                                <?php if ($image_counter % 6 == 1) : ?>
                                    <?php echo '</div></div>'; ?>
                                    <?php echo '<div><div class="s-hp-trusted__slide">'; ?>
                                    <?php $image_counter = 1; ?>
                                <?php endif; ?>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-hp-features newlayout1 bg-white">
        <div class="container">
            <h2>
                <?php if (have_rows('features_heading')): while (have_rows('features_heading')) : the_row(); ?>
                    <div><?php the_sub_field('title_line'); ?></div>
                <?php endwhile; endif; ?>
            </h2>
            <?php if (have_rows('features')): while (have_rows('features')) : the_row(); ?>
                <div class="feature">
                    <div class="feature__image-container">
                        <dotlottie-player src="<?php echo get_template_directory_uri() . '/img/lottie/' . get_sub_field('lottie_file_name') ?>" background="white" speed="1" loop autoplay></dotlottie-player>
                    </div>
                    <h3><?php the_sub_field('title') ?></h3>
                    <p><?php the_sub_field('description') ?></p>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>


<?php if (pll_current_language() == 'en'): ?>
    <section class="pfamily bg-grey">
        <h6 class="pfamily-intheading">
            <?php if (have_rows('pfamily_heading_small')): while (have_rows('pfamily_heading_small')) : the_row(); ?>
                <div><?php the_sub_field('title_line'); ?></div>
            <?php endwhile; endif; ?>
        </h6>

        <h2>
            <?php if (have_rows('pfamily_heading')): while (have_rows('pfamily_heading')) : the_row(); ?>
                <div><?php the_sub_field('title_line'); ?></div>
            <?php endwhile; endif; ?>
        </h2>

        <div class="pfamily-wrapper">
            <?php if (have_rows('pfeatures')): $i = 0;
                while (have_rows('pfeatures')) : the_row(); ?>
                    <div class="feature-item">
                        <div class="feature__image-container">
                            <dotlottie-player src="<?php echo get_template_directory_uri() . '/img/lottie/' . get_sub_field('lottie_file_name') ?>" background="transparent" speed="1" loop></dotlottie-player>
                        </div>
                        <h3 class="<?php echo ($i == 0) ? 'first' : (($i == 1) ? 'second' : ''); ?>">
                            <?php the_sub_field('title') ?>
                        </h3>
                        <p><?php the_sub_field('description') ?></p>
                        <?php $current_lang = pll_current_language(); ?>
                        <a href="<?php the_sub_field('link'); ?>" class="btn-read-more arrow-after"><?php the_field('learn_more_' . $current_lang, 'option'); ?></a>
                    </div>
                    <?php $i++; endwhile; endif; ?>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const featureItems = document.querySelectorAll('.feature-item');
            const hasTouchScreen = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0);
            featureItems.forEach(item => {
                const lottiePlayer = item.querySelector('dotlottie-player');
                if (!hasTouchScreen) {
                    item.addEventListener('mouseenter', () => {
                        lottiePlayer.play();
                    });
                    item.addEventListener('mouseleave', () => {
                        lottiePlayer.pause();
                    });
                } else {
                    document.addEventListener('touchstart', function startAnimation() {
                        lottiePlayer.play();
                        document.removeEventListener('touchstart', startAnimation, false);
                    }, false);
                }
            });
        });
    </script>
<?php endif; ?>

    <section class="s-hp-products bg-white">
        <div class="container">
            <h6><?php the_field('our_products_' . $current_lang, 'option') ?></h6>
            <h2>
                <?php if (have_rows('products_heading')): while (have_rows('products_heading')) : the_row(); ?>
                    <div><?php the_sub_field('title_line'); ?></div>
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
                                    <h6 class="one_more_title">
                                        <a href="<?php the_sub_field('one_more_title_link'); ?>"><?php the_sub_field('one_more_title'); ?></a>
                                    </h6>
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                    <?php $current_lang = pll_current_language(); ?>
                                    <a href="<?php the_sub_field('link'); ?>" class="btn-yellow"><?php the_field('learn_more_' . $current_lang, 'option') ?></a>
                                </div>

                                <div class="s-hp-products__image">
                                    <?php
                                    $image = get_sub_field('image'); // Получаем массив изображения
                                    $acf_alt = get_sub_field('acf_alt');
                                    $alt_text = '';

                                    if (!empty($acf_alt)) {
                                        $alt_text = esc_attr($acf_alt);
                                    } elseif (!empty($image) && is_array($image)) {
                                        $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
                                    }
                                    ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />
                                </div>

                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>


<?php if (pll_current_language() == 'en'): ?>
    <section class="newcoverage bg-grey">
        <h2>
            <?php if (have_rows('newcoverage_heading')): while (have_rows('newcoverage_heading')) : the_row(); ?>
                <div><?php the_sub_field('title_line'); ?></div>
            <?php endwhile; endif; ?>
        </h2>

        <div class="newcoverage-wrapper">
            <?php if (have_rows('newcoverage')): $i = 0;
                while (have_rows('newcoverage')) : the_row(); ?>
                    <div class="newcoverage-item">
                        <div class="newcoverage__image-container-wrapper">
                            <div class="newcoverage__image-container">
                                <dotlottie-player src="<?php echo get_template_directory_uri() . '/img/lottie/' . get_sub_field('lottie_file_name') ?>" background="transparent" speed="1" loop autoplay></dotlottie-player>
                            </div>
                        </div>
                        <div class="h3-wrapper">
                            <h3 class="<?php echo ($i == 0) ? 'first' : (($i == 1) ? 'second' : ''); ?>">
                                <?php the_sub_field('title') ?>
                            </h3>
                        </div>
                    </div>
                    <?php $i++; endwhile; endif; ?>
        </div>

    </section>
<?php endif; ?>

<?php /*
<section class="s-hp-sports">
        <?php if (have_rows('covering_headings')): while (have_rows('covering_headings')) : the_row(); ?>
            <?php if (function_exists('pll_current_language') && pll_current_language() !== 'en'): ?>
                <h2><?php the_sub_field('title'); ?></h2>
                <!--p data-aos="fade-up" data-aos-delay="100" data-aos-offset="50"><?php the_sub_field('description'); ?></p-->
                <!--a href="<?php // the_sub_field('link'); ?>"><h6 class="arrow-after"><?php // the_field('read_more', 'option') ?></h6></a-->
            <?php elseif (pll_current_language() === 'en'): ?>
                <div class="height-reducer"></div>
            <?php endif; ?>
        <?php endwhile; endif; ?>
        <?php if (function_exists('pll_current_language') && pll_current_language() == 'en'): ?>
        <!--
    <?php endif; ?>
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
    <div style="height: 50px"></div>
   <?php if (function_exists('pll_current_language') && pll_current_language() == 'en'): ?>
-->
    <?php endif; ?>
</section>
 */ ?>

<?php if (is_front_page() && pll_current_language() == pll_default_language()): ?>
    <section class="s-hp-news image-wide bg-yellow">
        <div class="s-hp-news__headings">
            <h2><?php the_field('latest_news', 'option'); ?></h2>
            <a href="<?php the_field('see_all_news_link', 'option'); ?>"><h6 class="arrow-after"><?php the_field('see_all_news', 'option'); ?></h6></a>
        </div>

        <div class="s-hp-news__content">
            <div class="s-hp-news__carousel-wrapper">
                <div class="s-hp-news__carousel">
                    <?php
                    wp_reset_postdata();
                    $args_news = array(
                        'posts_per_page' => 5,
                        'category_name' => 'news'
                    );

                    $latest_news = new WP_Query($args_news);
                    if ($latest_news->have_posts()) :
                        while ($latest_news->have_posts()) : $latest_news->the_post(); ?>
                            <div class="s-hp-news__news-item">
                                <div class="s-hp-news__news-item__content">
                                    <div class="image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), "medium"); ?>)"></div>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-read-more"><span class="text-vertical arrow-after"><?php the_field('read_more', 'option'); ?></span></a>
                            </div>
                        <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="s-hp-news__controls">
                <div class="s-hp-news__arrow-prev arrow-after"></div>
                <div class="s-hp-news__dots"></div>
                <div class="s-hp-news__arrow-next arrow-after"></div>
            </div>
        </div>
    </section>

    <section class="s-hp-events bg-grey">
        <h2><?php the_field('upcoming_events', 'option'); ?></h2>
        <a href="<?php the_field('see_all_events_link', 'option'); ?>"><h6 class="arrow-after"><?php the_field('see_all_events', 'option'); ?></h6></a>
        <div class="s-hp-events__event-wrapper">
            <?php
            wp_reset_postdata();
            $today = date('Ymd');
            $args_events = array(
                'posts_per_page' => 3,
                'category_name' => 'events-widgets',
                'post_type' => 'post',
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key' => 'date_start',
                        'value' => $today,
                        'compare' => '>=',
                    ),
                    array(
                        'key' => 'date_end',
                        'value' => $today,
                        'compare' => '>=',
                    )
                ),
                'orderby' => 'meta_value',
                'meta_key' => 'date_start',
                'order' => 'ASC',
            );

            $latest_events = new WP_Query($args_events);
            if ($latest_events->have_posts()) :
                while ($latest_events->have_posts()) : $latest_events->the_post(); ?>
                    <div class="s-hp-events__event-item">
                        <div class="date">
                            <?php
                            if (get_field('date_end')) {
                                $start = DateTime::createFromFormat('d/m/Y', get_field('date_start'));
                                $end = DateTime::createFromFormat('d/m/Y', get_field('date_end'));
                                echo $start->format('j') . '-' . $end->format('j M');
                            } else {
                                $start = DateTime::createFromFormat('d/m/Y', get_field('date_start'));
                                echo $start->format('j M');
                            }
                            ?>
                        </div>
                        <div class="image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), "large"); ?>)"></div>
                        <h3><?php the_field('title_short'); ?></h3>
                        <div class="country"><?php the_field('location'); ?></div>
                        <div class="info"><?php the_field('stand_location'); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn-event-details arrow-after"><?php the_field('event_details', 'option'); ?></a>
                    </div>
                <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </div>
    </section>
<?php endif; ?>


<?php if (the_field('show_sportsbooks')): ?>
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
<?php endif; ?>


<?php /*
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
*/ ?>
<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();
