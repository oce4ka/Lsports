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
</head>
<body>
    <header class="header-global">
        <a href="<?php echo get_site_url() ?>" class="logo-global"><?php bloginfo('name'); ?></a>
        <nav class="nav-main" role="navigation">
            <button class="btn-hamburger"></button>
            <?php
            /*
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'menu_class' => '',
                    'container' => false,
                )
            );
            */
            ?>
            <ul>
                <li>
                    <a href="">Products</a>
                    <ul>
                        <li><a href="#">Esports</a></li>
                        <li><a href="#">Special bets data</a></li>
                        <li><a href="#">premium racing</a></li>
                    </ul>
                </li>
                <li><a href="">Coverage</a></li>
                <li class="active"><a href="">Coverage</a></li>
                <li><a href="">Coverage</a></li>
            </ul>
            <ul class="nav-lang"></ul>
        </nav>
    </header>
    <main class="content-main">
