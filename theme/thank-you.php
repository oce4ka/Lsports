<?php
/**
 * Template Name: Thank you
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
    <section class="s-thank-you">
        <h1><?php the_content(); ?></h1>
        <button onclick="history.back()" href="<?php the_field('take_me_back', 'option'); ?>" class="btn-yellow"><?php the_field('take_me_back', 'option'); ?></button>
    </section>
<?php get_footer();


