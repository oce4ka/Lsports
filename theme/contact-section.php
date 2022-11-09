<section class="s-hp-contact-us bg-yellow">
    <h2>
        <?php
        $delay = 0;
        $delay_difference = 50;
        $offset = 0;
        $offset_difference = 100;
        ?>
        <?php if (have_rows('contact_title', 'option')): while (have_rows('contact_title', 'option')) : the_row(); ?>
            <?php
            $delay = $delay + $delay_difference;
            $offset = $offset + $offset_difference;
            ?>
            <div data-aos="fade-up"
                 data-aos-delay="<?php echo $delay; ?>"
                 data-aos-offset="<?php echo $offset; ?>"
                 data-aos-easing="ease-out"
                 data-aos-duration="600">
                <?php the_sub_field('contact_title_line', 'option'); ?>
            </div>
        <?php endwhile; endif; ?>
    </h2>
    <a href="<?php the_field('contact_link', 'option'); ?>" class="btn-yellow"><?php the_field('contact_us', 'option') ?></a>
</section>