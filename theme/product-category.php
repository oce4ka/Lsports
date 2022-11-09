<?php
/**
 * Template Name: Product Category
 *
 * This is the template that displays Product Category.
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

<?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
    <section class="s-cat-header bg-yellow">
        <div class="container">
            <div class="s-cat-header__content">
                <h2><?php the_sub_field('title') ?></h2>
                <h6><?php the_sub_field('subtitle') ?></h6>
                <p><?php the_sub_field('description') ?></p>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>


<?php if (have_rows('category_items')): while (have_rows('category_items')) : the_row(); ?>
    <section class="s-cat-features bg-grey">
        <div class="container">
            <?php (get_sub_field('alternative_decoration')) ? $decor_number = 5 : $decor_number = 1; ?>
            <?php if (have_rows('category_item')): while (have_rows('category_item')) : the_row(); ?>
                <div data-aos="fade-up"
                     data-aos-delay="50"
                     data-aos-offset="10"
                     data-aos-duration="600" class="s-cat-features__feature">
                    <div class="s-cat-features__content">
                        <h2><?php the_sub_field('title') ?></h2>
                        <p><?php the_sub_field('description') ?></p>
                        <a href="<?php the_sub_field('link') ?>" class="btn-learn-more"><?php the_field('learn_more', 'option') ?></a>
                    </div>
                    <div class="s-cat-features__image decor-<?php echo $decor_number ?>"><img src="<?php the_sub_field('image') ?>" alt=""></div>
                </div>
                <?php
                $decor_number++;
                if (get_sub_field('alternative_decoration')) {
                    if ($decor_number == 8) {
                        $decor_number = 5;
                    }
                } else {
                    if ($decor_number == 5) {
                        $decor_number = 1;
                    }
                }
                ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (!get_field('hide_highlights_and_benefits_section')): ?>
    <?php if (have_rows('highlights_and_benefits')): while (have_rows('highlights_and_benefits')) : the_row(); ?>
        <section class="s-cat-highlights bg-white">
            <div class="container">
                <h2 data-aos="fade-up"
                    data-aos-delay="50"
                    data-aos-offset="10"
                    data-aos-duration="600"><?php the_sub_field('title') ?></h2>
                <ul class="s-cat-highlights__list">
                    <?php if (have_rows('item')): while (have_rows('item')) : the_row(); ?>
                        <li class="s-cat-highlights__item"><?php the_sub_field('text') ?></li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (!get_field('hide_solutions_section')): ?>
    <?php if (have_rows('solutions')): while (have_rows('solutions')) : the_row(); ?>
        <section class="s-cat-solutions bg-white">
            <div class="container">
                <h2 data-aos="fade-up"
                    data-aos-delay="50"
                    data-aos-offset="10"
                    data-aos-duration="600"><?php the_sub_field('title') ?></h2>
                <ul class="s-cat-solutions__list">
                    <?php if (have_rows('solution')): while (have_rows('solution')) : the_row(); ?>
                        <li class="s-cat-solutions__item"><?php the_sub_field('item') ?></li>
                    <?php endwhile; endif; ?>
                </ul>
                <a href="<?php the_sub_field('link') ?>" class="btn-yellow"><?php the_sub_field('button_label') ?></a>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();


