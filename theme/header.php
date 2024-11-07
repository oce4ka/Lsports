<?php
/**
 * The header for our theme
 *
 * @package LSport
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" as="image" href="/wp-content/uploads/LSport_Football-0000-1-3-1.png">
    <?php wp_head(); ?>

    <meta name="facebook-domain-verification" content="gpmntkxsy3wo231dyexp4vgnezpfq5"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46670728-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-46670728-1');
    </script>
	
<script type="module" src="https://sec-cdn.lsports.eu/sec-core.esm.js" async></script>
<script nomodule src="https://sec-cdn.lsports.eu/sec-core.js" async></script>
	
    <script type="text/javascript">
        piAId = '894471';
        piCId = '1667';
        piHostname = 'pi.pardot.com';

        (function () {
            function async_load() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.src = ('https:' == document.location.protocol ? 'https://pi' : 'https://cdn') + '.pardot.com/pd.js';
                var c = document.getElementsByTagName('script')[0];
                c.parentNode.insertBefore(s, c);
            }

            if (window.attachEvent) {
                window.attachEvent('onload', async_load);
            } else {
                window.addEventListener('load', async_load, false);
            }
        })();
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1451365501725797');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
     src="https://www.facebook.com/tr?id=1451365501725797&ev=PageView&noscript=1"
     /></noscript>
     <!-- End Facebook Pixel Code -->

     <script data-obct type="text/javascript">
        /** DO NOT MODIFY THIS CODE**/
        !function (_window, _document) {
            var OB_ADV_ID = '00bd4c7341f7615f0087ff1843946584a7';
            if (_window.obApi) {
                var toArray = function (object) {
                    return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];
                };
                _window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));
                return;
            }
            var api = _window.obApi = function () {
                api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);
            };
            api.version = '1.1';
            api.loaded = true;
            api.marketerId = OB_ADV_ID;
            api.queue = [];
            var tag = _document.createElement('script');
            tag.async = true;
            tag.src = '//amplify.outbrain.com/cp/obtp.js';
            tag.type = 'text/javascript';
            var script = _document.getElementsByTagName('script')[0];
            script.parentNode.insertBefore(tag, script);
        }(window, document);
        obApi('track', 'PAGE_VIEW', {content: {id: 'XXXXX'}, contentType: 'product'});
    </script>

    <!-- Twitter conversion tracking base code -->
    <script>
        !function (e, t, n, s, u, a) {
            e.twq || (s = e.twq = function () {
                s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
            }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = 'https://static.ads-twitter.com/uwt.js',
            a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
        }(window, document, 'script');
        twq('config', 'obzfh');
    </script>
    <!-- End Twitter conversion tracking base code -->

    <!-- Global site tag (gtag.js) - Google Ads: 1010293089 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1010293089"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-1010293089');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S5DW6PN3VE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-S5DW6PN3VE');
    </script>
	
	<script>     (function(w,d,t,r,u)     {         var f,n,i;         w[u]=w[u]||[],f=function()         {             var o={ti:"343049508", enableAutoSpaTracking: true};             o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")         },         n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function()         {             var s=this.readyState;             s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)         },         i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)     })     (window,document,"script","//bat.bing.com/bat.js","uetq"); </script>

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PF8DGGZ');</script>
<!-- End Google Tag Manager -->

<!--****************** Lunio Conversion Tracking Script ******************-->
<script>
window.LunioTrackConversion=function(){
var r=new XMLHttpRequest();
r.open('GET','https://conversions.lunio.ai/v1/tracking/conversion?accid=17259&accidt=JDJ5JDEwJGEwbkppY0lxMUROSDJaUWd5NUxNQWVlS0s4bkNjcEEwV1ZvRmpvbVRhVU5kSWFNdDdLVVdX&accidt2=X15sdfPodiofsHHjk789eew122ppc');
r.onreadystatechange=function(){if(this.readyState===4&&this.status===200)
{console.log('Lunio conversion tracking complete');}};r.send();}
// use the function below to trigger the conversion script where your conversion happens
window.LunioTrackConversion();
</script>
<!--**************** END Lunio Conversion Tracking Script ****************-->

	<!-- Hotjar Tracking Code for Lsports --> <script> (function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:4939230,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); </script>
	
	<!-- BEGIN: Marin Software Tracking Script (Landing Page) -->
<script type='text/javascript'>
var _mTrack = _mTrack || [];
_mTrack.push(['trackPage']);

(function() {
var mClientId = 'zl3sjkldw0';
var mProto = (('https:' == document.location.protocol) ? 'https://' : 'https://');
var mHost = 'tracker.marinsm.com';

var mt = document.createElement('script'); mt.type = 'text/javascript'; mt.async = true; mt.src = mProto + mHost + '/tracker/async/' + mClientId + '.js';
var fscr = document.getElementsByTagName('script')[0]; fscr.parentNode.insertBefore(mt, fscr);
})();
</script>
<noscript>
<img width="1" height="1" src="https://tracker.marinsm.com/tp?act=1&cid=zl3sjkldw0&script=no" />
</noscript>
<!-- END: Copyright Marin Software -->

<script id="6senseWebTag" src="https://j.6sc.co/j/4cd65190-bc7b-42c8-97d4-d2987b7dc3de.js"></script>

<script type="module">
import { TheWebCo } from "https://cdn.jsdelivr.net/npm/@thewebco/pid/+esm";
new TheWebCo("3c9f9043-7348-4da5-98da-3909562836b1");
</script>
	
</head>
<body>
<!-- <header class="header-global<?php if (has_category('coverage')) echo ' transparent-white' ?>">  -->
	<header class="header-global">
    	<a href="<?php echo pll_home_url(); ?>" class="logo-global">
         <img src="/wp-content/themes/LSport/img/logo.svg" alt="<?php bloginfo('name'); ?>">   
        </a>
                    <?php 
            $current_lang = pll_current_language();

            if ($current_lang == 'en') {
                $menu_class = 'en-menu';
                $mega_menu_1 = get_field('first_menu_item', 'options');
                $mega_menu_2 = get_field('second_menu_item', 'options');
                $mega_menu_3 = get_field('third_menu_item', 'options'); ?>
                
                <nav class="custom-mega-menu nav-main">
                    <ul class="main-mega-menu">
                        <li class="list-mega-menu list-1">
                            <span><?php echo $mega_menu_1['menu_item_title']; ?></span>
                            <div class="sub-menu">
                                <div class="menu-container">
                                    <?php $fist_submenu_item = $mega_menu_1['fist_submenu_item']; ?>
                                    <div class="item item-1">
                                        <h4><?php echo $fist_submenu_item['first_submenu_title']; ?></h4>
                                        <div class="sub-menu-block">
                                            <ul>
                                                <?php foreach ($fist_submenu_item['left_column_list'] as $item) { ?>
                                                    <li>
                                                        <a href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                            <ul>
                                                <?php foreach ($fist_submenu_item['right_column_list'] as $item) { ?>
                                                    <li>
                                                        <a href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
                                                    </li>
                                                <?php } ?>
                                                <li class="to-all">
                                                    <a href="<?php echo $fist_submenu_item['to_all_link']['link_to_all']; ?>"><?php echo $fist_submenu_item['to_all_link']['text_to_all']; ?>
                                                    <svg width="26" height="11" viewBox="0 0 26 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 5.49998L24.7623 5.49998M24.7623 5.49998L20.3925 1.13019M24.7623 5.49998L20.3925 9.86977" stroke="#E1F32C" />
                                                    </svg>
                                                </a>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <?php $second_submenu_item = $mega_menu_1['second_submenu_item']; ?>
                                    <div class="item item-2">
                                        <h4><?php echo $second_submenu_item['second_menu_title']; ?></h4>
                                        <div class="sub-menu-block">
                                            <ul>
                                                <?php foreach ($second_submenu_item['second_menu_list'] as $item) { ?>
                                                    <li>
                                                        <a href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <?php $third_submenu_item = $mega_menu_1['third_submenu_item']; ?>
                                    <div class="item item-3">
                                        <h4><?php echo $third_submenu_item['third_menu_title']; ?></h4>
                                        <div class="sub-menu-block">
                                            <ul>
                                                <?php foreach ($third_submenu_item['third_menu_list'] as $item) { ?>
                                                    <li>
                                                        <a href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <?php $fourth_submenu_item = $mega_menu_1['fourth_submenu_item']; ?>
                                    <div class="item item-4">
                                        <h4><?php echo $fourth_submenu_item['fourth_menu_title']; ?></h4>
                                        <div class="sub-menu-block">
                                            <?php if (!empty($fourth_submenu_item['text'])) { ?>
                                                <p><?php echo $fourth_submenu_item['text']; ?></p>
                                            <?php } ?>
                                            <?php if (!empty($fourth_submenu_item['image']['url'])) { ?>
                                                <div class="image">
                                                    <img src="<?php echo $fourth_submenu_item['image']['url']; ?>" alt="<?php echo $fourth_submenu_item['image']['alt']; ?>">
                                                </div>
                                            <?php } ?>
                                            <?php if (!empty($fourth_submenu_item['button']['link'])) { ?>
                                                <a href="<?php echo $fourth_submenu_item['button']['link']; ?>"><?php echo $fourth_submenu_item['button']['text']; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-mega-menu list-2">
                            <span><?php echo $mega_menu_2['second_menu_title']; ?></span>
                            <div class="sub-menu">
                                <div class="menu-container">
                                    <?php foreach ($mega_menu_2['list'] as $item) { ?>
                                        <div class="item">
                                            <a href="<?php echo $item['link']; ?>" style="background-image: url(<?php echo $item['image']['url']; ?>);">
                                                <p><?php echo $item['text']; ?></p>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-mega-menu list-3">
                            <span><?php echo $mega_menu_3['third_menu_title']; ?></span>
                            <div class="sub-menu">
                                <div class="menu-container">
                                    <div class="item item-1">
                                        <?php $news = $mega_menu_3['news']; ?>
                                        <div style="background-image: url(<?php echo $news['image']['url']; ?>);">
                                            <p><?php echo $news['text']; ?></p>
                                        </div>
                                        <a href="<?php echo $news['link']; ?>" class="all-events">
                                            <p>All news</p>
                                            <svg width="26" height="10" viewBox="0 0 26 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M0 4.76212H24.7623M24.7623 4.76212L20.3925 0.392334M24.7623 4.76212L20.3925 9.13192" stroke="black" />
                                          </svg>
                                      </a>
                                    </div>
                                    <div class="item item-2">
                                        <?php $events = $mega_menu_3['events']; ?>
                                        <?php $today = date('Ymd');
                                        $args = array(
                                            'post_type' => 'post',
                                            'meta_key' => 'date_start',
                                            'orderby' => 'meta_value',
                                            'order' => 'ASC',
                                            'meta_query' => array(
                                                array(
                                                    'key' => 'date_end',
                                                    'value' => $today,
                                                    'compare' => '>=',
                                                    'type' => 'DATE',
                                                ),
                                            ),
                                            'posts_per_page' => 1,
                                        );

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) {
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                                $thumbnail = get_the_post_thumbnail_url();
                                                $title = get_the_title();
                                                $link = get_permalink();
                                            }
                                            wp_reset_postdata();
                                        } else {
                                            echo 'There are no upcoming events';
                                        } ?>
                                        <div class="event-block" style="background-image: url(<?php echo $thumbnail; ?>);">
                                            <p><?php echo $title; ?></p>
                                            <a href="<?php echo $link; ?>">Meet us</a>
                                        </div>
                                        <a href="<?php echo $events['all_events_link']; ?>" class="all-events">
                                            <p><?php echo $events['all_events_text']; ?></p>
                                            <svg width="26" height="10" viewBox="0 0 26 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M0 4.76212H24.7623M24.7623 4.76212L20.3925 0.392334M24.7623 4.76212L20.3925 9.13192" stroke="black" />
                                          </svg>
                                      </a>
                                  </div>

                                  <div class="item item-3">
                                    <?php $blog = $mega_menu_3['blog']; ?>
                                    <a class="blog" href="<?php echo $blog['link']; ?>">
                                        <p><?php echo $blog['text']; ?></p>
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="32" cy="32" r="31.5" stroke="black" />
                                          <path d="M19.8984 32H44.0995M44.0995 32L39.8287 27.7292M44.0995 32L39.8287 36.2707" stroke="black" />
                                      </svg>
                                  </a>
                                  <div class="block-video">
                                    <div class="video_list" data-id="1152">
                                        <?php $video_list = get_field('video', 1152);
                                        foreach ($video_list as $key => $video) {
                                            if ($key == 2) {
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
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                                <div class="video-link">
                                    <?php $video = $mega_menu_3['video']; ?>
                                    <a href="<?php echo $video['button_link']; ?>">
                                      <p><?php echo $video['button_text']; ?></p>
                                      <svg width="26" height="11" viewBox="0 0 26 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 5.36979H24.7623M24.7623 5.36979L20.3925 1M24.7623 5.36979L20.3925 9.73958" stroke="black" />
                                      </svg>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </li>

              <li class="list-mega-menu list-4 active">
                  <a href="https://www.lsports.eu/contact/" role="link">Get Started</a>
              </li>
              <nav class="nav-main lang-menu" role="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'lang-menu',
                        'menu_class' => '',
                        'container' => false,
                    )
                );
                ?>
            </nav>
        </ul>
    </nav>

    <div id="video-bg">
        <div class="video-popup menu-popup">
            <div class="embed-container"></div>
            <div class="loader">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="200" height="200" style="shape-rendering: auto; display: block; background: rgb(255, 255, 255);" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g transform="rotate(0 50 50)">
                  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
                    <animate repeatCount="indefinite" begin="-0.9166666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
                </rect>
            </g><g transform="rotate(30 50 50)">
              <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
                <animate repeatCount="indefinite" begin="-0.8333333333333334s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
            </rect>
        </g><g transform="rotate(60 50 50)">
          <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
            <animate repeatCount="indefinite" begin="-0.75s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
        </rect>
    </g><g transform="rotate(90 50 50)">
      <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
        <animate repeatCount="indefinite" begin="-0.6666666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
    </rect>
</g><g transform="rotate(120 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="-0.5833333333333334s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g transform="rotate(150 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="-0.5s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g transform="rotate(180 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="-0.4166666666666667s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g transform="rotate(210 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="-0.3333333333333333s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g transform="rotate(240 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="-0.25s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g transform="rotate(270 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="-0.16666666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g transform="rotate(300 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="-0.08333333333333333s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g transform="rotate(330 50 50)">
  <rect fill="#e1f32c" height="12" width="6" ry="6" rx="3" y="24" x="47">
    <animate repeatCount="indefinite" begin="0s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate>
</rect>
</g><g></g></g><!-- [ldio] generated by https://loading.io --></svg>
</div>
<div class="close-video-popup"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 1L25.5 25.5M25.5 1L1 25.5" stroke="black" />
</svg></div>
</div>
</div>
<?php } else {
    $menu_class = '';
} ?>
        <nav class="nav-main <?php echo $menu_class; ?>" role="navigation">
            <button class="btn-hamburger" title="mobile menu"></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'menu_class' => '',
                    'container' => false,
                )
            );
            ?>
            <!--<ul class="nav-lang"></ul>-->
        </nav>

    </header>
    <div id="custom-mega-menu-bg"></div>
    <main class="content-main">
