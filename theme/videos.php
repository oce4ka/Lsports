<?php
/**
 * Template Name: Videos
 *
 * This is the template that displays page Company
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>
<?php $video_file = get_field('header_video'); ?>
<?php $image_file = get_field('header_image'); ?>
<section class="video-page-header">
    <div class="block-video">
        <video muted loop autoplay>
            <source src="<?php echo $video_file['url']?>" type="video/mp4">
                Your browser doesn't support HTML5 video tag.
            </video>
        </div>
        <div class="mobile-header-image">
            <img src="<?php echo $image_file['url']?>" alt="<?php echo $image_file['alt']?>">
        </div>
    </section>

    <section class="block-video">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
                <h1 class="s-text__heading video-title"><?php the_title(); ?></h1>
                <div class="video_content">
                    <?php the_content(); ?>
                </div>
                <div class="video_list" data-id="<?php echo $post->ID; ?>">
                    <?php $video_list = get_field('video');
                    foreach ($video_list as $key => $video) {
                        if ($key == 9) {
                         break;
                     } ?>
                     <div class="video-item" data-key="<?php echo $key; ?>">
                       <div class="cover">
                        <?php if (isset($video['cover']) && !empty($video['cover'])) { ?>
                            <img src="<?php echo $video['cover']['url']; ?>" alt="<?php echo $video['cover']['alt']; ?>">
                        <?php } else { ?>
                           <img src="/wp-content/uploads/video_cover_noimg.jpg" alt="no image">
                       <?php } ?>
                   </div>
                   <?php if (isset($video['title']) && !empty($video['title'])) { ?>
                    <h2><?php echo $video['title']; ?></h2>
                <?php } ?>
            </div>
        <?php }
        ?>
    </div>
    <div class="video-button-block">
        <p>load more</p>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<div id="video-bg">
    <div class="video-popup">
        <div class="embed-container"></div>
        <div class="close-video-popup">&times;</div>
    </div>
</div>
</section>

<?php if (get_field('add_contact_section')) get_template_part('contact-section'); ?>

<?php get_footer();
