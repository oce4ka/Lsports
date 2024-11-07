<?php
/**
 * The template for displaying the footer
 *
 * @package LSport
 */

?>

</main>

<footer class="footer-global">

    <div class="nav-social">
<div class="footer-wrapz">	
		<div class="footer-wrap0">
		<div class="logo-footer"></div>
       <div class="footer-wrap1"> 
		   <a href="https://www.facebook.com/LSportsData/" target="_blank" rel="nofollow" aria-label="facebook">
            <div class="facebook"></div>
        </a>
        <a href="https://twitter.com/lsports_intl" target="_blank" rel="nofollow" aria-label="twitter">
            <div class="twitter"></div>
        </a>
        <a href="https://www.linkedin.com/company/lsports-data-ltd-/" target="_blank" rel="nofollow" aria-label="linkedin">
            <div class="linkedin"></div>
        </a>
		 </div>
		 </div>	
		
			      <div class="footer-wrap2"> 
    <div class="sigmavictory-footer">
        <div class="sigmavictory-footer-text">
            <?php 
            $current_lang = pll_current_language();
            
            if ($current_lang == 'en') {
                echo '<span>SiGMA East Europe\'s Best Real-Time Sports Data Provider 2024</span>';
            } elseif ($current_lang == 'zh') {
                echo '<span>SiGMA 东欧最佳 <br> 实时体育数据提供商 2024</span>';
            } elseif ($current_lang == 'es') {
                echo '<span>Premios SIGMA Europa del Este <br> Proveedor de datos deportivos en tiempo real 2024</span>';
            } elseif ($current_lang == 'pt') {
                echo '<span>SIGMA Melhores da Europa Leste <br> Provedor de Dados Esportivos Ao Vivo 2024</span>';
            } elseif ($current_lang == 'ko') {
                echo '<span>SiGMA(시그마) 동유럽 최고 <br> 실시간 스포츠 데이터 공급업체 2024</span>';
            } else {
                echo '<span>SiGMA East Europe\'s Best Real-Time Sports Data Provider 2024</span>';
            }
            ?>
        </div>
        <img class="sigmavictory-footer-img" src="https://www.lsports.eu/wp-content/uploads/Sigma-Awards.png" alt="SIGMA Awards East Europe" />
    </div>
</div>

</div>		
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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF8DGGZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>


