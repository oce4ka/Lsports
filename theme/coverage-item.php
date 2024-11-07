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
            <?php $current_lang = pll_current_language(); ?>
<a class="s-american__read-more arrow-after arrow-after__blue" href="#readmore"><?php the_field('read_more_'.$current_lang, 'option') ?></a>
            <div class="under-more"><?php the_field('content_under_more') ?></div>
        </div>
    </div>
</section>
<?php if (have_rows('in_numbers_coverage')): ?>
    <?php while (have_rows('in_numbers_coverage')) : the_row(); ?>
        <?php 
            $has_content = false;
            if (get_sub_field('title')) {
                $has_content = true;
            }
            if (have_rows('number')) {
                while (have_rows('number')) : the_row();
                    if (get_sub_field('digit') || get_sub_field('label')) {
                        $has_content = true;
                        break;
                    }
                endwhile;
                // Reset the rows to the beginning after breaking the loop
                reset_rows();
            }
        ?>
        <?php if ($has_content): ?>
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
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>




<?php if (get_field('coverage_table_title')): ?>
    <section class="s-text-coverage_table">
        <div class="container">
            <div class="text-content">
                <h3 style="text-align: center;"><?php echo do_shortcode(get_field('coverage_table_title')); ?></h3>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('coverage_table')): ?>
    <section class="s-text-coverage_table-renderedtable">
        <div class="container">
            <div class="text-content">
                <?php echo do_shortcode(get_field('coverage_table')); ?>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                AOS.refresh();
            }, 3000);
        });
    </script>
<?php endif; ?>

<?php if (get_field('coverage_table_title2')): ?>
    <section class="s-text-coverage_table-3">
        <div class="container">
            <div class="text-content">
                <h3 style="text-align: center;"><?php echo do_shortcode(get_field('coverage_table_title2')); ?></h3>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('coverage_table2')): ?>
    <section class="s-text-coverage_table-renderedtable">
        <div class="container">
            <div class="text-content">
                <?php echo do_shortcode(get_field('coverage_table2')); ?>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                AOS.refresh();
            }, 3000);
        });
    </script>
<?php endif; ?>


<?php if (get_field('coverage_table_title3')): ?>
    <section class="s-text-coverage_table-3">
        <div class="container">
            <div class="text-content">
                <h3 style="text-align: center;"><?php echo do_shortcode(get_field('coverage_table_title3')); ?></h3>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('coverage_table3')): ?>
    <section class="s-text-coverage_table-renderedtable">
        <div class="container">
            <div class="text-content">
                <?php echo do_shortcode(get_field('coverage_table3')); ?>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                AOS.refresh();
            }, 3000);
        });
    </script>
<?php endif; ?>




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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
</script>

