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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
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
    <script type="text/javascript">
        piAId = '894471';
        piCId = '1667';
        piHostname = 'pi.pardot.com';

        (function () {
            function async_load() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
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

</head>
<body>
<header class="header-global<?php if (has_category('coverage')) echo ' transparent-white' ?>">
    <a href="<?php echo get_site_url() ?>" class="logo-global"><?php bloginfo('name'); ?></a>
    <nav class="nav-main" role="navigation">
        <button class="btn-hamburger"></button>
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
<main class="content-main">
