<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vista_t
 */

?>

<footer class="l-footer">
    <figure class="bg-image"><img class="show-for-large" src="<?php the_field('footer_bg_img', 'option'); ?>"><img class="hide-for-large" src="<?php the_field('footer_bg_img_medium', 'option'); ?>">
    </figure>
    <div class="mainwrap-superwide">
        <div class="footer-innerwrap">
            <div class="footer-column-first">
                <h3 class="footer-list-title"><?php the_field('header_b2b_title', 'option'); ?></h3>
                <div class="footer-list-wrap">
                    <div class="footer-list">
                        <div class="footer-list-item"><a class="footer-link-main" href="<?php

                            if (get_field('b2b_link_1', 'option')['postid']) {
                                the_permalink(get_field('b2b_link_1', 'option')['postid']);
                            } else {
                                echo get_field('b2b_link_1', 'option')['url'];
                            }

                            ?>" target="<?php echo get_field('b2b_link_1', 'option')['target']; ?>"><?php echo get_field('b2b_link_1', 'option')['title']; ?></a></div>
                        <div class="footer-list-item">
                            <div class="footer-link-main footer-link-main-btn"><?php the_field('subsection_1_title', 'option') ?></div>
                            <div class="footer-link-subitems">
                                <?php
                                if (get_field('links_for_sebsection_1', 'option')) {
                                    foreach (get_field('links_for_sebsection_1', 'option') as $item) { ?>
                                        <a class="footer-link-sub" href="<?php

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
                        <div class="footer-list-item"><a class="footer-link-main" href="<?php

                            if (get_field('b2b_link_2', 'option')['postid']) {
                                the_permalink(get_field('b2b_link_2', 'option')['postid']);
                            } else {
                                echo get_field('b2b_link_2', 'option')['url'];
                            }

                            ?>" target="<?php echo get_field('b2b_link_2', 'option')['target']; ?>"><?php echo get_field('b2b_link_2', 'option')['title']; ?></a>
                        </div>
                    </div>
                    <div class="footer-list">
                        <div class="footer-list-item">
                            <div class="footer-link-main footer-link-main-btn"><?php the_field('subsection_2_title', 'option') ?></div>
                            <div class="footer-link-subitems">
                                <?php
                                if (get_field('links_for_sebsection_2_1', 'option')) {
                                    foreach (get_field('links_for_sebsection_2_1', 'option') as $item) { ?>
                                        <a class="footer-link-sub" href="<?php

                                        if ($item['link']['postid']) {
                                            the_permalink($item['link']['postid']);
                                        } else {
                                            echo $item['link']['url'];
                                        }

                                        ?>"
                                           target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                                    <?php }
                                } ?>
                                <div class="footer-link-sub"><?php the_field('subsection_2_subsection_title', 'option') ?></div>
                                <ul>
                                    <?php
                                    if (get_field('links_for_sebsection_2_subsection', 'option')) {
                                        foreach (get_field('links_for_sebsection_2_subsection', 'option') as $item) { ?>
                                            <li><a class="footer-link-sub" href="<?php

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
                                        <a class="footer-link-sub" href="<?php

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
            </div>
            <div class="footer-column-second">
                <h3 class="footer-list-title"><?php the_field('header_b2с_title', 'option'); ?></h3>
                <div class="footer-list">
                    <?php
                    if (get_field('header_b2с_links', 'option')) {
                        foreach (get_field('header_b2с_links', 'option') as $item) { ?>
                            <div class="footer-list-item"><a
                                        class="footer-link-main" href="<?php

                                if ($item['link']['postid']) {
                                    the_permalink($item['link']['postid']);
                                } else {
                                    echo $item['link']['url'];
                                }

                                ?>" target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="footer-column-third">
                <div class="footer-column-text">
                    <?php the_field('footer_text_block_1', 'option'); ?>
                </div>
                <div class="footer-column-text warning">
                    <?php the_field('footer_text_block_2', 'option'); ?>
                </div>
            </div>
            <div class="up-button show-for-large">
                <svg class="icon icon-arrow-up">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/icons/symbol-defs.svg#icon-arrow-up"></use>
                </svg>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
