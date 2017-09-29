<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vista_t
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <title>Some Title about Good Project</title>
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/libs.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css">
    <script src="<?= get_template_directory_uri(); ?>/js/libs.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>
</head>
<body>
<div class="globalwrap">
    <div class="l-header">
        <div class="topBar-wrap">
            <div class="topBar-innerwrap">
                <div class="topBar-left"><a class="topBar-logo" href="index.html"><img src="<?= get_template_directory_uri(); ?>/img/logo.svg"></a></div>
                <div class="topBar-center">
                    <ul class="topBar-menu show-for-medium">
                        <li><span class="topBar-menu-text topBar-menu-btn">B2B</span>
                            <div class="topBar-menu-submenu-wrap is-hidden">
                                <div class="topBar-menu-submenu">
                                    <div class="topBar-menu-submenu-list">
                                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main nowrap" href="#">Login/Regisrer In B2C</a></div>
                                        <div class="topBar-menu-submenu-list-item">
                                            <div class="topBar-text topBar-menu-submenu-link-main">About US</div><a class="topBar-menu-submenu-link-sub" href="licenses.html">Licenses & Regulation</a><a class="topBar-menu-submenu-link-sub" href="contact-us.html">Contact US</a>
                                        </div>
                                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="faq.html">F.A.G</a></div>
                                    </div>
                                    <div class="topBar-menu-submenu-list">
                                        <div class="topBar-menu-submenu-list-item">
                                            <div class="topBar-text topBar-menu-submenu-link-main">Trading</div><a class="topBar-menu-submenu-link-sub nowrap" href="platforms.html">Trading platforms</a>
                                            <div class="topBar-text topBar-menu-submenu-link-sub">Products</div>
                                            <ul>
                                                <li><a class="topBar-menu-submenu-link-sub" href="forex.html">Forex</a></li>
                                                <li><a class="topBar-menu-submenu-link-sub" href="indices.html">Indices</a></li>
                                                <li><a class="topBar-menu-submenu-link-sub" href="commodities.html">Commodities</a></li>
                                            </ul><a class="topBar-menu-submenu-link-sub" href="investments.html">Investments</a><a class="topBar-menu-submenu-link-sub" href="accounts.html">Accounts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><span class="topBar-menu-text topBar-menu-btn">B2C</span>
                            <div class="topBar-menu-submenu-wrap is-hidden">
                                <div class="topBar-menu-submenu">
                                    <div class="topBar-menu-submenu-list no-siblings">
                                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="index.html">Home</a></div>
                                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="liquidity.html">Liqudity</a></div>
                                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="support.html">Back office support, compliance & marketing management</a></div>
                                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="contact-us.html">Contact US</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="topBar-right"><a class="topBar-inner-item topBar-text topBar-phone show-for-medium" href="tel:+35725028028">+ 357 25 028028</a><a class="topBar-inner-item topBar-button show-for-medium" href="contact-us.html">Contacts</a><span class="topBar-inner-item topBar-icon hide-for-medium topBar-innermenu-btn">
                <svg class="icon icon-menu">
                  <use xlink:href="<?= get_template_directory_uri(); ?>/icons/symbol-defs.svg#icon-menu"></use>
                </svg></span></div>
            </div>
        </div>
        <div class="topBar-innermenu-wrap is-hidden">
            <div class="topBar-innermenu">
                <div class="topBar-innermenu-close">
                    <svg class="icon icon-cross">
                        <use xlink:href="icons/symbol-defs.svg#icon-cross"></use>
                    </svg>
                </div>
                <div class="topBar-innermenu-list">
                    <ul>
                        <li><a href="#innermenu-b2b">B2B</a></li>
                        <li><a href="#innermenu-b2c">B2C</a></li>
                    </ul>
                    <div id="innermenu-b2b">
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="#">Login/Regisrer In B2C</a></div>
                        <div class="topBar-menu-submenu-list-item spoiler-wrap">
                            <div class="topBar-text topBar-menu-submenu-link-main spoiler-btn">About US</div>
                            <div class="spoiler-content"><a class="topBar-menu-submenu-link-sub" href="licenses.html">Licenses & Regulation</a><a class="topBar-menu-submenu-link-sub" href="contact-us.html">Contact US</a></div>
                        </div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="faq.html">F.A.G</a></div>
                        <div class="topBar-menu-submenu-list-item spoiler-wrap">
                            <div class="topBar-text topBar-menu-submenu-link-main spoiler-btn">Trading</div>
                            <div class="spoiler-content"><a class="topBar-menu-submenu-link-sub nowrap" href="platforms.html">Trading platforms</a>
                                <div class="topBar-text topBar-menu-submenu-link-sub">Products</div>
                                <ul class="no-bullet">
                                    <li><a class="topBar-menu-submenu-link-sub" href="forex.html">Forex</a></li>
                                    <li><a class="topBar-menu-submenu-link-sub" href="indices.html">Indices</a></li>
                                    <li><a class="topBar-menu-submenu-link-sub" href="commodities.html">Commodities</a></li>
                                </ul><a class="topBar-menu-submenu-link-sub" href="investments.html">Investments</a><a class="topBar-menu-submenu-link-sub" href="accounts.html">Accounts</a>
                            </div>
                        </div>
                    </div>
                    <div id="innermenu-b2c">
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="index.html">Home</a></div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="liquidity.html">Liqudity</a></div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="support.html">Back office support, compliance & marketing management</a></div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="contact-us.html">Contact US</a></div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="bg-image overlay-dark"><img src="<?= get_template_directory_uri(); ?>/img/inner-title-bg.png"></figure>
        <figure class="bg-graphic-bottom"><img src="<?= get_template_directory_uri(); ?>/img/inner-title-graphic.png"></figure>
        <div class="header-title-inner center-inner-block">
            <div>
                <h1 class="title-page white text-center"><?php the_title(); ?></h1>
                <ul class="breadcrumbs center-inner-block">
                    <li><a href="<?= home_url(); ?>">Home</a></li>
                    <li class="current"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
