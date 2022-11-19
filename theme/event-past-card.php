<div class="s-events-past__item">
    <div class="meta">
        <div class="date">
            <div class="icon-calendar"></div>
            <?php
            if (get_field('date_end')):
                echo date("j", strtotime(get_field('date_start', false, false))) . '-' . date("j", strtotime(get_field('date_end', false, false))) . ' ' . date("F", strtotime(get_field('date_start', false, false))) . ', ' . date("Y", strtotime(get_field('date_end', false, false)));
            else:
                echo date("F", strtotime(get_field('date_start', false, false))) . ' ' . date("j", strtotime(get_field('date_start', false, false))) . ', ' . date("Y", strtotime(get_field('date_start', false, false)));
            endif;
            ?>
            <?php //echo the_permalink(); ?>
        </div>
        <div class="separator"></div>
        <div class="place">
            <div class="icon-place"></div>
            <?php the_field('address') ?>
        </div>
    </div>
    <h3><?php the_field('title') ?></h3>
    <div class="excerpt"><?php the_field('excerpt') ?></div>
    <div class="actions">
        <a href="#" class="watch">watch</a>
        <a href="#" class="listen">listen</a>
    </div>
</div>
