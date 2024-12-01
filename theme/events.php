<?php
/**
 * Template Name: Events
 *
 * The template for displaying Events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();

$today = date("Ymd");
?>
<section class="s-events bg-grey">
    <div class="s-events__header">
        <h1><?php the_field('upcoming_events', 'option') ?></h1>
    </div>
    <div class="container">
        <div class="events_under_h1-2"><p class="events_under_h1"><?php the_field('events_under_h1', 'option') ?></p>
        </div>
    </div>
    <div class="container">
        <?php /*
            <ul class="s-events__filter">
                <li>
                    <div class="active">2023</div>
                </li>
                <li>
                    <div>Tag</div>
                </li>
                <li>
                    <div>E-Sports</div>
                </li>
                <li>
                    <div>Tag</div>
                </li>
                <li>
                    <div>Betting</div>
                </li>
                <li>
                    <div>Conference</div>
                </li>
            </ul> */ ?>
        <div class="s-events__grid">
            <?php
            // Получить текущую дату
            $today = current_time('Ymd');

            $upcoming_events = new WP_Query([
                'post_type' => 'post',
                'category_name' => 'events2,events-ice',
                'meta_query' => array(
                    array(
                        'key' => 'date_end',
                        'value' => $today,
                        'compare' => '>=', // Сравним с сегодняшней датой
                        'type' => 'DATE'
                    ),
                ),
                'posts_per_page' => -1,
                'orderby' => 'meta_value',
                'meta_key' => 'date_start',
                'order' => 'ASC',
            ]);
            ?>
            <?php if ($upcoming_events->have_posts()): ?>
                <?php while ($upcoming_events->have_posts()): ?>
                    <?php $upcoming_events->the_post(); ?>
                    <div class="s-events__item">
                        <div class="image-wrapper" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>)"></div>
                        <div class="item-content">
                            <div class="meta">
                                <div class="date">
                                    <div class="icon-calendar"></div>
                                    <?php
                                    if (get_field('date_end')):
                                        echo date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("F", strtotime(get_field('date_start', false, false))) . ', ' . date("Y", strtotime(get_field('date_end', false, false)));
                                    else:
                                        echo date("F", strtotime(get_field('date_start', false, false))) . ' ' . date("j", strtotime(get_field('date_start', false, false))) . ', ' . date("Y", strtotime(get_field('date_start', false, false)));
                                    endif;
                                    ?>
                                </div>
                                <div class="separator"></div>
                                <div class="place">
                                    <div class="icon-place"></div>
                                    <?php the_field('location') ?>
                                </div>
                            </div>
                            <h3><?php the_field('title_short') ?></h3>
                            <div class="excerpt"><?php echo strip_tags(get_field('stand_location')) ?></div>
                            <a href="<?php the_permalink() ?>" class="btn btn-yellow"><?php the_field('meet_us', 'option') ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php /* <!--a href="" class="s-events__item">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-news.png)"></div>
                    <div class="item-content">
                        <div class="meta">
                            <div class="date">
                                <div class="icon-calendar"></div>
                                August 8, 2022
                            </div>
                            <div class="separator"></div>
                            <div class="place">
                                <div class="icon-place"></div>
                                Rakhel Laifer Miller 17, Ashkelon
                            </div>
                        </div>
                        <h3>A ne<u>w</u> wo<u>r</u>ld unf<u>o</u>lds <u>f</u>or <u>s</u>ports<u>b</u>ooks</h3>
                        <div class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan felis, quis phasellus tempus vitae eget velit erat aliquam. Id nec eget fermentum donec.</div>
                        <div class="btn btn-yellow">register now</div>
                    </div>
                </a>
                <a href="" class="s-events__item">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-news.png)"></div>
                    <div class="item-content">
                        <div class="meta">
                            <div class="date">
                                <div class="icon-calendar"></div>
                                August 8, 2022
                            </div>
                            <div class="separator"></div>
                            <div class="place">
                                <div class="icon-place"></div>
                                Rakhel Laifer Miller 17, Ashkelon
                            </div>
                        </div>
                        <h3>s<u>b</u>c sum<u>m</u>it</h3>
                        <div class="excerpt">The SBC Summit Barcelona show is getting closer. We cant wait to see you again this September/ Were looking forward to sharing with you our new and exciting innovations over at stand C10.Reach out and set a meeting to find out what LSports can offer.</div>
                        <div class="btn btn-yellow">register now</div>
                    </div>
                </a>
                <a href="" class="s-events__item hide">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-news.png)"></div>
                    <div class="item-content">
                        <div class="meta">
                            <div class="date">
                                <div class="icon-calendar"></div>
                                August 8, 2022
                            </div>
                            <div class="separator"></div>
                            <div class="place">
                                <div class="icon-place"></div>
                                Rakhel Laifer Miller 17, Ashkelon
                            </div>
                        </div>
                        <h3>s<u>b</u>c sum<u>m</u>it</h3>
                        <div class="excerpt">The SBC Summit Barcelona show is getting closer. We cant wait to see you again this September/ Were looking forward to sharing with you our new and exciting innovations over at stand C10.Reach out and set a meeting to find out what LSports can offer.</div>
                        <div class="btn btn-yellow">register now</div>
                    </div>
                </a--> */ ?>
        </div>
    </div>
</section>
<?php // Past events functionality
/*
$past_events = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'events',
    'meta_query' => array( // past
        array(
            'key' => 'date_start',
            'value' => $today,
            'compare' => '<',
        ),
    ),
    'posts_per_page' => 4,
    'orderby' => 'meta_value',
    'meta_key' => 'date_start',
    'order' => 'DESC',
    'paged' => 1,
]);
*/
?>
<?php // Past events functionality
/*
    <section class="s-events-past bg-white">
        <div class="container">
            <h2><?php the_field('past_events_decorated', 'option') ?></h2>
            <div class="s-events-past__grid">
                <?php if ($past_events->have_posts()): ?>
                    <?php while ($past_events->have_posts()): ?>
                        <?php $past_events->the_post(); ?>
                        <?php get_template_part('event-past-card'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <a href="#load-more-events-past" class="s-events-past__btn btn-yellow" id="load-more-events-past"><?php the_field('see_more', 'option') ?></a>
        </div>
    </section>
*/
?>

<?php get_footer(); ?>
