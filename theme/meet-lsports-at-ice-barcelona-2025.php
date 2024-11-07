<?php
/**
 * Template Name: Meet Lsports at ice Barcelona 2025
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
<?php if (get_field('show_header')) : ?>
    <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
        <section class="s-prod-header no-border bg-white event-ice">
            <div class="container s-prod-header__grid">
                <div class="s-prod-header__content">
                    <?php if (get_sub_field('title')): ?>
                        <h1><?php the_sub_field('title') ?></h1>
                    <?php else: ?>
                        <h1><?php the_title() ?></h1>
                    <?php endif; ?>
                    <div class="nav-social nav-social--post">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/" target="_blank" rel="nofollow" role="link">
                            <div class="facebook"></div>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/&amp;text=LSports Secures Best Real-Time Sports Data Provider Award at SIGMA East Europe 2024" target="_blank" rel="nofollow" role="link">
                            <div class="twitter twitter--black"></div>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/&amp;text=LSports Secures Best Real-Time Sports Data Provider Award at SIGMA East Europe 2024" target="_blank" rel="nofollow" role="link">
                            <div class="twitter"></div>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.lsports.eu/lsports-secures-best-real-time-sports-data-provider-award-at-sigma-east-europe-2024/" target="_blank" rel="nofollow" role="link">
                            <div class="linkedin linkedin--black"></div>
                        </a>
                    </div>
                    <div class="s-prod-header__image mobile-only">
                        <img src="<?php echo get_sub_field('image') ?>"<?php echo !empty(get_sub_field('image_alt')) ? ' alt="' . get_sub_field('image_alt') . '"' : ''; ?> />
                    </div>
                    <?php the_sub_field('description') ?>
                    <h6><?php the_sub_field('description_highlight') ?></h6>
                    <a href="<?php echo get_sub_field('button_url') ?>" class="btn-yellow"><?php echo get_sub_field('button_name') ?></a>
                </div>
                <div class="s-prod-header__image desktop-only">
                    <img src="<?php echo get_sub_field('image') ?>"<?php echo !empty(get_sub_field('image_alt')) ? ' alt="' . get_sub_field('image_alt') . '"' : ''; ?> />
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();


