<?php
/**
 * Template Name: Careers
 *
 * This is the template that displays Coverage Category.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>

<?php if (have_rows('positions')): while (have_rows('positions')) : the_row(); ?>
    <section class="s-about-positions">
        <div class="container s-about-positions__grid">
            <div class="s-about-positions__content">
                <h2><?php the_sub_field('title') ?></h2>
                <p><?php the_sub_field('description') ?></p>
            </div>
            <div class="s-about-positions__image">
                <img alt="<?php echo strip_tags(get_sub_field('title')) ?>" src="<?php the_sub_field('video_preview_image') ?>">
            </div>
            <div class="s-about-positions__gallery">
                <?php if (have_rows('gallery')): while (have_rows('gallery')) : the_row(); ?>
                    <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                <?php endwhile; endif; ?>
            </div>
            <!--a href="<?php the_sub_field('link') ?>" class="btn-yellow">see all positions</a-->
        </div>
    </section>
<?php endwhile; endif; ?>


<?php if (get_field('show_features')): ?>
    <?php if (have_rows('features')): while (have_rows('features')) : the_row(); ?>
        <section class="s-career-features bg-white">
            <div class="container">
                <h2><?php the_sub_field('title') ?></h2>
                <div class="s-career-features__grid">
                    <?php if (have_rows('feature')): while (have_rows('feature')) : the_row(); ?>
                        <div class="s-career-features__item">
                            <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('link')) ?>">
                            <div class="s-career-features__title"><?php the_sub_field('text') ?></div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_post')): ?>
    <?php if (have_rows('post')): while (have_rows('post')) : the_row(); ?>
        <section class="s-careers-blog bg-yellow">
            <div class="container">
                <div class="s-careers-blog__grid">
                    <a href="<?php the_sub_field('link') ?>" class="s-careers-blog__item">
                        <div class="image-wrapper" style="background-image: url(<?php the_sub_field('image') ?>)">
                            <div class="category"><?php the_sub_field('category') ?></div>
                        </div>
                        <div class="item-content">
                            <div class="meta">
                                <div class="date">
                                    <?php echo date("M", strtotime(get_sub_field('date', false, false))) . ' ' . date("j", strtotime(get_sub_field('date', false, false))) . ', ' . date("Y", strtotime(get_sub_field('date', false, false))) ?>
                                </div>
                            </div>
                            <h3 class="two-lines"><?php the_sub_field('heading') ?></h3>
                            <div class="excerpt three-lines"><?php the_sub_field('text') ?></div>
                            <div class="btn btn-yellow"><?php the_field('learn_more', 'option') ?></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_quotation')): ?>
    <?php if (have_rows('quotation')): while (have_rows('quotation')) : the_row(); ?>
        <section class="s-careers-cite bg-grey">
            <div class="container">
                <div class="s-careers-cite__image">
                    <img src="<?php the_sub_field('image') ?>" alt="">
                </div>
                <div class="s-careers-cite__content">
                    <p class="s-careers-cite__description">
                        <?php the_sub_field('quote') ?>
                    </p>
                    <div class="s-careers-cite__author"><?php the_sub_field('signature') ?></div>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (have_rows('career')): while (have_rows('career')) : the_row(); ?>
    <section class="s-comeet-catalog">
        <div class="container">
            <h2><?php the_sub_field('header') ?></h2>
            <div class="s-comeet-catalog__total"><strong class="s-comeet-catalog__total-number"></strong> <?php the_sub_field('open_positions_label') ?></div>
            <?php echo do_shortcode('[comeet_data]'); ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>
<?php get_footer();


