<?php
?>

<section class="s-news-post bg-grey">
    <div class="container container--post">
        <div class="s-news-post__header">
          <?php /*  <a href="/blog/" class="back">Back to lobby ></a> */ ?>
            <div class="meta">
                <div class="type"><a class="links2024-2" href="/blog/" class="back">Blog</a></div>

                <div class="date"><?php echo get_the_date('F d, Y') ?></div>
            </div>
            <?php if (get_field('title')): ?>
                <h1><?php the_field('title') ?></h1>
            <?php else: ?>
                <h1><?php the_title() ?></h1>
            <?php endif; ?>
            <?php /* <div class="excerpt"><?php the_field('excerpt') ?></div> */ ?>
<div style="margin: 2vw 0 1vw 0;"></div>
            <div class="nav-social nav-social--post">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank" rel="nofollow">
                    <div class="facebook facebook--black"></div>
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title() ?>" target="_blank" rel="nofollow">
                    <div class="twitter twitter--black"></div>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>" target="_blank" rel="nofollow">
                    <div class="linkedin linkedin--black"></div>
                </a>
            </div>
        </div>
          <?php if (have_rows('header')): ?>
    <?php
    $has_content = false;
    while (have_rows('header')) : the_row();
        $image = get_sub_field('image');
        if (!empty($image)) {
            $has_content = true;
            $acf_alt = get_sub_field('acf_alt');
            $alt_text = '';

            if (!empty($acf_alt)) {
                $alt_text = esc_attr($acf_alt);
            } elseif (!empty($image) && is_array($image)) {
                $alt_text = esc_attr(get_post_meta($image['ID'], '_wp_attachment_image_alt', true));
            }
            ?>
            <div>
                <img src="<?php echo esc_url($image['url']); ?>"<?php echo !empty($alt_text) ? ' alt="' . $alt_text . '"' : ''; ?> />
            </div>
            <?php
        }
    endwhile;
    if (!$has_content) {
        ?>
        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title(); ?>">
        <?php
    }
    ?>
<?php else: ?>
    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title(); ?>">
<?php endif; ?>
        <?php the_content(); ?>
    </div>
</section>

<?php if (have_rows('related_posts')): ?>
    <section class="s-related">
        <div class="container container--post">
            <div class="s-related__wrapper">
                <h2><?php echo $related_heading ?></h2>
                <div class="s-related__grid">

                    <?php while (have_rows('related_posts')) : the_row(); ?>
                        <?php $related_post = get_sub_field('post') ?>
                        <a href="<?php echo get_permalink($related_post) ?>" data-aos="fade-up" class="s-related__item">
                            <div class="image-wrapper" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($related_post)); ?>)"></div>
                            <div class="s-related__item-content">
                                <div class="type"><?php echo $category_name ?></div>
                                <div class="excerpt"><?php echo $related_post->post_title; ?></div>
                                <div class="date"><?php echo get_the_date('F d, Y', $related_post); ?></div>
                                <div class="arrow-after arrow-after--right">&nbsp;</div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <a href="<?php echo $category_link ?>" class="s-related__show-all"><?php echo $related_all ?></a>
            </div>
        </div>
    </section>
<?php endif; ?>





<?php
// Check if the "show_recent_posts" field is true
$show_recent_posts = get_field('show_recent_posts');

if ($show_recent_posts): 
    // Get the recent posts group field
    $recent_posts_group = get_field('recent_posts');

    // Ensure the group field exists and get the tags
    if ($recent_posts_group) {
        $tags = $recent_posts_group['filter_by_tag']; // Get selected tags
        $current_post_id = get_the_ID(); // Get the current post ID
        
        // Get the number of articles to show from the ACF field
        $num_posts = $recent_posts_group['how_many_articles_to_show']; // Get the number of posts to show (3, 6, or 9)
        if (!$num_posts) {
            $num_posts = 3; // Fallback to default if not set
        }

        // Fetch total number of posts for the given tags
        $total_args = array(
            'post_type' => array('post', 'blog'),
            'posts_per_page' => -1,
            'tag__in' => $tags,
            'post__not_in' => array($current_post_id),
            'fields' => 'ids' // Only get post IDs to reduce the query load
        );
        $total_posts = new WP_Query($total_args);
        $total_count = $total_posts->found_posts;

        if ($tags): 
            // WP_Query arguments for initial posts
            $args = array(
                'post_type' => array('post', 'blog'), // Include both 'post' and 'blog' post types
                'posts_per_page' => $num_posts, // Use the dynamic number of posts
                'tag__in' => $tags,
                'orderby' => 'date',
                'order' => 'DESC',
                'post__not_in' => array($current_post_id) // Exclude current post
            );
            
            // The Query
            $query = new WP_Query($args);
            
            // The Loop
            if ($query->have_posts()): ?>
                <section class="related-posts-widget">
                    <div class="container">
                     <div class="related-posts-widget__header">
    <h2>
        <?php 
        // Get the section title
        $recent_posts = get_field('recent_posts');
        if ($recent_posts && !empty($recent_posts['section_title'])) {
            echo esc_html($recent_posts['section_title']);
        }
        ?>
    </h2>
    <?php 
    // Get the link field
    $all_posts_link = $recent_posts['all_posts_link']; 
    if ($all_posts_link && !empty($recent_posts['all_posts'])): ?>
        <a href="<?php echo esc_url($all_posts_link); ?>">
              <div class="arrow-after sub-t"><?php echo esc_html($recent_posts['all_posts']); ?></div>
        </a>
    <?php endif; ?>
</div>

                        <div class="related-posts-widget__wrapper" id="post-container">
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                <a data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="600" href="<?php the_permalink() ?>" class="related-posts-widget__item">
                                    <div class="image-wrapper" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>)" alt="<?php the_title() ?>"></div>
                                    <div class="related-posts-widget__item-content">
                                        <h3 class="two-lines"><?php the_title(); ?></h3>
                                        <p class="excerpt three-lines">
                                            <?php 
                                            // Get the ACF excerpt field
                                            $acf_excerpt = get_field('excerpt');
                                            
                                            // Get the description from the "header" group field
                                            $header = get_field('header');
                                            $description = $header['description'] ?? '';

                                            if ($acf_excerpt) {
                                                // Case 1: The excerpt field is populated
                                                echo esc_html(strip_tags($acf_excerpt));
                                            } elseif ($description) {
                                                // Case 3: The excerpt field is empty or not set, use the description field
                                                echo esc_html(strip_tags($description));
                                            } else {
                                                // Case 2: No content in excerpt or description, do not display anything
                                                echo '';
                                            }
                                            ?>
                                        </p>
                                        <div class="date arrow-after arrow-after--right">
                                            <div class="icon-calendar"></div>
                                            <?php echo get_the_date('F d, Y'); ?>
                                        </div>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                        <?php if ($total_count > $num_posts): ?>
                            <a href="#" class="btn-yellow" id="load-more-tags" data-offset="<?php echo $num_posts; ?>" data-total="<?php echo $total_count; ?>" data-tag-ids="<?php echo implode(',', $tags); ?>">Load More</a>
                        <?php endif; ?>
                    </div>
                </section>
            <?php 
            endif;
            // Restore original Post Data
            wp_reset_postdata();
        endif;
    }
endif;
?>

<script>
	jQuery(document).ready(function($) {
    $('#load-more-tags').on('click', function(e) {
        e.preventDefault();
        
        var button = $(this);
        var offset = parseInt(button.data('offset'));
        var total = parseInt(button.data('total'));
        var tag_ids = button.data('tag-ids');
        var current_post_id = <?php echo get_the_ID(); ?>; // Get the current post ID
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>', // Fix: PHP parsed here before sent to the client
            type: 'POST',
            data: {
                action: 'load_more_posts_by_tags',
                offset: offset,
                tag_ids: tag_ids,
                current_post_id: current_post_id, // Send the current post ID
            },
            success: function(response) {
                $('#post-container').append(response);
                offset += 6; // Assuming you're loading 6 posts at a time
                button.data('offset', offset);
                
                if (offset >= total) {
                    button.remove(); // Remove button when all posts are loaded
                }
            },
            error: function() {
                alert('Failed to load more posts.');
            }
        });
    });
});
</script>