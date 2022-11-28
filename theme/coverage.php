<?php
/**
 * Template Name: Coverage
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

    <section class="s-prod-header bg-grey premium-racing no-border">
        <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
            <div class="container s-prod-header__grid">
                <div class="s-prod-header__content">
                    <h2><?php the_sub_field('title') ?></h2>
                    <h6><?php the_sub_field('subtitle') ?></h6>
                    <div class="s-prod-header__image mobile-only">
                        <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('title') ?>">
                    </div>
                    <?php the_sub_field('description') ?>
                    <p class="powered"><?php the_sub_field('powered') ?></p>
                </div>
                <div class="s-prod-header__image desktop-only">
                    <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('title') ?>">
                </div>
            </div>
        <?php endwhile; endif; ?>
        <?php if (have_rows('in_numbers')): while (have_rows('in_numbers')) : the_row(); ?>
            <div class="container s-prod-header__numbers-wrapper">
                <h3><?php the_sub_field('title') ?></h3>
                <div class="s-prod-header__numbers">
                    <?php if (have_rows('number')): while (have_rows('number')) : the_row(); ?>
                        <div class="s-prod-header__number">
                            <div class="number"><?php the_sub_field('digit') ?></div>
                            <div class="name"><?php the_sub_field('label') ?></div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </section>

<?php if (have_rows('highlights_and_benefits')): while (have_rows('highlights_and_benefits')) : the_row(); ?>
    <section class="s-cat-highlights bg-white">
        <div class="container">
            <h2 data-aos="fade-up"><?php the_sub_field('title') ?></h2>
            <ul class="s-cat-highlights__list">
                <?php if (have_rows('item')): while (have_rows('item')) : the_row(); ?>
                    <li class="s-cat-highlights__item"><?php the_sub_field('text') ?></li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_rows('subcategories')): while (have_rows('subcategories')) : the_row(); ?>
    <section class="s-racing-types bg-grey">
        <div class="container">
            <h2><?php the_sub_field('title') ?></h2>
            <p><?php the_sub_field('description') ?></p>
            <div class="s-racing-types__list">
                <?php if (have_rows('subcategory')): while (have_rows('subcategory')) : the_row(); ?>
                    <a href="<?php the_sub_field('link') ?>" class="s-racing-types__item bg-white">
                        <div class="s-racing-types__image">
                            <img src="<?php the_sub_field('image') ?>" alt="">
                        </div>
                        <h3><?php the_sub_field('title') ?></h3>
                    </a>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();


