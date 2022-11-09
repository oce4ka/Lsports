<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package LSport
 */

get_header();
?>

<?php if (has_category('products')) : ?>
    <?php get_template_part('product-post'); ?>
<?php elseif (has_category('events')): ?>
    <?php get_template_part('event-post'); ?>
<?php elseif (has_category('news')): ?>
    <?php get_template_part('news-post'); ?>
<?php else: ?>
    <?php get_template_part('text-post'); ?>
<?php endif; ?>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();
