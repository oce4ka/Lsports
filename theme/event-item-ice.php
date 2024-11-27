<?php if (get_field('show_header')) : ?>
    <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
        <section class="s-event-ice-header bg-white" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container s-event-ice-header__grid">
                <h1><?php the_sub_field('title') ?></h1>
                <div class="nav-social nav-social--event">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/" target="_blank" rel="nofollow" role="link">
                        <div class="facebook facebook--grey"></div>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/&amp;text=LSports Secures Best Real-Time Sports Data Provider Award at SIGMA East Europe 2024" target="_blank" rel="nofollow" role="link">
                        <div class="twitter twitter--grey"></div>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/&amp;text=LSports Secures Best Real-Time Sports Data Provider Award at SIGMA East Europe 2024" target="_blank" rel="nofollow" role="link">
                        <div class="whatsapp whatsapp--grey"></div>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/" target="_blank" rel="nofollow" role="link">
                        <div class="linkedin linkedin--grey"></div>
                    </a>
                </div>
                <div class="description"><?php the_sub_field('description') ?></div>
                <div class="description-highlight"><?php the_sub_field('description_highlight') ?></div>
                <a href="<?php echo get_sub_field('button_url') ?>" class="btn-yellow"><?php echo get_sub_field('button_name') ?></a>
                <img src="<?php echo get_sub_field('image') ?>"<?php echo !empty(get_sub_field('image_alt')) ? ' alt="' . get_sub_field('image_alt') . '"' : ''; ?> />
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_section_solutions')) : ?>
    <?php if (have_rows('section_solutions')): while (have_rows('section_solutions')) : the_row(); ?>
        <section class="s-solutions" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container">
                <h2>
                    <?php the_sub_field('title') ?>
                </h2>
                <?php if (have_rows('solution')): ?>
                    <ul class="s-solutions__features">
                        <?php while (have_rows('solution')): the_row(); ?>
                            <li class="s-solutions__feature">
                                <img src="<?php the_sub_field('image') ?>" alt="<?php echo acf_esc_html(get_sub_field('image_alt')); ?>">
                                <h3><?php the_sub_field('title') ?></h3>
                                <p><?php the_sub_field('description') ?></p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_section_description')) : ?>
    <?php if (have_rows('section_description')): while (have_rows('section_description')) : the_row(); ?>
        <section class="s-expectations bg-white" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container">
                <h2>
                    <?php the_sub_field('title') ?>
                </h2>
                <div class="s-expectations__grid">
                    <div class="s-expectations__image">
                        <img src="<?php the_sub_field('image') ?>" alt="<?php echo acf_esc_html(get_sub_field('image_alt')); ?>">
                    </div>
                    <div class="s-expectations__text">
                        <?php the_sub_field('description') ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_section_video')) : ?>
    <?php if (have_rows('section_video')): while (have_rows('section_video')) : the_row(); ?>
        <section class="s-video bg-yellow" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container">
                <div class="s-video__video-wrapper">
                    <iframe width="1200" height="674" src="<?php the_sub_field('video_url') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <img class="s-video__placeholder" src="<?php the_sub_field('image') ?>" alt="<?php echo acf_esc_html(get_sub_field('image_alt')); ?>">
                </div>
                <a href="<?php the_sub_field('button_url') ?>" class="btn-black"><?php the_sub_field('button_label') ?></a>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>
<script>
    (function ($) {
        $('.s-video__placeholder').click(function () {
            $(this).hide();
        })
    })(jQuery);
</script>

<?php if (get_field('show_section_stay_tuned')) : ?>
    <?php if (have_rows('section_stay_tuned')): while (have_rows('section_stay_tuned')) : the_row(); ?>
        <section class="s-stay-tuned bg-grass" style="background-color: <?php the_sub_field('color') ?>">
            <div class="s-stay-tuned__grid">
                <div class="s-stay-tuned__banner" style="background-image: url(<?php the_sub_field('image_background') ?>)">
                    <h2><?php the_sub_field('title') ?></h2>
                </div>
                <?php if (have_rows('posts')): ?>
                    <?php $n = 0 ?>
                    <?php while (have_rows('posts')): the_row(); ?>
                        <?php $n++; ?>
                        <div class="s-stay-tuned__post post-<?php echo $n ?>"><?php the_sub_field('title') ?></div>
                    <?php endwhile; ?>
                    <?php $n = 0 ?>
                <?php endif; ?>
                <div class="img-wrapper">
                    <img src="<?php the_sub_field('image_of_post') ?>" alt="<?php echo acf_esc_html(get_sub_field('image_alt')); ?>">
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_section_team')) : ?>
    <?php if (have_rows('section_team')): while (have_rows('section_team')) : the_row(); ?>
        <section class="s-ice-team bg-grey" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container">
                <h2 data-aos="fade-up" class="aos-init aos-animate"><?php the_sub_field('title') ?></h2>
                <?php if (have_rows('features')): ?>
                    <ul class="s-ice-team__list">
                        <?php while (have_rows('features')): the_row(); ?>
                            <li class="s-ice-team__item"><?php the_sub_field('feature') ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if (have_rows('members')): ?>
                    <ul class="s-ice-team__members">
                        <?php while (have_rows('members')): the_row(); ?>
                            <li class="s-ice-team__member">
                                <div class="img-wrapper"><img src="<?php the_sub_field('image') ?>" alt="<?php echo acf_esc_html(get_sub_field('image_alt')); ?>"></div>
                                <div class="s-ice-team__social">
                                    <a href="<?php the_sub_field('linkedin_url') ?>" class="linkedin"></a>
                                    <a href="<?php the_sub_field('email') ?>" class="email"></a>
                                </div>
                                <h6><?php the_sub_field('name') ?></h6>
                                <div class="role"><?php the_sub_field('title') ?></div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <a href="<?php the_sub_field('button_url') ?>" class="btn-yellow"><?php the_sub_field('button_label') ?></a>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_section_sportbooks')) : ?>
    <?php if (have_rows('section_sportbooks')): while (have_rows('section_sportbooks')) : the_row(); ?>
        <section class="s-sportbooks bg-white" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container">
                <h2><?php the_sub_field('title') ?></h2>
                <h3><?php the_sub_field('description') ?></h3>
                <?php if (have_rows('logos')): ?>
                    <ul class="s-sportbooks__logos">
                        <?php while (have_rows('logos')): the_row(); ?>
                            <li class="s-sportbooks__logo">
                                <img src="<?php the_sub_field('image') ?>" alt="<?php echo acf_esc_html(get_sub_field('image_alt')); ?>">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php
$today = date("Ymd");
$posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'post',
    'category_name' => 'events2',
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
    <section class="s-hp-news s-hp-news--event bg-grey" style="background-color: <?php the_sub_field('color') ?>">
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
                            <a href="<?php the_permalink(); ?>" class="btn-read-more"><span class="text-vertical"><?php the_field('register_now', 'option'); ?></span></a>
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


<?php echo do_shortcode('[sg_popup id=6642]'); ?>


<h3 id="form-book-meeting">BOOK A MEETING</h3>
<iframe src="https://www2.lsports.eu/l/893471/2024-01-08/qj73v" width="100%" height="740" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>


<div class="modal register-modal hide">
    <div class="modal-overlay">
        <div class="logo-footer modal-logo"></div>
        <div class="modal-wrapper">
            <div class="modal-close register-modal-close"></div>
            <div class="modal-grid">
                <div class="modal-grid__headings">
                    <div class="modal-grid__date">
                        <div class="icon-calendar"></div>
                        <?php
                        if (get_field('date_end')):
                            echo date("l", strtotime(get_field('date_start', false, false))) . '-' . date("l", strtotime(get_field('date_end', false, false))) . ', ' . date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("M", strtotime(get_field('date_end', false, false))) . ' ' . date("Y", strtotime(get_field('date_end', false, false)));
                        else:
                            echo date("l", strtotime(get_field('date_start', false, false))) . ', ' . date("F", strtotime(get_field('date_start', false, false))) . ' ' . date("j", strtotime(get_field('date_start', false, false))) . ' ' . date("Y", strtotime(get_field('date_start', false, false))) . ' at ' . get_field('time');
                        endif;
                        ?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="modal-grid__form s-contact">
                    <div class="modal__form-heading"><?php the_field('register_now', 'option'); ?></div>
                    <?php echo do_shortcode('[contact-form-7 id="539"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>