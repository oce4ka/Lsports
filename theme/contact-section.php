<section class="s-hp-contact-us bg-yellow">
    <h2>
        <?php
        $delay = 0;
        $delay_difference = 50;
        $offset = 0;
        $offset_difference = 50;

		$current_lang = pll_current_language();
        $contact_title = get_field('contact_title_'.$current_lang, 'option');
        ?>
        <div data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" data-aos-offset="<?php echo $offset; ?>">
            <?php echo $contact_title; ?>
        </div>
    </h2>
    <a href="<?php the_field('contact_link_'.$current_lang, 'option') ?>" class="btn-yellow"><?php the_field('contact_us_'.$current_lang, 'option') ?></a>
</section>