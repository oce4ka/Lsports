<?php
/**
 * Template Name: Position
 *
 * This is the template that displays Position page.
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

<?php echo do_shortcode('[comeet_data]'); ?>

<?php get_template_part('contact-section'); ?>

<?php get_footer();


