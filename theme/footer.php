<?php
/**
 * The template for displaying the footer
 *
 * @package LSport
 */

?>

</main>

<footer class="footer-global">
    <div class="logo-footer"></div>
    <div class="nav-social">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_site_url() ?>" target="_blank" rel="nofollow">
            <div class="facebook"></div>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo get_site_url() ?>&text=<?php echo get_bloginfo() ?>" target="_blank" rel="nofollow">
            <div class="twitter"></div>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_site_url() ?>" target="_blank" rel="nofollow">
            <div class="linkedin"></div>
        </a>
    </div>
    <nav class="nav-footer" role="navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => '',
                'container' => false,
            )
        );
        ?>
    </nav>
</footer>

<?php wp_footer(); ?>

</body>
</html>


