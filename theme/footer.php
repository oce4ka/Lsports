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
        <div class="facebook"></div>
        <div class="twitter"></div>
        <div class="linkedin"></div>
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


