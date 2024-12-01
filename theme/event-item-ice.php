<?php if (get_field('show_header')) : ?>
    <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
        <section class="s-event-ice-header bg-white" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container s-event-ice-header__grid">
                <h1 class="aos-animation-on-load"><?php the_sub_field('title') ?></h1>
                <div class="nav-social nav-social--event">
                    <?php if (get_sub_field('show_facebook_link')) : ?>
                    <a href="<?php the_sub_field('facebook_link') ?>" target="_blank" rel="nofollow" role="link">
                        <div class="facebook facebook--grey"></div>
                    </a>
                    <?php endif; ?>
                    <?php if (get_sub_field('show_x_link')) : ?>
                    <a href="<?php the_sub_field('x_link') ?>" target="_blank" rel="nofollow" role="link">
                        <div class="twitter twitter--grey"></div>
                    </a>
                    <?php endif; ?>
                    <?php if (get_sub_field('show_whatsapp_link')) : ?>
                    <a href="<?php the_sub_field('whatsapp_link') ?>" target="_blank" rel="nofollow" role="link">
                        <div class="whatsapp whatsapp--grey"></div>
                    </a>
                    <?php endif; ?>
                    <?php if (get_sub_field('show_linkedin_link')) : ?>
                    <a href="<?php the_sub_field('linkedin_link') ?>" target="_blank" rel="nofollow" role="link">
                        <div class="linkedin linkedin--grey"></div>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="description"><?php the_sub_field('description') ?></div>
                <div class="description-highlight"><?php the_sub_field('description_highlight') ?></div>
                <a href="#ice-modal<?php //echo get_sub_field('button_url') ?>" class="btn-yellow"><?php echo get_sub_field('button_name') ?></a>
                <img class="aos-animation-on-load" src="<?php echo get_sub_field('image') ?>"<?php echo !empty(get_sub_field('image_alt')) ? ' alt="' . get_sub_field('image_alt') . '"' : ''; ?> />
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_section_solutions')) : ?>
    <?php if (have_rows('section_solutions')): while (have_rows('section_solutions')) : the_row(); ?>
        <section class="s-solutions" style="background-color: <?php the_sub_field('color') ?>">
            <div class="container">
                <div data-aos="fade-up" class="aos-init aos-animate"><h2><?php the_sub_field('title') ?></h2></div>
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
                <h2 data-aos="fade-up" class="aos-init aos-animate">
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
                <a href="#ice-modal<?php //the_sub_field('button_url') ?>" class="btn-black"><?php the_sub_field('button_label') ?></a>
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
                    <h2 data-aos="fade-up" class="aos-init aos-animate"><?php the_sub_field('title') ?></h2>
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
                <a href="#ice-modal<?php // the_sub_field('button_url') ?>" class="btn-yellow"><?php the_sub_field('button_label') ?></a>
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

<?php include('event-carousel-part.php'); ?>

<?php if (get_field('show_section_popup')) : ?>
    <?php if (have_rows('section_popup')): while (have_rows('section_popup')) : the_row(); ?>
        <div class="modal ice-modal hide">
            <div class="modal-overlay" style="background-color: <?php the_sub_field('color_overlay') ?>">
                <div class="logo-footer modal-logo"></div>
                <div class="modal-wrapper" style="background-color: <?php the_sub_field('color') ?>">
                    <div class="modal-close register-modal-close"></div>
                    <h3 id="form-book-meeting"><?php the_sub_field('title'); ?></h3>
                    <div class="modal-grid">
                        <div class="content-wrapper">
                            <?php the_sub_field('form_code'); ?>
                        </div>
                        <div class="image-wrapper">
                            <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('image_alt'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
<?php endif; ?>

<script>
    (function ($) {
        // button on Event Ice page
        $('[href=#ice-modal]').on('click', function () {
            $('.ice-modal').removeClass('hide');

        });

        $('.ice-modal .modal-close').on('click', function () {
            $('.ice-modal').addClass('hide');
        });

        // aos animation on load on top of the page
        setTimeout(function () {
            $('.aos-animation-on-load').css({opacity: 1, transform: 'translateZ(0)'});
        }, 1)
    })(jQuery);
</script>
