<section class="s-prod-header bg-grey">
    <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
        <div class="container s-prod-header__grid">
            <div class="s-prod-header__content">
                <h2><?php the_sub_field('title') ?></h2>
                <h6><?php the_sub_field('subtitle') ?></h6>
                <div class="s-prod-header__image mobile-only">
                    <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('title') ?>">
                </div>
                <?php the_sub_field('description') ?>
                <p class="powered"><?php the_sub_field('powered') ?></p>
            </div>
            <div class="s-prod-header__image desktop-only">
                <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('title') ?>">
            </div>
        </div>
    <?php endwhile; endif; ?>
    <?php if (have_rows('in_numbers')): while (have_rows('in_numbers')) : the_row(); ?>
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
    <?php endwhile; endif; ?>
</section>

<?php if (have_rows('highlights_and_benefits')): while (have_rows('highlights_and_benefits')) : the_row(); ?>
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

<?php if (have_rows('qa')): while (have_rows('qa')) : the_row(); ?>
    <section class="s-prod-qa bg-grey">
        <div class="container">
            <h2><?php the_sub_field('title') ?></h2>
            <ul class="s-prod-qa__list">
                <?php if (have_rows('item')): while (have_rows('item')) : the_row(); ?>
                    <li class="s-prod-qa__item">
                        <div class="s-prod-qa__q"><?php the_sub_field('question') ?></div>
                        <div class="s-prod-qa__a"><?php the_sub_field('answer') ?></div>
                    </li>
                <?php endwhile; endif; ?>
            </ul>
            <?php if (get_sub_field('link')): ?>
                <div class="button-wrapper">
                    <a href="<?php the_sub_field('link') ?>" class="btn-yellow"><?php the_field('read_more', 'option') ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_rows('sport_type')): ?>
    <section class="s-prod-sports bg-white">
        <div class="container">
            <div class="s-prod-sports__grid">
                <?php while (have_rows('sport_type')) : the_row(); ?>
                    <div class="s-prod-sports__item">
                        <img src="<?php the_sub_field('image') ?>" alt="">
                        <h3><?php the_sub_field('title') ?></h3>
                        <?php if (have_rows('sports')): while (have_rows('sports')) : the_row(); ?>
                            <p><?php the_sub_field('title') ?></p>
                        <?php endwhile; endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php if (get_field('read_more_link')): ?>
            <div class="bg-grey button-wrapper">
                <a href="<?php the_field('read_more_link') ?>" class="btn-yellow"><?php the_field('read_more', 'option') ?></a>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
