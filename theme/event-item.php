<section class="s-events-post">
    <div class="container">
        <h1><?php the_field('title'); ?></h1>
        <div class="s-events-post__wrapper">
            <div class="s-events-post__image">
                <div class="video-wrapper">
                    <div class="video-wrapper__overlay btn-play" style="background-image: url('<?php the_field('video_cover') ?>')"></div>
                    <div class="video-wrapper__iframe-wrap">
                        <div class="video-wrapper__iframe" data-url="<?php the_field('video_link') ?>"></div>
                    </div>
                </div>
            </div>
            <div class="s-events-post__detail">
                <div class="s-events-post__meta">
                    <div class="time">
                        <?php
                        if (get_field('date_end')):
                            echo date("l", strtotime(get_field('date_start', false, false))) . '-' . date("l", strtotime(get_field('date_end', false, false))) . ', ' . date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("M", strtotime(get_field('date_end', false, false)));
                        else:
                            echo date("l", strtotime(get_field('date_start', false, false))) . ', ' . date("F", strtotime(get_field('date_start', false, false))) . ' ' . date("j", strtotime(get_field('date_start', false, false))) . ' ' . date("Y", strtotime(get_field('date_start', false, false))) . ' at ' . get_field('time');
                        endif;
                        ?>
                        <br>
                        <a class="to-calendar">Add to calendar</a>
                    </div>
                    <div class="place">Rakhel Laifer Miller 17, Ashkelon</div>
                </div>
                <div class="s-events-post__map">
                    <img src="<?php the_field('map_image') ?>" alt="map"/>
                </div>
            </div>
        </div>
        <div class="s-events-post__content">
            <?php if (get_field('description')): ?>
                <h3><?php the_field('description', 'option') ?></h3>
                <?php the_field('description') ?>
            <?php endif; ?>
            <?php if (get_field('description')): ?>
                <h3><?php the_field('schedule', 'option') ?></h3>
                <?php the_field('schedule') ?>
            <?php endif; ?>
            <br>
            <button class="btn-yellow register-js-action">register now</button>
        </div>
    </div>
</section>

<section class="s-events-cta">
    <div class="container">
        <div class="s-events-cta__grid">
            <div>
                <div class="s-events-cta__date">
                    <div class="icon-calendar"></div>
                    <?php
                    if (get_field('date_end')):
                        echo date("l", strtotime(get_field('date_start', false, false))) . '-' . date("l", strtotime(get_field('date_end', false, false))) . ', ' . date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("M", strtotime(get_field('date_end', false, false)));
                    else:
                        echo date("l", strtotime(get_field('date_start', false, false))) . ', ' . date("F", strtotime(get_field('date_start', false, false))) . ' ' . date("j", strtotime(get_field('date_start', false, false))) . ' ' . date("Y", strtotime(get_field('date_start', false, false))) . ' at ' . get_field('time');
                    endif;
                    ?>
                </div>
                <h2><?php the_title(); ?></h2>
            </div>
            <div>

                <?php
                // todo: try this https://www.wpdecoder.com/php/add-to-calendar/
                // <button class="btn-gray">share</button>
                // <button class="btn-gray">add to calendar</button>
                ?>

                <div class="cta-dropdown center btn-gray dropdown-js-action">
                    share
                    <ul>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=NEWS-LINK" target="_blank" rel="nofollow">
                                <div class="facebook facebook--black"></div>
                            </a></li>
                        <li><a href="https://twitter.com/intent/tweet?url=NEWS-LINK&text=NEWS-TITLE" target="_blank" rel="nofollow">
                                <div class="twitter twitter--black"></div>
                            </a></li>
                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=NEWS-LINK" target="_blank" rel="nofollow">
                                <div class="linkedin linkedin--black"></div>
                            </a></li>
                        <li><a href="viber://forward?text=NEWS-LINK">
                                <div class="viber viber--black"></div>
                            </a></li>
                    </ul>
                </div>

                <?php /*
                    <div class="cta-dropdown btn-gray dropdown-js-action">
                        add to calendar
                        <ul>
                            <li><a href="#">
                                <div class="apple"></div>
                                <span>Apple</span></a></li>
                            <li><a href="#">
                                <div class="g-calendar"></div>
                                <span>Google</span></a></li>
                            <li><a href="#">
                                <div class="m-365"></div>
                                <span>MICROSOFT 365</span></a></li>
                            <li><a href="#">
                                <div class="outlook"></div>
                                <span>OUTLOOK</span></a></li>
                            <li><a href="#">
                                <div class="teams"></div>
                                <span>TEAMS</span></a></li>
                            <li><a href="#">
                                <div class="yahoo"></div>
                                <span>YAHOO</span></a></li>
                            <li><a href="#">
                                <div class="ical"></div>
                                <span>ICAL FILE</span></a></li>
                        </ul>
                    </div>
                */ ?>

                <button class="btn-yellow set-meeting-js-action">register now</button>
            </div>
        </div>
    </div>
</section>

<section class="modal register-modal hide">
    <div class="modal-overlay">
        <div class="logo-footer modal-logo"></div>
        <div class="modal-wrapper">
            <div class="modal-close register-modal-close"></div>
            <div class="modal-grid">
                <div class="modal-grid__left">
                    <div class="modal-grid__date">
                        <div class="icon-calendar"></div>
                        Monday, August 8 at 10:00 am
                    </div>
                    <div class="modal-grid__title">A new world unfolds for sportsbooks</div>
                </div>
                <div class="modal-grid__right">
                    <div class="modal-grid__label-form">Register Now</div>
                    <div class="s-contact modal-grid__form-wrapper">
                        <form class="wpcf7-form" action="">
                            <span class="wpcf7-form-control-wrap"><input type="text" placeholder="First Name*"></span>
                            <span class="wpcf7-form-control-wrap"><input type="text" placeholder="Last Name*"></span>
                            <span class="wpcf7-form-control-wrap"><input type="text" placeholder="Work Email*"></span>
                            <span class="wpcf7-form-control-wrap"><input type="text" placeholder="Company Name*"></span>
                            <span class="wpcf7-form-control-wrap"><input type="text" placeholder="Job Title*"></span>
                            <span class="wpcf7-form-control-wrap"><input type="text" placeholder="Phone number"></span>
                            <span class="wpcf7-form-control-wrap"><textarea name="" id="form" cols="30" rows="10" placeholder="Message" class="full-width"></textarea></span>
                            <input type="submit" class="btn-yellow" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$today = date("Ymd");
$posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'post',
    'category_name' => 'events',
    'meta_query' => array(
        array(
            'key' => 'date_start',
            'value' => $today,
            'compare' => '>',
        ),
    ),
));

if ($posts): ?>
    <section class="s-hp-news s-hp-news--event bg-white">
        <div class="s-hp-news__headings">
            <h2>N<u>e</u>xt Eve<u>n</u>ts</h2>
            <h6 class="arrow-after">SEE ALL events</h6>
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
                                                Virtual
                                            <?php else: ?>
                                                <?php the_field('location') ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="excerpt"><?php the_field('excerpt'); ?></div>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-read-more"><span class="text-vertical">register now</span></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php /*
            <!--div class="s-hp-news__controls">
                <div class="s-hp-news__arrow-prev arrow-after"></div>
                <div class="s-hp-news__dots"></div>
                <div class="s-hp-news__arrow-next arrow-after"></div>
            </div-->
            */ ?>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
