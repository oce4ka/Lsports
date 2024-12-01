<?php
$today = date("Ymd");
$posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'post',
    'category_name' => 'events-widgets',
    'meta_query' => array(
        array(
            'key' => 'date_start',
            'value' => $today,
            'compare' => '>=',
        ),
    ),
    'meta_key' => 'date_start',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'
));

if ($posts): ?>
    <section class="s-hp-news s-hp-news--event bg-white" style="background-color: <?php the_field('event-carousel-color') ?>">
        <div class="s-hp-news__headings">
            <h2><?php the_field('next_events_decorated', 'option') ?></h2>
            <a href="<?php the_field('see_all_events_link', 'option') ?>"><h6 class="arrow-after"><?php the_field('see_all_events', 'option') ?></h6></a>
        </div>
        <div class="s-hp-news__content">
            <div class="s-hp-news__carousel-wrapper">
                <div class="s-hp-news__carousel">
                    <?php foreach ($posts as $post):
                        setup_postdata($post);
                        ?>
                        <div class="s-hp-news__news-item">
                            <div class="s-hp-news__news-item__content">
                                <div class="image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                                <div class="s-hp-news__news-item__wrapper">
                                    <div class="meta">
                                        <div class="date">
                                            <div class="icon-calendar"></div>
                                            <?php
                                            if (get_field('date_end')):
                                                echo date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("F", strtotime(get_field('date_end', false, false))) . ', ' . date("Y", strtotime(get_field('date_end', false, false)));
                                            else:
                                                echo date("F", strtotime(get_field('date_start', false, false))) . ' ' . date("j", strtotime(get_field('date_start', false, false))) . ', ' . date("Y", strtotime(get_field('date_start', false, false)));
                                            endif;
                                            ?>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="place">
                                            <div class="icon-place"></div>
                                            <?php if (get_field('virtual')): ?>
                                                <?php the_field('virtual', 'option'); ?>
                                            <?php else: ?>
                                                <?php the_field('location') ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <h3><?php the_field('title_short'); ?></h3>
                                    <div class="excerpt"><?php the_field('excerpt'); ?></div>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-read-more"><span class="text-vertical"><?php the_field('meet_us', 'option'); ?></span></a>
                        </div>
                    <?php endforeach; ?>
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
<?php endif; ?>
