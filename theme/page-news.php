<?php
/**
 * Template Name: News
 *
 * The template for displaying News
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>
    <section class="s-news bg-grey">
        <div class="container">
            <div class="s-news__header">
                <h1>Ne<u>W</u>s</h1>
                <div class="s-news__types-dropdown">
                    <a href="#">All types</a>
                    <ul>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Lorem</a></li>
                    </ul>
                </div>
            </div>
            <div class="s-news__wrapper">
                <a href="#" class="s-news__item">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-news.png)"></div>
                    <div class="s-news__item-content">
                        <div class="type">Press Release</div>
                        <h3>Lorem Ipsum headline</h3>
                        <p class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                        <div class="date arrow-after arrow-after--right">
                            <div class="icon-calendar"></div>
                            August 8, 2022
                        </div>
                    </div>
                </a>
                <a href="#" class="s-news__item"
                   data-aos="fade-up"
                   data-aos-easing="ease-out"
                   data-aos-duration="600">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-news__item-content">
                        <div class="type">Blog post</div>
                        <h3>Lor<u>e</u>m Ipsum hea<u>d</u>line</h3>
                        <p class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="date arrow-after arrow-after--right">August 8, 2022</div>
                    </div>
                </a>
                <a href="#" class="s-news__item"
                   data-aos="fade-up"
                   data-aos-easing="ease-out"
                   data-aos-duration="600">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-news__item-content">
                        <div class="type">Blog post</div>
                        <h3>Lor<u>e</u>m Ipsum hea<u>d</u>line</h3>
                        <p class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="date arrow-after arrow-after--right">August 8, 2022</div>
                    </div>
                </a>
                <a href="#" class="s-news__item"
                   data-aos="fade-up"
                   data-aos-easing="ease-out"
                   data-aos-duration="600">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-news__item-content">
                        <div class="type">Blog post</div>
                        <h3>Lor<u>e</u>m Ipsum hea<u>d</u>line</h3>
                        <p class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="date arrow-after arrow-after--right">August 8, 2022</div>
                    </div>
                </a>
                <a href="#" class="s-news__item"
                   data-aos="fade-up"
                   data-aos-easing="ease-out"
                   data-aos-duration="600">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-news__item-content">
                        <div class="type">Blog post</div>
                        <h3>Lor<u>e</u>m Ipsum hea<u>d</u>line</h3>
                        <p class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="date arrow-after arrow-after--right">August 8, 2022</div>
                    </div>
                </a>
                <a href="#" class="s-news__item"
                   data-aos="fade-up"
                   data-aos-easing="ease-out"
                   data-aos-duration="600">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-news__item-content">
                        <div class="type">Blog post</div>
                        <h3>Lor<u>e</u>m Ipsum hea<u>d</u>line</h3>
                        <p class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="date arrow-after arrow-after--right">August 8, 2022</div>
                    </div>
                </a>
                <a href="#" class="s-news__item"
                   data-aos="fade-up"
                   data-aos-easing="ease-out"
                   data-aos-duration="600">
                    <div class="image-wrapper" style="background-image: url(images-upload/img-event.png)"></div>
                    <div class="s-news__item-content">
                        <div class="type">Blog post</div>
                        <h3>Lor<u>e</u>m Ipsum hea<u>d</u>line</h3>
                        <p class="excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="date arrow-after arrow-after--right">August 8, 2022</div>
                    </div>
                </a>
            </div>
            <div class="btn-yellow">view more</div>
        </div>
    </section>
    <section class="s-text">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="text-heading"><?php the_title(); ?></h1>
    <div class="text-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
