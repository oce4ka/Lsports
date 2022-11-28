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
    <?php get_template_part('product-item'); ?>
<?php elseif (has_category('events')): ?>
    <?php get_template_part('event-item'); ?>
<?php elseif (has_category('coverage')): ?>
    <?php get_template_part('coverage-item'); ?>
<?php elseif (has_category('news') || has_category('article') || has_category('blog-post') || has_category('press-release') || has_category('update')): ?>
    <?php get_template_part('news-item'); ?>
<?php else: ?>
    <?php get_template_part('text-post'); ?>
<?php endif; ?>

<?php //if (get_field('add_contact_section')) get_template_part('contact-section'); ?>
<?php get_template_part('contact-section'); ?>

<?php get_footer();
