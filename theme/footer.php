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
    <nav class="nav-footer-links" role="navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-links-menu',
                'menu_class' => '',
                'container' => false,
            )
        );
        ?>
    </nav>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
_linkedin_partner_id = "1942353";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1942353&fmt=gif" />
</noscript>

</body>
</html>


