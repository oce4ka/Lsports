<section class="s-american bg-white">
    <div class="s-american__header" style="background-image: url(<?php the_field('main_banner') ?>)">
        <div class="container">
            <h1><?php the_field('title') ?></h1>
            <h2><?php the_field('subtitle') ?></h2>
        </div>
    </div>
    <div class="s-american__content">
        <div class="container">
            <?php the_field('excerpt') ?>
            <a class="s-american__read-more arrow-after arrow-after__blue" href="#readmore"><?php the_field('read_more', 'option') ?></a>
            <div class="under-more"><?php the_field('content_under_more') ?></div>
        </div>
    </div>
</section>
<?php if (have_rows('in_numbers_coverage')): while (have_rows('in_numbers_coverage')) : the_row(); ?>
    <section class="s-prod-header bg-grey in-numbers-only">
        <div class="container s-prod-header__numbers-wrapper">
            <h3><?php the_sub_field('title') ?></h3>
            <div class="s-prod-header__numbers">
                <?php if (have_rows('number')): while (have_rows('number')) : the_row(); ?>
                    <div class="s-prod-header__number">
                        <div class="number"><?php the_sub_field('digit') ?></div>
                        <div class="name"><?php the_sub_field('label') ?></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php if (have_rows('highlights_and_benefits_coverage')): while (have_rows('highlights_and_benefits_coverage')) : the_row(); ?>
    <section class="s-cat-highlights bg-white">
        <div class="container">
            <h2 data-aos="fade-up"><?php the_sub_field('title') ?></h2>
            <ul class="s-cat-highlights__list">
                <?php if (have_rows('item')): while (have_rows('item')) : the_row(); ?>
                    <li class="s-cat-highlights__item"><?php the_sub_field('text') ?></li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </section>
<?php endwhile; endif; ?>
