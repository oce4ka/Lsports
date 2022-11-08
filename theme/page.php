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
    <h1 class="text-heading"><?php the_title(); ?></h1>
    <div class="text-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
