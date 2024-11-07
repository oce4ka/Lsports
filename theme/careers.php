<?php
/**
 * Template Name: Careers
 *
 * This is the template that displays Coverage Category.
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

<?php if (have_rows('positions')): while (have_rows('positions')) : the_row(); ?>
    <section class="s-about-positions">
        <div class="container s-about-positions__grid">
            <div class="s-about-positions__content">
                <h1><?php the_sub_field('title') ?></h1>
                <p><?php the_sub_field('description') ?></p>
            </div>
            <div class="s-about-positions__image">
                <img alt="<?php echo strip_tags(get_sub_field('title')) ?>" src="<?php the_sub_field('video_preview_image') ?>">
            </div>
			
						          <div class="award_team">
    <p>AWARD WINNING TEAM</p>
    <div class="award_team_images">
        <img src="/wp-content/uploads/BDi-code.png" alt="BDi code" class="image-bdi">
        <img src="/wp-content/uploads/Duns_100.png" alt="DUNS 100" class="image-duns">
    </div>
</div>
			
			
            <div class="s-about-positions__gallery four-images">
                <?php if (have_rows('gallery')): while (have_rows('gallery')) : the_row(); ?>
                    <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('title')) ?>">
                <?php endwhile; endif; ?>
            </div>
            <!--a href="<?php the_sub_field('link') ?>" class="btn-yellow">see all positions</a-->
        </div>
    </section>
<?php endwhile; endif; ?>

<section class="s-career-features2 bg-white">

<div class="rating-blockgd">

    <div class="left-blockgd">
        <div class="gd-label">
  <span class="gdh3" style="display:flex;align-items:center;"><span class="rating_icon_class" style="display:inline-block">
<img style="max-width:170px;height:42px" src="https://www.lsports.eu/wp-content/uploads/glassdoor_lg.svg"></span>
<span class="gdh4">Rating</span></span>
         </div>

     <div class="stars">
<span class="star_reviews_icon">
                              <div class="Box__Container-vw10v2-0 cKWSxf">
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Unfilled-pkcl3w-1 HCqPk krjrmM"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Filled-pkcl3w-2 HCqPk ebpkzz" style="clip-path:inset(0px 0% 0px 0px)"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                  </div><div class="Box__Container-vw10v2-0 cKWSxf">
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Unfilled-pkcl3w-1 HCqPk krjrmM"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Filled-pkcl3w-2 HCqPk ebpkzz" style="clip-path:inset(0px 0% 0px 0px)"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                  </div><div class="Box__Container-vw10v2-0 cKWSxf">
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Unfilled-pkcl3w-1 HCqPk krjrmM"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Filled-pkcl3w-2 HCqPk ebpkzz" style="clip-path:inset(0px 0% 0px 0px)"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                  </div><div class="Box__Container-vw10v2-0 cKWSxf">
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Unfilled-pkcl3w-1 HCqPk krjrmM"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Filled-pkcl3w-2 HCqPk ebpkzz" style="clip-path:inset(0px 0% 0px 0px)"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                  </div><div class="Box__Container-vw10v2-0 cKWSxf">
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Unfilled-pkcl3w-1 HCqPk krjrmM"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                        <svg viewBox="0 0 14 14" class="FilledSvg-pkcl3w-0 FilledSvg__Filled-pkcl3w-2 HCqPk ebpkzz" style="clip-path: inset(0px 38% 0px 0px);"><path fill="none" d="M6.826 10.743l-3.28 1.724a.5.5 0 0 1-.725-.528l.627-3.65a.5.5 0 0 0-.144-.443L.65 5.26a.5.5 0 0 1 .277-.853l3.666-.533a.5.5 0 0 0 .377-.273L6.61.279a.5.5 0 0 1 .896 0L9.147 3.6a.5.5 0 0 0 .376.273l3.666.533a.5.5 0 0 1 .277.853l-2.653 2.586a.5.5 0 0 0-.144.442l.627 3.651a.5.5 0 0 1-.726.528l-3.279-1.724a.5.5 0 0 0-.465 0z"></path></svg>
                  </div>
                          </span>
    </div>
      </div>

 
    <div class="right-block">
<div class="new-button"> <a href="#reviews" class="btn-yellow" tabindex="-1" role="link">&nbsp&nbsp&nbsp&nbsp READ ALL REVIEWS <span class="long-arrow">&nbsp⟶&nbsp&nbsp&nbsp&nbsp</span></a> </div>


</div>

</div>

</section>

<?php if (have_rows('career')): while (have_rows('career')) : the_row(); ?>
    <section class="s-comeet-catalog">
        <div class="container">
            <h2><?php the_sub_field('header') ?></h2>
            <div class="s-comeet-catalog__total"><strong class="s-comeet-catalog__total-number"></strong> <?php the_sub_field('open_positions_label') ?></div>
            <?php echo do_shortcode('[comeet_data]'); ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<div class="comeet-social-block">
    <script type="comeet-social" data-css-url="https://www.lsports.eu/wp-content/themes/LSport/css/custom-comeet-career.css"></script>
</div>


  <style>
.s-career-h2 {
     margin-bottom: 1px !important;
 }
.s-career-features {
    padding-top: 100px;
}

    @media (max-width: 1300px) {
.s-career-h2 {
     margin-bottom: 0.1vw !important;
}
}

@media (max-width: 768px) {
.s-career-h2 {
     margin-bottom: 4.68vw !important;
}

}


.video-slider-block .cover::before {
    content: '';
    display: block;
    width: 36px;
    height: 36px;
    background-color: #DCF64E;
    border-radius: 50px;
    position: absolute;
    border: 1px solid;
    left: 0;
    right: 0;
    top: 50%;
    margin-left: auto;
    margin-right: auto;
    transform: translateY(-50%);
}


   .video-slider-block .cover::after {
    content: '';
    display: block;
    width: 13px;
    height: 9px;
    background-color: transparent;
    position: absolute;
    border-left: 13px solid;
    border-top: 9px solid transparent;
    border-bottom: 9px solid transparent;
    left: 0;
    right: 0;
    top: 50%;
    margin-left: auto;
    margin-right: auto;
    transform: translate(3px,-50%);
}

</style>

 <script src="https://widgets.widg.io/widgio-elements.js" defer></script> 
    <section  id="reviews" class="s-career-features bg-white">
    <div class="container">
              <h2 class="s-career-h2">LSport<u>s</u> reviews</h2>
 <glassdoor-reviews widgetid="12117" class="widgio-widget"></glassdoor-reviews> 

</div>
   </section>

<?php $video_list = get_field('video'); ?>
<?php if (!empty($video_list)) { ?>
    <div class="video-slider-block bg-white">
        <div class="container">
            <div class="video-slider owl-carousel" data-id="<?php echo $post->ID; ?>">
                <?php foreach ($video_list as $key => $video) {  ?>
                   <div class="video-item" data-key="<?php echo $key; ?>">
                     <div class="cover">
                        <?php if (isset($video['cover']) && !empty($video['cover'])) { ?>
                            <img src="<?php echo $video['cover']['url']; ?>" alt="<?php echo $video['cover']['alt']; ?>">
                        <?php } else { ?>
                            <img src="/wp-content/uploads/video_cover_noimg.jpg" alt="no image">
                        <?php } ?>
                    </div>
                    <?php if (isset($video['title']) && !empty($video['title'])) { ?>
                        <div class="title-block">
                            <h2><?php echo $video['title']; ?></h2>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>

<div id="video-bg">
    <div class="video-popup">
        <div class="embed-container"></div>
        <div class="close-video-popup">&times;</div>
    </div>
</div>

<?php } ?>

<?php if (get_field('show_features')): ?>
    <?php if (have_rows('features')): while (have_rows('features')) : the_row(); ?>
        <section class="s-career-features bg-white">
            <div class="container">
                <h2><?php the_sub_field('title') ?></h2>
                <div class="s-career-features__grid">
                    <?php if (have_rows('feature')): while (have_rows('feature')) : the_row(); ?>
                        <div class="s-career-features__item">
                            <img src="<?php the_sub_field('image') ?>" alt="<?php echo strip_tags(get_sub_field('link')) ?>">
                            <div class="s-career-features__title"><?php the_sub_field('text') ?></div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_post')): ?>
    <?php if (have_rows('post')): while (have_rows('post')) : the_row(); ?>
        <section class="s-careers-blog bg-yellow">
            <div class="container">
                <div class="s-careers-blog__grid">
                    <a href="<?php the_sub_field('link') ?>" class="s-careers-blog__item">
                        <div class="image-wrapper" style="background-image: url(<?php the_sub_field('image') ?>)">
                            <div class="category"><?php the_sub_field('category') ?></div>
                        </div>
                        <div class="item-content">
                            <div class="meta">
                                <div class="date">
                                    <?php echo date("M", strtotime(get_sub_field('date', false, false))) . ' ' . date("j", strtotime(get_sub_field('date', false, false))) . ', ' . date("Y", strtotime(get_sub_field('date', false, false))) ?>
                                </div>
                            </div>
                            <h3 class="two-lines"><?php the_sub_field('heading') ?></h3>
                            <div class="excerpt three-lines"><?php the_sub_field('text') ?></div>
                            <div class="btn btn-yellow"><?php the_field('learn_more', 'option') ?></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('show_quotation')): ?>
    <?php if (have_rows('quotation')): while (have_rows('quotation')) : the_row(); ?>
        <section class="s-careers-cite bg-grey">
            <div class="container">
                <div class="s-careers-cite__image">
                    <img src="<?php the_sub_field('image') ?>" alt="">
                </div>
                <div class="s-careers-cite__content">
                    <p class="s-careers-cite__description">
                        <?php the_sub_field('quote') ?>
                    </p>
                    <div class="s-careers-cite__author"><?php the_sub_field('signature') ?></div>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php endif; ?>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();


