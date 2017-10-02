<?php
/**
 * Template Name: platforms
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="platforms-desktop">
            <div class="mainwrap platforms-wrap">
                <div class="platforms-column center-inner-block-vertical">
                    <figure><img src="<?php the_field('section_1_img'); ?>"></figure>
                </div>
                <div class="platforms-column description">
                    <?php the_field('section_1_desc'); ?>
                    <div class="platforms-description-buttons"><a class="btn-general small outline orange" href="<?php

                        if (get_field('section_1_button_1')['postid']) {
                            the_permalink(get_field('section_1_button_1')['postid']);
                        } else {
                            echo get_field('section_1_button_1')['url'];
                        }

                        ?>" target="<?php echo get_field('section_1_button_1')['target']; ?>"><?php echo get_field('section_1_button_1')['title']; ?></a><a
                                class="btn-general small outline orange" href="<?php

                        if (get_field('section_1_button_2')['postid']) {
                            the_permalink(get_field('section_1_button_2')['postid']);
                        } else {
                            echo get_field('section_1_button_2')['url'];
                        }

                        ?>" target="<?php echo get_field('section_1_button_2')['target']; ?>"><?php echo get_field('section_1_button_2')['title']; ?></a><a
                                class="btn-general small filled orange" href="<?php

                        if (get_field('section_1_button_3')['postid']) {
                            the_permalink(get_field('section_1_button_3')['postid']);
                        } else {
                            echo get_field('section_1_button_3')['url'];
                        }

                        ?>" target="<?php echo get_field('section_1_button_3')['target']; ?>"><?php echo get_field('section_1_button_3')['title']; ?></a></div>
                </div>
            </div>
        </div>
        <div class="platforms-tablet">
            <figure class="bg-image overlay-dark"><img src="<?php the_field('section_2_img'); ?>"></figure>
            <figure class="platforms-tablet-graphic"><img src="<?= get_template_directory_uri(); ?>/img/platforms-tablet-graphic.png"></figure>
            <div class="mainwrap platforms-wrap">
                <div class="platforms-column description">
                    <?php the_field('section_2_desc'); ?>
                    <div class="platforms-description-buttons"><a class="btn-general small outline orange" href="<?php

                        if (get_field('section_2_button_1')['postid']) {
                            the_permalink(get_field('section_2_button_1')['postid']);
                        } else {
                            echo get_field('section_2_button_1')['url'];
                        }

                        ?>" target="<?php echo get_field('section_1_button_1')['target']; ?>"><?php echo get_field('section_2_button_1')['title']; ?></a><a
                                class="btn-general small outline orange" href="<?php

                        if (get_field('section_2_button_2')['postid']) {
                            the_permalink(get_field('section_2_button_2')['postid']);
                        } else {
                            echo get_field('section_2_button_2')['url'];
                        }

                        ?>" target="<?php echo get_field('section_2_button_2')['target']; ?>"><?php echo get_field('section_2_button_2')['title']; ?></a><a
                                class="btn-general small filled orange" href="<?php

                        if (get_field('section_2_button_3')['postid']) {
                            the_permalink(get_field('section_2_button_3')['postid']);
                        } else {
                            echo get_field('section_2_button_3')['url'];
                        }

                        ?>" target="<?php echo get_field('section_2_button_3')['target']; ?>"><?php echo get_field('section_2_button_3')['title']; ?></a></div>
                </div>
            </div>
        </div>
        <div class="platform-tablet-description">
            <div class="mainwrap platforms-wrap decoration-line">
                <div class="platforms-column description">
                    <?php the_field('section_3_left_subsection_desc'); ?>
                    <div class="platforms-description-buttons"><a class="btn-general small outline orange" href="<?php

                        if (get_field('section_3_left_subsection_button_1')['postid']) {
                            the_permalink(get_field('section_3_left_subsection_button_1')['postid']);
                        } else {
                            echo get_field('section_3_left_subsection_button_1')['url'];
                        }

                        ?>" target="<?php echo get_field('section_3_left_subsection_button_1')['target']; ?>"><?php echo get_field('section_3_left_subsection_button_1')['title']; ?></a><a
                                class="btn-general small outline orange" href="<?php

                        if (get_field('section_3_left_subsection_button_2')['postid']) {
                            the_permalink(get_field('section_3_left_subsection_button_2')['postid']);
                        } else {
                            echo get_field('section_3_left_subsection_button_2')['url'];
                        }

                        ?>" target="<?php echo get_field('section_3_left_subsection_button_2')['target']; ?>"><?php echo get_field('section_3_left_subsection_button_2')['title']; ?></a><a
                                class="btn-general small filled orange" href="<?php

                        if (get_field('section_3_left_subsection_button_3')['postid']) {
                            the_permalink(get_field('section_3_left_subsection_button_3')['postid']);
                        } else {
                            echo get_field('section_3_left_subsection_button_3')['url'];
                        }

                        ?>" target="<?php echo get_field('section_3_left_subsection_button_3')['target']; ?>"><?php echo get_field('section_3_left_subsection_button_3')['title']; ?></a></div>
                </div>
                <div class="platforms-column description">
                    <?php the_field('section_3_right_subsection_desc'); ?>
                    <div class="platforms-description-buttons"><a class="btn-general small outline orange" href="<?php

                        if (get_field('section_3_right_subsection_button_1')['postid']) {
                            the_permalink(get_field('section_3_right_subsection_button_1')['postid']);
                        } else {
                            echo get_field('section_3_right_subsection_button_1')['url'];
                        }

                        ?>" target="<?php echo get_field('section_3_right_subsection_button_1')['target']; ?>"><?php echo get_field('section_3_right_subsection_button_1')['title']; ?></a><a
                                class="btn-general small outline orange" href="<?php

                        if (get_field('section_3_right_subsection_button_2')['postid']) {
                            the_permalink(get_field('section_3_right_subsection_button_2')['postid']);
                        } else {
                            echo get_field('section_3_right_subsection_button_2')['url'];
                        }

                        ?>" target="<?php echo get_field('section_3_right_subsection_button_2')['target']; ?>"><?php echo get_field('section_3_right_subsection_button_2')['title']; ?></a><a
                                class="btn-general small filled orange" href="<?php

                        if (get_field('section_3_right_subsection_button_3')['postid']) {
                            the_permalink(get_field('section_3_right_subsection_button_3')['postid']);
                        } else {
                            echo get_field('section_3_right_subsection_button_3')['url'];
                        }

                        ?>" target="<?php echo get_field('section_3_right_subsection_button_3')['target']; ?>"><?php echo get_field('section_3_right_subsection_button_3')['title']; ?></a></div>
                </div>
            </div>
        </div>
        <div class="platform-mobile">
            <figure class="bg-image overlay-dark platform-mobile-bg-empty"><img src="<?php the_field('section_4_img'); ?>">
            </figure>
            <figure class="platform-mobile-graphic"><img src="<?= get_template_directory_uri(); ?>/img/platforms-mobile-graphic.png"></figure>
            <div class="mainwrap platforms-wrap align-right">
                <div class="platforms-column description">
                    <?php the_field('section_4_desc'); ?>
                    <div class="platforms-description-buttons"><a class="btn-general small outline orange" href="<?php

                        if (get_field('section_4_button_1')['postid']) {
                            the_permalink(get_field('section_4_button_1')['postid']);
                        } else {
                            echo get_field('section_4_button_1')['url'];
                        }

                        ?>" target="<?php echo get_field('section_4_button_1')['target']; ?>"><?php echo get_field('section_4_button_1')['title']; ?></a><a
                                class="btn-general small outline orange" href="<?php

                        if (get_field('section_4_button_2')['postid']) {
                            the_permalink(get_field('section_4_button_2')['postid']);
                        } else {
                            echo get_field('section_4_button_2')['url'];
                        }

                        ?>" target="<?php echo get_field('section_4_button_2')['target']; ?>"><?php echo get_field('section_4_button_2')['title']; ?></a><a
                                class="btn-general small filled orange" href="<?php

                        if (get_field('section_4_button_3')['postid']) {
                            the_permalink(get_field('section_4_button_3')['postid']);
                        } else {
                            echo get_field('section_4_button_3')['url'];
                        }

                        ?>" target="<?php echo get_field('section_4_button_3')['target']; ?>"><?php echo get_field('section_4_button_3')['title']; ?></a></div>
                </div>
            </div>
        </div>
        <div class="platform-mobile-description">
            <div class="mainwrap platforms-wrap decoration-line">
                <div class="platforms-column description">
                    <?php the_field('section_5_left_subsection_desc'); ?>
                    <div class="platforms-description-buttons"><a class="btn-general small outline orange" href="<?php

                        if (get_field('section_5_left_subsection_button_1')['postid']) {
                            the_permalink(get_field('section_5_left_subsection_button_1')['postid']);
                        } else {
                            echo get_field('section_5_left_subsection_button_1')['url'];
                        }

                        ?>" target="<?php echo get_field('section_5_left_subsection_button_1')['target']; ?>"><?php echo get_field('section_5_left_subsection_button_1')['title']; ?></a><a
                                class="btn-general small outline orange" href="<?php

                        if (get_field('section_5_left_subsection_button_2')['postid']) {
                            the_permalink(get_field('section_5_left_subsection_button_2')['postid']);
                        } else {
                            echo get_field('section_5_left_subsection_button_2')['url'];
                        }

                        ?>" target="<?php echo get_field('section_5_left_subsection_button_2')['target']; ?>"><?php echo get_field('section_5_left_subsection_button_2')['title']; ?></a><a
                                class="btn-general small filled orange" href="<?php

                        if (get_field('section_5_left_subsection_button_3')['postid']) {
                            the_permalink(get_field('section_5_left_subsection_button_3')['postid']);
                        } else {
                            echo get_field('section_5_left_subsection_button_3')['url'];
                        }

                        ?>" target="<?php echo get_field('section_5_left_subsection_button_3')['target']; ?>"><?php echo get_field('section_5_left_subsection_button_3')['title']; ?></a></div>
                </div>
                <div class="platforms-column description">
                    <?php the_field('section_5_right_subsection_desc'); ?>
                    <div class="platforms-description-buttons"><a class="btn-general small outline orange" href="<?php

                        if (get_field('section_5_right_subsection_button_1')['postid']) {
                            the_permalink(get_field('section_5_right_subsection_button_1')['postid']);
                        } else {
                            echo get_field('section_5_right_subsection_button_1')['url'];
                        }

                        ?>" target="<?php echo get_field('section_5_right_subsection_button_1')['target']; ?>"><?php echo get_field('section_5_right_subsection_button_1')['title']; ?></a><a
                                class="btn-general small outline orange" href="<?php

                        if (get_field('section_5_right_subsection_button_2')['postid']) {
                            the_permalink(get_field('section_5_right_subsection_button_2')['postid']);
                        } else {
                            echo get_field('section_5_right_subsection_button_2')['url'];
                        }

                        ?>" target="<?php echo get_field('section_5_right_subsection_button_2')['target']; ?>"><?php echo get_field('section_5_right_subsection_button_2')['title']; ?></a><a
                                class="btn-general small filled orange" href="<?php

                        if (get_field('section_5_right_subsection_button_3')['postid']) {
                            the_permalink(get_field('section_5_right_subsection_button_3')['postid']);
                        } else {
                            echo get_field('section_5_right_subsection_button_3')['url'];
                        }

                        ?>" target="<?php echo get_field('section_5_right_subsection_button_3')['target']; ?>"><?php echo get_field('section_5_right_subsection_button_3')['title']; ?></a></div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>