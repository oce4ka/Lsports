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

<? php/* if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="text-heading"><?php the_title(); ?></h1>
    <div class="text-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; */ ?>

    <div class="popup">
        <div class="popup-content">
            <?php if (have_rows('vacancy')): ?>
                <?php while (have_rows('vacancy')) : the_row(); ?>
                    <div class="form-vacancy" id="<?php echo substr(base_convert(md5(get_sub_field('vacancy_name')), 16,32), 0, 12); ?>">
                        <h2><?php the_sub_field('vacancy_name') ?></h2>
                        <?php echo apply_shortcodes('[contact-form-7 id="' . get_sub_field('vacancy_form') . '"]') ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--h2>UI/UX Designer</h2>
            <form action="#">
                <input type="text"/>
                <input type="submit" value="SUBMIT APPLICATION"/>
            </form-->
        </div>
    </div>
    <section class="s-careers">
    <h1 class="text-we-are-hiring">We are hiring</h1>
    <ul class="list-careers">
        <?php if (have_rows('vacancy')): ?>
            <?php while (have_rows('vacancy')) : the_row(); ?>
                <li><a href="#<?php echo substr(base_convert(md5(get_sub_field('vacancy_name')), 16,32), 0, 12); ?>"><?php the_sub_field('vacancy_name') ?></a></li>
            <?php endwhile; ?>
        <?php endif; ?>

        <!--li><a href="#">QA</a></li>
        <li><a href="#">2D Artist</a></li>
        <li><a href="#">Economy Manager</a></li-->
    </ul>

<?php get_footer();
