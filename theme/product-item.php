<section class="s-prod-header bg-grey">
    <?php if (have_rows('header')): while (have_rows('header')) : the_row(); ?>
        <div class="container s-prod-header__grid">
            <div class="s-prod-header__content">
                <h1><?php the_sub_field('title') ?></h1>
                <h6><?php the_sub_field('subtitle') ?></h6>
                <?php $alt = strip_tags(get_sub_field('title')); ?>
                <div class="s-prod-header__image mobile-only">
    <?php
        $image = get_sub_field('image'); // Получаем массив изображения
        $acf_alt = get_sub_field('acf_alt');
        $alt_text = '';

        if (!empty($acf_alt)) {
            $alt_text = esc_attr($acf_alt);
        } elseif (!empty($image) && is_array($image)) {
            $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
        }
    ?>
    <img src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />
</div>
                <?php the_sub_field('description') ?>
                <p class="powered"><?php the_sub_field('powered') ?></p>
            </div>
             <div class="s-prod-header__image desktop-only">
    <?php
        $image = get_sub_field('image'); // Получаем массив изображения
        $acf_alt = get_sub_field('acf_alt');
        $alt_text = '';

        if (!empty($acf_alt)) {
            $alt_text = esc_attr($acf_alt);
        } elseif (!empty($image) && is_array($image)) {
            $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
        }
    ?>
    <img src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />
</div>
        </div>
    <?php endwhile; endif; ?>
    <?php if (have_rows('in_numbers')): while (have_rows('in_numbers')) : the_row(); ?>
 
	<div class="container s-prod-header__numbers-wrapper">
    <h3><?php the_sub_field('title'); ?></h3>
    <?php
    // Предполагаем, что 'number' это подполе повторителя и вы хотите подсчитать количество элементов в нем.
    $numbers = get_sub_field('number');
    $numbers_count = is_array($numbers) ? count($numbers) : 0;
    $numbers_class = $numbers_count > 5 ? 's-prod-header__numbers more-than-five' : 's-prod-header__numbers';
    ?>
    <div class="<?php echo $numbers_class; ?>">
        <?php if (have_rows('number')): while (have_rows('number')) : the_row(); ?>
            <div class="s-prod-header__number">
                <?php $image = get_sub_field('image'); ?>
                <?php if (!empty($image)) { ?>
                    <div class="number"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                <?php } else { ?>
                    <div class="number"><?php the_sub_field('digit') ?></div>
                <?php } ?>
                <div class="name"><?php the_sub_field('label') ?></div>
                <?php $text = get_sub_field('text');
                if (!empty($text)) { ?>
                     <p><?php echo $text; ?></p>
                 <?php } ?>
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

<?php if (get_field('show_products_slider')): ?>
    <section class="s-hp-products bg-white">
        <div class="container">
            <h2>
                <?php if (have_rows('products_heading')): while (have_rows('products_heading')) : the_row(); ?>
                    <div><?php the_sub_field('title_line'); ?></div>
                <?php endwhile; endif; ?>
            </h2>
            <div class="s-hp-products__carousel">
                <div class="s-hp-products__controls">
                    <div class="s-hp-products__prev arrow-after"></div>
                    <div class="s-hp-products__img-title">
                        <div class="s-hp-products__img-title-slides">
                            <?php if (have_rows('products')): while (have_rows('products')) : the_row(); ?>
                                <div>
                                    <div class="text-vertical"><?php the_sub_field('vertical_title'); ?></div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="s-hp-products__next arrow-after"></div>
                </div>
                <div class="s-hp-products__slides">
                    <?php if (have_rows('products')): while (have_rows('products')) : the_row(); ?>
                        <div class="s-hp-products__slide">
                            <div class="s-hp-products__slide-content">
                               <div class="s-hp-products__image only-image">
    <?php
        $image = get_sub_field('image'); // Получаем массив изображения
        $acf_alt = get_sub_field('acf_alt');
        $alt_text = '';

        if (!empty($acf_alt)) {
            $alt_text = esc_attr($acf_alt);
        } elseif (!empty($image) && is_array($image)) {
            $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
        }
    ?>
    <img src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />
</div>

                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('sport_type')): ?>
    <section class="s-prod-sports bg-white">
        <div class="container">
            <div class="s-prod-sports__grid">
                <?php while (have_rows('sport_type')) : the_row(); ?>
                    <div class="s-prod-sports__item">
                            <?php
        $image = get_sub_field('image'); // Получаем массив изображения
        $acf_alt = get_sub_field('acf_alt');
        $alt_text = '';

        if (!empty($acf_alt)) {
            $alt_text = esc_attr($acf_alt);
        } elseif (!empty($image) && is_array($image)) {
            $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
        }
    ?>
    <img src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />

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
