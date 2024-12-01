<?php // wp_enqueue_script('sticky-kit.min.js', get_template_directory_uri() . '/js/atc.min.js', false, '1.0', 'all'); ?>

<section class="s-events-post">
    <div class="container">
        <h1><?php the_field('title'); ?></h1>
        <div class="s-events-post__wrapper">
            <?php if (get_field('image_without_video')): ?>
                <div class="s-events-post__image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>)"></div>
            <?php else: ?>
                <div class="s-events-post__image">
                    <div class="video-wrapper">
                        <div class="video-wrapper__overlay btn-play" style="background-image: url('<?php the_field('video_cover') ?>')"></div>
                        <div class="video-wrapper__iframe-wrap">
                            <div class="video-wrapper__iframe" data-url="<?php the_field('video_link') ?>"></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="s-events-post__detail">
                <div class="s-events-post__meta">
                    <div class="time">
                        <?php
                        if (get_field('date_end')):
                            echo date("l", strtotime(get_field('date_start', false, false))) . '-' . date("l", strtotime(get_field('date_end', false, false))) . ', ' . date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("M", strtotime(get_field('date_end', false, false))) . ' ' . date("Y", strtotime(get_field('date_end', false, false)));
                        else:
                            echo date("l", strtotime(get_field('date_start', false, false))) . ', ' . date("F", strtotime(get_field('date_start', false, false))) . ' ' . date("j", strtotime(get_field('date_start', false, false))) . ' ' . date("Y", strtotime(get_field('date_start', false, false))) . ' at ' . get_field('time');
                        endif;
                        ?>
                        <!-- <a class="to-calendar">--><?php //the_field('add_to_calendar', 'option') ?><!--</a>-->

                        <? /*
                        <div title="Add to Calendar" class="to-calendar addeventatc">
                            <?php the_field('add_to_calendar', 'option') ?>
                            <?php
                            if (get_field('date_end')): ?>
                                <span class="start">
                                <?php echo
                                    date("d", strtotime(get_field('date_start', false, false))) . '/' .
                                    date("m", strtotime(get_field('date_start', false, false))) . '/' .
                                    date("Y", strtotime(get_field('date_start', false, false))) . ' ' . get_field('time'); ?>
                                </span>
                                <span class="end">
                                <?php echo
                                    date("d", strtotime(get_field('date_end', false, false))) . '/' .
                                    date("m", strtotime(get_field('date_end', false, false))) . '/' .
                                    date("Y", strtotime(get_field('date_end', false, false))) . ' ' . get_field('time'); ?>
                                </span>

                            <?php else: ?>
                                <span class="start">
                                <?php echo
                                    date("d", strtotime(get_field('date_start', false, false))) . '/' .
                                    date("m", strtotime(get_field('date_start', false, false))) . '/' .
                                    date("Y", strtotime(get_field('date_start', false, false))) . ' ' . get_field('time'); ?>
                                </span>
                            <?php endif; ?>
                            <span class="timezone">America/Los_Angeles</span>
                            <span class="title"><?php the_title() ?></span>
                            <span class="description"><?php the_field('excerpt') ?></span>
                            <span class="location"><?php the_field('location') ?> <?php the_field('address') ?></span>
                        </div> <? /*/ ?>
                    </div>
                    <div class="place"><?php the_field('address') ?></div>
                </div>
                <div class="s-events-post__map" style="background-image: url(<?php the_field('map_image') ?>)"></div>
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
<!--            <br>-->
<!--            <a href="--><?php //the_field('set_a_meeting_link', 'option'); ?><!--" class="btn-yellow">--><?php //the_field('meet_us', 'option'); ?><!--</a>-->
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
                        echo date("l", strtotime(get_field('date_start', false, false))) . '-' . date("l", strtotime(get_field('date_end', false, false))) . ', ' . date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("M", strtotime(get_field('date_end', false, false))) . ' ' . date("Y", strtotime(get_field('date_end', false, false)));
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
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank" rel="nofollow">
                                <div class="facebook facebook--black">Share via facebook</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title() ?>" target="_blank" rel="nofollow">
                                <div class="twitter twitter--black">Share via twitter</div>
                            </a>
                        </li>
                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>" target="_blank" rel="nofollow">
                                <div class="linkedin linkedin--black">Share via linkedin</div>
                            </a>
                        </li>
                        <li>
                            <a href="whatsapp://send?text=<?php the_permalink() ?> <?php the_title() ?>" data-action="share/whatsapp/share">
                                <div class="whatsapp whatsapp--black">Share via Whatsapp</div>
                            </a>
                        </li>
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

                <?php /* <button class="btn-yellow register-js-action"><?php the_field('register_now', 'option'); ?></button> */ ?>
            </div>
        </div>
    </div>
</section>

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

<?php include('event-carousel-part.php'); ?>
