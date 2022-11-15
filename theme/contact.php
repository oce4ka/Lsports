<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays page Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>

    <section class="s-contact bg-grey">
        <?php if (have_rows('left_column')): while (have_rows('left_column')) :
        the_row(); ?>
        <div class="container s-contact__grid">
            <div class="s-contact__content-form">
                <h1><?php the_sub_field('title') ?></h1>
                <h2><?php the_sub_field('subtitle') ?></h2>
                <p><?php the_sub_field('description') ?></p>
                <div class="s-contact__form">
                    <?php echo do_shortcode('[contact-form-7 id="347"]') ?>
<!--                    <input type="text" placeholder="First name*">-->
<!--                    <input type="text" placeholder="Last name">-->
<!--                    <input type="text" placeholder="Email*">-->
<!--                    <input type="text" placeholder="Phone*">-->
<!--                    <select class="full-width" name="" id="">-->
<!--                        <option value="Country*">Country*</option>-->
<!--                    </select>-->
<!--                    <input type="text" placeholder="Skype">-->
<!--                    <input type="text" placeholder="Telegram">-->
<!--                    <textarea class="full-width" placeholder="Message*"></textarea>-->
<!--                    <div class="btn-yellow">Get in touch</div>-->
                </div>
            </div>
            <?php endwhile;
            endif; ?>
            <?php if (have_rows('right_column')): while (have_rows('right_column')) :
            the_row(); ?>
            <div class="s-contact__content">
                <?php if (have_rows('list')): while (have_rows('list')) :the_row(); ?>
                    <h2><?php the_sub_field('title') ?></h2>
                    <ul>
                        <?php if (have_rows('list_item')): while (have_rows('list_item')) :the_row(); ?>
                            <li><?php the_sub_field('text') ?></li>
                        <?php endwhile;endif; ?>
                    </ul>
                <?php endwhile;endif; ?>
            </div>
        </div>
    <?php endwhile;
    endif; ?>
    </section>

<?php get_footer();
