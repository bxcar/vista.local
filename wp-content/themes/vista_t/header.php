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
    <?php include_once "js/form-ajax.php" ?>
</head>
<body>
<div class="globalwrap">
    <div class="l-header">
        <div class="topBar-wrap">
            <div class="topBar-innerwrap">
                <div class="topBar-left"><a class="topBar-logo" href="<?= home_url(); ?>"><img
                                src="<?php the_field('header_logo_img', 'option'); ?>"></a></div>
                <div class="topBar-center">
                    <ul class="topBar-menu show-for-medium">
                        <li>
                            <span class="topBar-menu-text topBar-menu-btn"><?php the_field('header_b2b_title', 'option'); ?></span>
                            <div class="topBar-menu-submenu-wrap is-hidden">
                                <div class="topBar-menu-submenu">
                                    <div class="topBar-menu-submenu-list">
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main nowrap" href="<?php

                                            if (get_field('b2b_link_1', 'option')['postid']) {
                                                the_permalink(get_field('b2b_link_1', 'option')['postid']);
                                            } else {
                                                echo get_field('b2b_link_1', 'option')['url'];
                                            }

                                            ?>"
                                                    target="<?php echo get_field('b2b_link_1', 'option')['target']; ?>"><?php echo get_field('b2b_link_1', 'option')['title']; ?></a>
                                        </div>
                                        <div class="topBar-menu-submenu-list-item">
                                            <div class="topBar-text topBar-menu-submenu-link-main"><?php the_field('subsection_1_title', 'option') ?></div>
                                            <?php
                                            if (get_field('links_for_sebsection_1', 'option')) {
                                                foreach (get_field('links_for_sebsection_1', 'option') as $item) { ?>
                                                    <a class="topBar-menu-submenu-link-sub" href="<?php

                                                    if ($item['link']['postid']) {
                                                        the_permalink($item['link']['postid']);
                                                    } else {
                                                        echo $item['link']['url'];
                                                    }

                                                    ?>"
                                                       target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                                <?php }
                                            } ?>
                                        </div>
                                        <div class="topBar-menu-submenu-list-item"><a
                                                    class="topBar-menu-submenu-link-main" href="<?php

                                            if (get_field('b2b_link_2', 'option')['postid']) {
                                                the_permalink(get_field('b2b_link_2', 'option')['postid']);
                                            } else {
                                                echo get_field('b2b_link_2', 'option')['url'];
                                            }

                                            ?>" target="<?php echo get_field('b2b_link_2', 'option')['target']; ?>"><?php echo get_field('b2b_link_2', 'option')['title']; ?></a>
                                        </div>
                                    </div>
                                    <div class="topBar-menu-submenu-list">
                                        <div class="topBar-menu-submenu-list-item">
                                            <div class="topBar-text topBar-menu-submenu-link-main"><?php the_field('subsection_2_title', 'option') ?></div>
                                            <?php
                                            if (get_field('links_for_sebsection_2_1', 'option')) {
                                                foreach (get_field('links_for_sebsection_2_1', 'option') as $item) { ?>
                                                    <a class="topBar-menu-submenu-link-sub nowrap" href="<?php

                                                    if ($item['link']['postid']) {
                                                        the_permalink($item['link']['postid']);
                                                    } else {
                                                        echo $item['link']['url'];
                                                    }

                                                    ?>"
                                                       target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                                <?php }
                                            } ?>
                                            <div class="topBar-text topBar-menu-submenu-link-sub"><?php the_field('subsection_2_subsection_title', 'option') ?></div>
                                            <ul>
                                                <?php
                                                if (get_field('links_for_sebsection_2_subsection', 'option')) {
                                                    foreach (get_field('links_for_sebsection_2_subsection', 'option') as $item) { ?>
                                                        <li><a class="topBar-menu-submenu-link-sub" href="<?php

                                                            if ($item['link']['postid']) {
                                                                the_permalink($item['link']['postid']);
                                                            } else {
                                                                echo $item['link']['url'];
                                                            }

                                                            ?>"
                                                               target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                                        </li>
                                                    <?php }
                                                } ?>
                                            </ul>
                                            <?php
                                            if (get_field('links_for_sebsection_2_2', 'option')) {
                                                foreach (get_field('links_for_sebsection_2_2', 'option') as $item) { ?>
                                                    <a class="topBar-menu-submenu-link-sub" href="<?php

                                                    if ($item['link']['postid']) {
                                                        the_permalink($item['link']['postid']);
                                                    } else {
                                                        echo $item['link']['url'];
                                                    }

                                                    ?>"
                                                       target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                                <?php }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="topBar-menu-text topBar-menu-btn"><?php the_field('header_b2с_title', 'option'); ?></span>
                            <div class="topBar-menu-submenu-wrap is-hidden">
                                <div class="topBar-menu-submenu">
                                    <div class="topBar-menu-submenu-list no-siblings">
                                        <?php
                                        if (get_field('header_b2с_links', 'option')) {
                                            foreach (get_field('header_b2с_links', 'option') as $item) { ?>
                                                <div class="topBar-menu-submenu-list-item"><a
                                                            class="topBar-menu-submenu-link-main" href="<?php

                                                    if ($item['link']['postid']) {
                                                        the_permalink($item['link']['postid']);
                                                    } else {
                                                        echo $item['link']['url'];
                                                    }

                                                    ?>"
                                                            target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="topBar-right"><a class="topBar-inner-item topBar-text topBar-phone show-for-medium"
                                             href="tel:<?php the_field('header_phone_format', 'option'); ?>"><?php the_field('header_phone', 'option'); ?></a><a
                            class="topBar-inner-item topBar-button show-for-medium" href="<?php

                    if (get_field('header_button_right_top_corner', 'option')['postid']) {
                        the_permalink(get_field('header_button_right_top_corner', 'option')['postid']);
                    } else {
                        echo get_field('header_button_right_top_corner', 'option')['url'];
                    }

                    ?>"
                            target="<?php echo get_field('header_button_right_top_corner', 'option')['target']; ?>"><?php echo get_field('header_button_right_top_corner', 'option')['title']; ?></a><span
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
                        <li><a href="#innermenu-b2b"><?php the_field('header_b2b_title', 'option'); ?></a></li>
                        <li><a href="#innermenu-b2c"><?php the_field('header_b2с_title', 'option'); ?></a></li>
                    </ul>
                    <div id="innermenu-b2b">
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main" href="<?php

                            if (get_field('b2b_link_1', 'option')['postid']) {
                                the_permalink(get_field('b2b_link_1', 'option')['postid']);
                            } else {
                                echo get_field('b2b_link_1', 'option')['url'];
                            }

                            ?>"
                                                                      target="<?php echo get_field('b2b_link_1', 'option')['target']; ?>"><?php echo get_field('b2b_link_1', 'option')['title']; ?></a>
                        </div>
                        <div class="topBar-menu-submenu-list-item spoiler-wrap">
                            <div class="topBar-text topBar-menu-submenu-link-main spoiler-btn"><?php the_field('subsection_1_title', 'option') ?></div>
                            <div class="spoiler-content">
                                <?php
                                if (get_field('links_for_sebsection_1', 'option')) {
                                    foreach (get_field('links_for_sebsection_1', 'option') as $item) { ?>
                                        <a class="topBar-menu-submenu-link-sub" href="<?php

                                        if ($item['link']['postid']) {
                                            the_permalink($item['link']['postid']);
                                        } else {
                                            echo $item['link']['url'];
                                        }

                                        ?>"
                                           target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="topBar-menu-submenu-list-item"><a class="topBar-menu-submenu-link-main"
                                                                      href="<?php

                                                                      if (get_field('b2b_link_2', 'option')['postid']) {
                                                                          the_permalink(get_field('b2b_link_2', 'option')['postid']);
                                                                      } else {
                                                                          echo get_field('b2b_link_2', 'option')['url'];
                                                                      }

                                                                      ?>"
                                                                      target="<?php echo get_field('b2b_link_2', 'option')['target']; ?>"><?php echo get_field('b2b_link_2', 'option')['title']; ?></a>
                        </div>
                        <div class="topBar-menu-submenu-list-item spoiler-wrap">
                            <div class="topBar-text topBar-menu-submenu-link-main spoiler-btn"><?php the_field('subsection_2_title', 'option') ?></div>
                            <div class="spoiler-content"><?php
                                if (get_field('links_for_sebsection_2_1', 'option')) {
                                    foreach (get_field('links_for_sebsection_2_1', 'option') as $item) { ?>
                                        <a class="topBar-menu-submenu-link-sub nowrap" href="<?php

                                        if ($item['link']['postid']) {
                                            the_permalink($item['link']['postid']);
                                        } else {
                                            echo $item['link']['url'];
                                        }

                                        ?>"
                                           target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                    <?php }
                                } ?>
                                <div class="topBar-text topBar-menu-submenu-link-sub"><?php the_field('subsection_2_subsection_title', 'option') ?></div>
                                <ul class="no-bullet">
                                    <?php
                                    if (get_field('links_for_sebsection_2_subsection', 'option')) {
                                        foreach (get_field('links_for_sebsection_2_subsection', 'option') as $item) { ?>
                                            <li><a class="topBar-menu-submenu-link-sub" href="<?php

                                                if ($item['link']['postid']) {
                                                    the_permalink($item['link']['postid']);
                                                } else {
                                                    echo $item['link']['url'];
                                                }

                                                ?>"
                                                   target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                            </li>
                                        <?php }
                                    } ?>
                                </ul>
                                <?php
                                if (get_field('links_for_sebsection_2_2', 'option')) {
                                    foreach (get_field('links_for_sebsection_2_2', 'option') as $item) { ?>
                                        <a class="topBar-menu-submenu-link-sub" href="<?php

                                        if ($item['link']['postid']) {
                                            the_permalink($item['link']['postid']);
                                        } else {
                                            echo $item['link']['url'];
                                        }

                                        ?>"
                                           target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div id="innermenu-b2c">
                        <?php
                        if (get_field('header_b2с_links', 'option')) {
                            foreach (get_field('header_b2с_links', 'option') as $item) { ?>
                                <div class="topBar-menu-submenu-list-item"><a
                                            class="topBar-menu-submenu-link-main" href="<?php

                                    if ($item['link']['postid']) {
                                        the_permalink($item['link']['postid']);
                                    } else {
                                        echo $item['link']['url'];
                                    }

                                    ?>"
                                            target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <figure class="bg-image overlay-dark"><img src="<?php the_field('header_bg_img', 'option'); ?>"></figure>
        <figure class="bg-graphic-bottom"><img src="<?= get_template_directory_uri(); ?>/img/inner-title-graphic.png">
        </figure>
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
