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

    <section class="s-text">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="text-heading"><?php the_title(); ?></h1>
    <div class="text-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
