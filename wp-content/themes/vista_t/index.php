<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
        <title><?php the_title(); ?></title>
        <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/png">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/libs.min.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css">
        <script src="<?= get_template_directory_uri(); ?>/js/libs.min.js"></script>
        <script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>
    </head>
<body>
<div class="globalwrap">
    <div class="l-header home-page">
        <div class="topBar-wrap">
            <div class="topBar-innerwrap">
                <div class="topBar-left"><a class="topBar-logo" href="<?= home_url(); ?>"><img
                                src="<?= get_template_directory_uri(); ?>/img/logo.svg"></a></div>
                <div class="topBar-center">
                    <ul class="topBar-menu show-for-medium">
                        <li><span class="topBar-menu-text topBar-menu-btn">B2B</span>
                            <div class="topBar-menu-submenu-wrap is-hidden">
                                <div class="topBar-menu-submenu">
                                    <div class="topBar-menu-submenu-list">
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main nowrap" href="#">Login/Regisrer
                                                In B2C</a></div>
                                        <div class="topBar-menu-submenu-list-item">
                                            <div class="topBar-text topBar-menu-submenu-link-main">About US</div>
                                            <a class="topBar-menu-submenu-link-sub" href="licenses.html">Licenses &
                                                Regulation</a><a class="topBar-menu-submenu-link-sub"
                                                                 href="contact-us.html">Contact US</a>
                                        </div>
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main" href="faq.html">F.A.G</a>
                                        </div>
                                    </div>
                                    <div class="topBar-menu-submenu-list">
                                        <div class="topBar-menu-submenu-list-item">
                                            <div class="topBar-text topBar-menu-submenu-link-main">Trading</div>
                                            <a class="topBar-menu-submenu-link-sub nowrap" href="platforms.html">Trading
                                                platforms</a>
                                            <div class="topBar-text topBar-menu-submenu-link-sub">Products</div>
                                            <ul>
                                                <li><a class="topBar-menu-submenu-link-sub"
                                                       href="forex.html">Forex</a></li>
                                                <li><a class="topBar-menu-submenu-link-sub"
                                                       href="indices.html">Indices</a>
                                                </li>
                                                <li><a class="topBar-menu-submenu-link-sub" href="commodities.html">Commodities</a>
                                                </li>
                                            </ul>
                                            <a class="topBar-menu-submenu-link-sub"
                                               href="investments.html">Investments</a><a
                                                    class="topBar-menu-submenu-link-sub"
                                                    href="accounts.html">Accounts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><span class="topBar-menu-text topBar-menu-btn">B2C</span>
                            <div class="topBar-menu-submenu-wrap is-hidden">
                                <div class="topBar-menu-submenu">
                                    <div class="topBar-menu-submenu-list no-siblings">
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main" href="index.html">Home</a>
                                        </div>
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main"
                                                    href="liquidity.html">Liqudity</a>
                                        </div>
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main" href="support.html">Back
                                                office support, compliance & marketing management</a></div>
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main" href="contact-us.html">Contact
                                                US</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="topBar-right"><a class="topBar-inner-item topBar-text topBar-phone show-for-medium"
                                             href="tel:+35725028028">+ 357 25 028028</a><a
                            class="topBar-inner-item topBar-button show-for-medium"
                            href="contact-us.html">Contacts</a><span
                            class="topBar-inner-item topBar-icon hide-for-medium topBar-innermenu-btn">
                <svg class="icon icon-menu">
                  <use xlink:href="<?= get_template_directory_uri(); ?>/icons/symbol-defs.svg#icon-menu"></use>
                </svg></span></div>
            </div>
        </div>
        <div class="topBar-innermenu-wrap is-hidden">
            <div class="topBar-innermenu">
                <div class="topBar-innermenu-close">
                    <svg class="icon icon-cross">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/icons/symbol-defs.svg#icon-cross"></use>
                    </svg>
                </div>
                <div class="topBar-innermenu-list">
                    <ul>
                        <li><a href="#innermenu-b2b">B2B</a></li>
                        <li><a href="#innermenu-b2c">B2C</a></li>
                    </ul>
                    <div id="innermenu-b2b">
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main"
                                                                      href="#">Login/Regisrer In B2C</a></div>
                        <div class="topBar-menu-submenu-list-item spoiler-wrap">
                            <div class="topBar-text topBar-menu-submenu-link-main spoiler-btn">About US</div>
                            <div class="spoiler-content"><a class="topBar-menu-submenu-link-sub"
                                                            href="licenses.html">Licenses & Regulation</a><a
                                        class="topBar-menu-submenu-link-sub" href="contact-us.html">Contact US</a>
                            </div>
                        </div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main"
                                                                      href="faq.html">F.A.G</a></div>
                        <div class="topBar-menu-submenu-list-item spoiler-wrap">
                            <div class="topBar-text topBar-menu-submenu-link-main spoiler-btn">Trading</div>
                            <div class="spoiler-content"><a class="topBar-menu-submenu-link-sub nowrap"
                                                            href="platforms.html">Trading platforms</a>
                                <div class="topBar-text topBar-menu-submenu-link-sub">Products</div>
                                <ul class="no-bullet">
                                    <li><a class="topBar-menu-submenu-link-sub" href="forex.html">Forex</a></li>
                                    <li><a class="topBar-menu-submenu-link-sub" href="indices.html">Indices</a></li>
                                    <li><a class="topBar-menu-submenu-link-sub"
                                           href="commodities.html">Commodities</a></li>
                                </ul>
                                <a class="topBar-menu-submenu-link-sub" href="investments.html">Investments</a><a
                                        class="topBar-menu-submenu-link-sub" href="accounts.html">Accounts</a>
                            </div>
                        </div>
                    </div>
                    <div id="innermenu-b2c">
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main"
                                                                      href="index.html">Home</a></div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main"
                                                                      href="liquidity.html">Liqudity</a></div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main"
                                                                      href="support.html">Back office support,
                                compliance & marketing management</a></div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main"
                                                                      href="contact-us.html">Contact US</a></div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="bg-image overlay-dark"><img src="<?= get_template_directory_uri(); ?>/img/home-title-bg.png">
        </figure>
        <figure class="bg-graphic-bottom"><img src="<?= get_template_directory_uri(); ?>/img/home-title-graphic.png">
        </figure>
        <div class="header-title mainwrap center-inner-block-vertical">
            <div>
                <h1 class="title-page white"><?php the_field('main_title'); ?></h1>
                <ul class="white">
                    <?php if (get_field('header_list')) {
                        foreach (get_field('header_list') as $item) { ?>
                            <li><?= $item['header_list_item'] ?></li>
                        <?php }
                    } ?>
                </ul>
                <p class="white semibold uppercase"><?php the_field('header_subtitle'); ?></p><a
                        class="btn-general outline white on-page-link" href="#home-contactUs">Contact Us</a>
            </div>
            <a class="header-scroll-btn on-page-link" href="#home-description">
                <svg class="icon icon-arrow-down">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/icons/symbol-defs.svg#icon-arrow-down"></use>
                </svg>
            </a>
        </div>
    </div>
    <div class="l-description" id="home-description">
        <div class="mainwrap">
            <div class="center-inner-block">
                <h2 class="title-section"><?php the_field('first_section_title'); ?></h2>
            </div>
            <div class="description-list">
                <ul class="description-list-tags no-bullet">
                    <?php if (get_field('first_section_subtitles')) {
                        $i = 1;
                        foreach (get_field('first_section_subtitles') as $item) { ?>
                            <li><a href="#description-item-<?= $i ?>"><?= $item['first_section_subtitles_item'] ?></a>
                            </li>
                            <?php $i++;
                        }
                    } ?>
                </ul>
                <div class="description-list-item" id="description-item-1">
                    <div class="description-list-item-innerwrap">
                        <?php if (get_field('first_section_desc')) {
                            foreach (get_field('first_section_desc') as $item) { ?>
                                <div class="description-list-item-inneritem">
                                    <figure class="description-list-item-inneritem-img"><img
                                                src="<?= $item['first_section_desc_image_item'] ?>"></figure>
                                    <div class="description-list-item-inneritem-text">
                                        <h4 class="light uppercase extra-dark-gray"><?= $item['first_section_desc_title_item'] ?></h4>
                                        <p class="light-gray"><?= $item['first_section_desc_desc_item'] ?></p>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
                <div class="description-list-item" id="description-item-2">
                    <div class="description-list-item-innerwrap">
                        <?php if (get_field('first_section_desc_2')) {
                            foreach (get_field('first_section_desc_2') as $item) { ?>
                                <div class="description-list-item-inneritem">
                                    <figure class="description-list-item-inneritem-img"><img
                                                src="<?= $item['first_section_desc_2_image_item'] ?>"></figure>
                                    <div class="description-list-item-inneritem-text">
                                        <h4 class="light uppercase extra-dark-gray"><?= $item['first_section_desc_2_title_item'] ?></h4>
                                        <p class="light-gray"><?= $item['first_section_desc_2_desc_item'] ?></p>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
                <div class="description-list-item" id="description-item-3">
                    <div class="description-list-item-innerwrap">
                        <?php if (get_field('first_section_desc_3')) {
                            foreach (get_field('first_section_desc_3') as $item) { ?>
                                <div class="description-list-item-inneritem">
                                    <figure class="description-list-item-inneritem-img"><img
                                                src="<?= $item['first_section_desc_3_image_item'] ?>"></figure>
                                    <div class="description-list-item-inneritem-text">
                                        <h4 class="light uppercase extra-dark-gray"><?= $item['first_section_desc_3_title_item'] ?></h4>
                                        <p class="light-gray"><?= $item['first_section_desc_3_desc_item'] ?></p>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
                <div class="description-list-item" id="description-item-4">
                    <div class="description-list-item-innerwrap">
                        <?php if (get_field('first_section_desc_4')) {
                            foreach (get_field('first_section_desc_4') as $item) { ?>
                                <div class="description-list-item-inneritem">
                                    <figure class="description-list-item-inneritem-img"><img
                                                src="<?= $item['first_section_desc_4_image_item'] ?>"></figure>
                                    <div class="description-list-item-inneritem-text">
                                        <h4 class="light uppercase extra-dark-gray"><?= $item['first_section_desc_4_title_item'] ?></h4>
                                        <p class="light-gray"><?= $item['first_section_desc_4_desc_item'] ?></p>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="center-inner-block"><a class="btn-general filled orange" href="#"><?php the_field('first_section_button_text'); ?></a></div>
        </div>
    </div>
    <div class="l-advantages">
        <div class="mainwrap-wide">
            <div class="center-inner-block">
                <h2 class="title-section"><?php the_field('second_section_title'); ?></h2>
            </div>
            <ul class="advantages-list no-bullet">
                <?php if (get_field('second_section_items')) {
                    foreach (get_field('second_section_items') as $item) { ?>
                        <li>
                            <figure class="advantages-list-icon">
                                <img src="<?= $item['second_section_items_item_img'] ?>"></figure>
                            <span><?= $item['second_section_items_item_text'] ?></span>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
    </div>
    <div class="l-start">
        <div class="mainwrap-wide">
            <div class="center-inner-block">
                <h2 class="title-section"><?php the_field('third_section_title'); ?></h2>
            </div>
            <div class="start-steps">
                <?php if (get_field('third_section_items')) {
                    $ix = count(get_field('third_section_items'));
                    $i = 0;
                    foreach (get_field('third_section_items') as $item) {?>
                        <div class="start-steps-item <?php if($i == ($ix -1)) { echo 'final'; } ?>">
                            <div class="step-number"><span class="step-number-number"><?= $item['third_section_items_item_number'] ?></span><span
                                        class="step-number-text"><?= $item['third_section_items_item_number_sign'] ?></span></div>
                            <div class="step-description"><?= $item['third_section_items_item_circle_sign'] ?></div>
                        </div>
                    <?php $i++; }
                } ?>
            </div>
        </div>
    </div>
    <div class="l-platforms">
        <div class="mainwrap-wide">
            <div class="center-inner-block">
                <h2 class="title-section white"><?php the_field('fourth_section_title'); ?></h2>
            </div>
            <div class="center-inner-block">
                <figure class="platforms-img"><img src="<?php the_field('fourth_section_image_2'); ?>">
                </figure>
            </div>
            <div class="center-inner-block"><a class="btn-general outline orange" href="<?php

                if (get_field('fourth_section_button')['postid']) {
                    the_permalink(get_field('fourth_section_button')['postid']);
                } else {
                    echo get_field('fourth_section_button')['url'];
                }

                ?>" target="<?php echo get_field('fourth_section_button')['target']; ?>"><?php echo get_field('fourth_section_button')['title']; ?></a>
            </div>
        </div>
    </div>
    <style>
        .l-platforms {
            background-image: url(<?php the_field('fourth_section_image_1'); ?>);
        }
    </style>
    <div class="l-contactUs" id="home-contactUs">
        <figure class="bg-image overlay-dark"><img src="<?= get_template_directory_uri(); ?>/img/contact-bg.png">
        </figure>
        <div class="mainwrap">
            <div class="center-inner-block">
                <h2 class="title-section white"><?php the_field('contact_form_title'); ?></h2>
            </div>
            <form class="contactUs-form form-general white">
                <input type="text" placeholder="<?php the_field('contact_form_field_1'); ?>" required>
                <input type="email" placeholder="<?php the_field('contact_form_field_2'); ?>" required>
                <input type="number" placeholder="<?php the_field('contact_form_field_3'); ?>">
                <input type="text" placeholder="<?php the_field('contact_form_field_4'); ?>">
                <textarea placeholder="<?php the_field('contact_form_field_5'); ?>"></textarea>
                <button class="btn-general filled white" type="submit"><?php the_field('contact_form_button_text'); ?></button>
            </form>
            <div class="contactUs-warning">
                <p class="contactUs-warning-title semibold uppercase white"><span><?php the_field('contact_form_bottom_section_title'); ?></span></p>
                <p class="light white"><?php the_field('contact_form_bottom_section_desc'); ?></p>
            </div>
        </div>
    </div>
    <div class="l-risk">
        <div class="risk-mainwrap">
            <div class="center-inner-block">
                <h2 class="title-section"><?php the_field('sixth_section_title'); ?></h2>
            </div>
            <div class="risk-content-wrap">
                <figure class="risk-content-img show-for-medium"><img
                            src="<?php the_field('sixth_section_image'); ?>"></figure>
                <div class="risk-content-text light-gray">
                    <?php the_field('sixth_section_text'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="l-weAccept">
        <div class="mainwrap-superwide">
            <div class="center-inner-block">
                <h2 class="title-section"><?php the_field('seventh_section_title'); ?></h2>
            </div>
            <div class="weAccept-logos">
                <?php if (get_field('seventh_section_items')) {
                    foreach (get_field('seventh_section_items') as $item) {?>
                        <figure class="weAccept-logos-img"><img
                                    src="<?=  $item['seventh_section_items_item_image'] ?>"></figure>
                        <?php }
                } ?>
            </div>
        </div>
    </div>
<?php
get_footer();
