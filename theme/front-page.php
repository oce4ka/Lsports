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
                            <h2 data-aos="fade-up"
                                data-aos-offset="10"
                                data-aos-delay="10"
                                data-aos-duration="600"><?php the_sub_field('title') ?></h2>
                            <p data-aos="fade-up"
                               data-aos-offset="300"
                               data-aos-delay="300"
                               data-aos-duration="600"><?php the_sub_field('description') ?></p>
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
                        <img src="<?php the_sub_field('image') ?>" alt="">
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
                    <div data-aos="fade-up"
                         data-aos-delay="<?php echo $delay; ?>"
                         data-aos-offset="<?php echo $offset; ?>"
                         data-aos-easing="ease-out"
                         data-aos-duration="600"><?php the_sub_field('title_line'); ?>
                    </div>
                <?php endwhile; endif; ?>
            </h2>
            <div class="s-hp-products__carousel">
                <div class="s-hp-products__controls">
                    <div class="s-hp-products__prev arrow-after"></div>
                    <div class="s-hp-products__img-title">
                        <div class="s-hp-products__img-title-slides">
                            <?php if (have_rows('products_heading')): while (have_rows('products_heading')) : the_row(); ?>
                                <div>
                                    <div class="text-vertical"><?php ?></div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="s-hp-products__next arrow-after"></div>
                </div>
                <div class="s-hp-products__slides">
                    <?php if (have_rows('products_heading')): while (have_rows('products_heading')) : the_row(); ?>
                        <div class="s-hp-products__slide">
                            <div class="s-hp-products__slide-content">
                                <div class="s-hp-products__content">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                    <a href="<?php the_sub_field('link'); ?>" class="btn-yellow"><?php the_field('learn_more', 'option') ?></a>
                                </div>
                                <div class="s-hp-products__image">
                                    <img src="i<?php the_sub_field('image'); ?>" alt=""/>
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
        $args = array(
            'numberposts' => 3,
            'category' => 'news'
        );

        $latest_news = new WP_Query($args);
        ?>

        <div class="s-hp-news__content">
            <div class="s-hp-news__carousel-wrapper">
                <div class="s-hp-news__carousel">
                    <?php
                    if ($latest_news->have_posts()) :
                        while ($latest_news->have_posts()) :
                            $latest_news->the_post();
                            ?>
                            <div class="s-hp-news__news-item">
                                <div class="s-hp-news__news-item__content">
                                    <div class="image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-read-more"><span class="text-vertical arrow-after"><?php the_field('read_more', 'option') ?></span></a>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
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
        <h2 data-aos="fade-up"
            data-aos-delay="50"
            data-aos-offset="10"
            data-aos-duration="600"><?php the_field('upcoming_events', 'option') ?></h2>
        <h6 class="arrow-after"><?php the_field('see_all_events', 'option') ?></h6>
        <div class="s-hp-events__event-wrapper">
            <div class="s-hp-events__event-item">
                <div class="date">20-22 Sep</div>
                <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                <h3>SBC Summit</h3>
                <div class="country">Barcelona, Spain</div>
                <div class="info">Stand C10</div>
                <a href="#" class="btn-event-details arrow-after"><?php the_field('event_details', 'option') ?></a>
            </div>
            <div class="s-hp-events__event-item">
                <div class="date">20-22 Sep</div>
                <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                <h3>SBC Summit</h3>
                <div class="country">Barcelona, Spain</div>
                <div class="info">Stand C10</div>
                <a href="#" class="btn-event-details arrow-after">Event details</a>
            </div>
            <div class="s-hp-events__event-item">
                <div class="date">20-22 Sep</div>
                <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                <h3>SBC Summit</h3>
                <div class="country">Barcelona, Spain</div>
                <div class="info">Stand C10</div>
                <a href="#" class="btn-event-details arrow-after">Event details</a>
            </div>
        </div>
    </section>
    <section class="s-hp-sportsbooks">
        <div class="s-hp-sportsbooks__content">
            <h2>Sp<u>o</u>rtsbooks</h2>
        </div>
        <div class="s-hp-sportsbooks__content">
            <h2>Media Pr<u>o</u>viders</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan felis, quis phasellus tempus vitae eget velit erat aliquam. Id nec eget fermentum donec gravida vitae. Viverra duis nisi integer vitae, pharetra blandit.</p>
        </div>
    </section>
    <section class="s-hp-sports">
        <h2 data-aos="fade-up"
            data-aos-delay="50"
            data-aos-offset="10"
            data-aos-duration="600">Covering in <u>o</u>ver 100+ sports</h2>
        <p data-aos="fade-up"
           data-aos-delay="100"
           data-aos-offset="50"
           data-aos-duration="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan felis, quis phasellus tempus vitae eget velit erat aliquam. Id nec eget fermentum donec gravida vitae. Viverra duis nisi integer vitae, pharetra blandit.</p>
        <h6 class="arrow-after"><?php the_field('read_more', 'option') ?></h6>
        <div class="image-marquee">
            <div><img class="s-hp-sports__image desktop-only" src="img/img-sports.png" alt=""></div>
            <div><img class="s-hp-sports__image desktop-only" src="img/img-sports.png" alt=""></div>
        </div>
        <div class="image-marquee slow">
            <div><img class="s-hp-sports__image desktop-only" src="img/img-sports.png" alt=""></div>
            <div><img class="s-hp-sports__image desktop-only" src="img/img-sports.png" alt=""></div>
        </div>
        <div class="image-marquee">
            <div><img class="s-hp-sports__image desktop-only" src="img/img-sports.png" alt=""></div>
            <div><img class="s-hp-sports__image desktop-only" src="img/img-sports.png" alt=""></div>
        </div>
    </section>
    <section class="s-hp-case-study">
        <div class="container s-hp-case-study__grid">
            <div class="s-hp-case-study__content">
                <div class="s-hp-cs-content__slides">
                    <div>
                        <h2><u>t</u>he Case study title goes here</h2>
                        <p>LSports is a world-leading sports data company that partners with sportsbooks to create engaging customer offerings by utilizing the most accurate real-time data on the broadest range of events in the market </p>
                        <div class="btn-yellow"><?php the_field('learn_more', 'option') ?></div>
                    </div>
                    <div>
                        <h2>the Case sdsd study title goes here</h2>
                        <p>LSports is a fdfdf world-leading sports data company that partners with sportsbooks to create engaging customer offerings by utilizing the most accurate real-time data on the broadest range of events in the market </p>
                        <div class="btn-yellow"><?php the_field('learn_more', 'option') ?></div>
                    </div>
                    <div>
                        <h2>the Case sd study title goes here</h2>
                        <p>LSports a fdfdf world-leading sports data company that partners with sportsbooks to create engaging customer offerings by utilizing the most accurate real-time data on the broadest range of events in the market </p>
                        <div class="btn-yellow"><?php the_field('learn_more', 'option') ?></div>
                    </div>
                </div>
            </div>
            <div class="s-hp-case-study__image">
                <div class="s-hp-case-study__slides">
                    <div><img src="images-upload/img-case-study.png" alt=""></div>
                    <div><img src="images-upload/img-case-study-1.png" alt=""></div>
                    <div><img src="images-upload/img-case-study.png" alt=""></div>
                </div>
                <div class="s-hp-case-study__controls">
                    <div class="s-hp-case-study__image-description">Powering the worlds most engaging sports products</div>
                    <div class="s-hp-case-study__prev arrow-after"></div>
                    <div class="s-hp-case-study__image-title">
                        <div class="s-hp-cs-img-titles__slides">
                            <div>
                                <span class="text-vertical">0001</span>
                            </div>
                            <div>
                                <span class="text-vertical">0002</span>
                            </div>
                            <div>
                                <span class="text-vertical">0003</span>
                            </div>
                        </div>
                    </div>
                    <div class="s-hp-case-study__next arrow-after"></div>
                </div>
            </div>

        </div>
    </section>
    <section class="s-hp-contact-us bg-yellow">
        <h2>
            <div data-aos="fade-up"
                 data-aos-delay="50"
                 data-aos-offset="0"
                 data-aos-easing="ease-out"
                 data-aos-duration="600">Plug your product in t<u>o</u>
            </div>
            <div data-aos="fade-up"
                 data-aos-delay="100"
                 data-aos-offset="100"
                 data-aos-easing="ease-out"
                 data-aos-duration="600"><u>t</u>he best sp<u>o</u>rts data feeds
            </div>
            <div data-aos="fade-up"
                 data-aos-delay="150"
                 data-aos-offset="200"
                 data-aos-easing="ease-out"
                 data-aos-duration="600">in the <u>w</u>orld
            </div>
        </h2>
        <div class="btn-yellow"><?php the_field('contact_us', 'option') ?></div>
    </section>

<?php get_footer();
