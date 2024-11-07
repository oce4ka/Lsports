<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
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

    <section class="">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="s-text__content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <section class="page1374 s-prod-header">
        <div class="container">
            <div class="left-block">
                <?php the_field('left_block') ?>
            </div>
            <div class="right-block">
                <?php the_field('right_block') ?>
            </div>
        </div>
    </section>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();
