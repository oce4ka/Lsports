<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LSport
 */

get_header();
?>

    <section class="s-404 bg-grey">
        <div class="container">
            <h2><u>W</u>hoops!</h2>
            <h3>Something went wrong....</h3>
            <h1>4<u>04</u></h1>
              <a href="<?php echo pll_home_url(); ?>" class="btn-yellow">TAKE ME BACK</a>
    </div>
    </section>

<?php
get_footer();
