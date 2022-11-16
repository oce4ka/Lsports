<?php
if (has_category('article')) {
    $category = 'article';
    $category_name = get_term_by('slug', 'article', 'category')->name;
    $category_link = get_permalink(get_page_by_path('article'));
} elseif (has_category('blog-post')) {
    $category = 'blog-post';
    $category_name = get_term_by('slug', 'blog-post', 'category')->name;
    $category_link = get_permalink(get_page_by_path('blog-post'));
} elseif (has_category('press-release')) {
    $category = 'press-release';
    $category_name = get_term_by('slug', 'press-release', 'category')->name;
    $category_link = get_permalink(get_page_by_path('press-release'));
} elseif (has_category('update')) {
    $category = 'update';
    $category_name = get_term_by('slug', 'update', 'category')->name;
    $category_link = get_permalink(get_page_by_path('update'));
} elseif (has_category('news')) {
    $category = 'news';
    $category_name = get_term_by('slug', 'news', 'category')->name;
    $category_link = get_permalink(get_page_by_path('news'));
};
?>

<section class="s-news-post bg-grey">
    <div class="container container--post">
        <div class="s-news-post__header">
            <a href="<?php echo $category_link ?>" class="back">Back to lobby ></a>
            <div class="meta">

                <div class="type"><?php echo $category_name ?></div>
                <div class="date"><?php echo get_the_date('F d, Y') ?></div>
            </div>
            <?php if (get_field('title')): ?>
                <h1><?php the_field('title') ?></h1>
            <?php else: ?>
                <h1><?php the_title() ?></h1>
            <?php endif; ?>
            <div class="excerpt"><?php the_field('excerpt') ?></div>
            <div class="nav-social nav-social--post">
                <div class="facebook facebook--black"></div>
                <div class="twitter twitter--black"></div>
                <div class="linkedin linkedin--black"></div>
            </div>
        </div>
        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title() ?>">
        <?php the_content(); ?>

        <br>
        <br>
        Markup:
        <br>
        <br>

        <picture data-aos="fade-up"
                 data-aos-delay="50"
                 data-aos-offset="0"
                 data-aos-easing="ease-out"
                 data-aos-duration="600">
            <img src="images-upload/post-img.png" alt="">
        </picture>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum quam justo, id dictum lorem pulvinar sit amet. Pellentesque fringilla sapien viverra sapien egestas ultricies. Cras mattis maximus nibh, quis lacinia lorem congue non. Donec at dolor auctor, varius ex elementum, molestie ligula. Aenean placerat mi sapien, eget dignissim lectus ornare sit amet. Phasellus hendrerit
            orci nec arcu ultricies, vel feugiat sapien pellentesque.</p>
        <p>Vivamus magna turpis, aliquam sit amet nisi in, fringilla pretium tortor. Etiam ac risus auctor, dignissim neque quis, euismod lacus. Ut dapibus lectus eu tortor faucibus cursus. Nulla sollicitudin nisl et rutrum sagittis. Phasellus eu libero sit amet magna pharetra dignissim sit amet.</p>
        <p>Nulla lectus neque, rhoncus a nunc aliquam, sagittis mattis magna. In hac habitasse platea dictumst. Sed mattis, ex at interdum tempus, erat quam consectetur augue, vehicula porta mauris augue ut turpis. Mauris porta ullamcorper gravida. Pellentesque convallis velit rutrum rhoncus dictum. Maecenas ut cursus velit. Donec faucibus turpis rhoncus eros pharetra, eget auctor ligula
            fringilla. Sed sed scelerisque odio, eleifend sollicitudin augue.</p>
        <p>Mauris non enim vitae urna facilisis scelerisque nec id orci. Praesent finibus tincidunt nibh, nec pharetra mauris rutrum eget. Maecenas convallis arcu et purus tincidunt, id volutpat turpis mollis. Nulla sit amet nisl luctus, commodo sem id, commodo dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed malesuada eu lacus at dapibus.
            Pellentesque mollis felis a nunc ornare auctor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue malesuada nulla, eu rhoncus justo cursus vitae. Donec lacinia augue mi, quis volutpat massa efficitur sit amet. Mauris sit amet fermentum magna. Cras sit amet risus dignissim, mattis turpis sit amet, bibendum elit.</p>
        <picture data-aos="fade-up"
                 data-aos-delay="50"
                 data-aos-offset="0"
                 data-aos-easing="ease-out"
                 data-aos-duration="600">
            <img src="images-upload/post-img.png" alt="">
        </picture>
        <p>Vivamus magna turpis, aliquam sit amet nisi in, fringilla pretium tortor. Etiam ac risus auctor, dignissim neque quis, euismod lacus. Ut dapibus lectus eu tortor faucibus cursus. Nulla sollicitudin nisl et rutrum sagittis. Phasellus eu libero sit amet magna pharetra dignissim sit amet.</p>
        <p>Nulla lectus neque, rhoncus a nunc aliquam, sagittis mattis magna. In hac habitasse platea dictumst. Sed mattis, ex at interdum tempus, erat quam consectetur augue, vehicula porta mauris augue ut turpis. Mauris porta ullamcorper gravida. Pellentesque convallis velit rutrum rhoncus dictum. Maecenas ut cursus velit. Donec faucibus turpis rhoncus eros pharetra, eget auctor ligula
            fringilla. Sed sed scelerisque odio, eleifend sollicitudin augue.</p>
        <p>Mauris non enim vitae urna facilisis scelerisque nec id orci. Praesent finibus tincidunt nibh, nec pharetra mauris rutrum eget. Maecenas convallis arcu et purus tincidunt, id volutpat turpis mollis. Nulla sit amet nisl luctus, commodo sem id, commodo dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed malesuada eu lacus at dapibus.
            Pellentesque mollis felis a nunc ornare auctor.</p-->
    </div>
</section>

<section class="s-related">
    <div class="container container--post">
        <div class="s-related__wrapper">
            <h2>Related Press Releases</h2>
            <div class="s-related__grid">
                <div data-aos="fade-up"
                     data-aos-delay="50"
                     data-aos-offset="0"
                     data-aos-easing="ease-out"
                     data-aos-duration="600"
                     class="s-related__item">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-related__item-content">
                        <div class="type">Press Release</div>
                        <div class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</div>
                        <div class="date">August 8, 2022</div>
                        <a href="" class="arrow-after arrow-after--right">&nbsp;</a>
                    </div>
                </div>
                <div data-aos="fade-up"
                     data-aos-delay="100"
                     data-aos-offset="0"
                     data-aos-easing="ease-out"
                     data-aos-duration="600"
                     class="s-related__item">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-related__item-content">
                        <div class="type">Press Release</div>
                        <div class="excerpt">Amet minim sit aliqua dolor do amet sint. Velit officia consequat. Press Release Amet minim mollit non deserunt ullamco est sit ali</div>
                        <div class="date">August 8, 2022</div>
                        <a href="" class="arrow-after arrow-after--right">&nbsp;</a>
                    </div>
                </div>
            </div>
            <div class="s-related__show-all">View all Press Releases</div>
        </div>
    </div>
</section>

<section class="s-hp-contact-us bg-yellow">
    <h2>
        <div data-aos="fade-up"
             data-aos-delay="50"
             data-aos-offset="0"
             data-aos-easing="ease-out"
             data-aos-duration="600">Plug your product in t<u>o</u>
        </div>
        <div data-aos="fade-up"
             data-aos-delay="100"
             data-aos-offset="100"
             data-aos-easing="ease-out"
             data-aos-duration="600"><u>t</u>he best sp<u>o</u>rts data feeds
        </div>
        <div data-aos="fade-up"
             data-aos-delay="150"
             data-aos-offset="200"
             data-aos-easing="ease-out"
             data-aos-duration="600">in the <u>w</u>orld
        </div>
    </h2>
    <div class="btn-yellow">CONTACT US</div>
</section>
