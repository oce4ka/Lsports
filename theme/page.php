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

<section class="s-text">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container">
            <?php if (strpos($_SERVER['REQUEST_URI'], '/contactthankyou/') === false) : ?>
                <h1 class="s-text__heading"><?php the_title(); ?></h1>
            <?php endif; ?>
            <div class="s-text__content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();
