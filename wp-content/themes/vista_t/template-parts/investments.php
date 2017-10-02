<?php
/**
 * Template Name: investments
 */
get_header(); ?>
    <div class="l-innerContent">
    <div class="investments-description">
        <div class="mainwrap investments-wrap">
            <?php the_field('section_1_top_text'); ?>
            <div class="investments-description-block">
                <p class="semibold uppercase"><?php the_field('section_1_text_in_rectangle'); ?></p>
            </div>
            <?php the_field('section_1_bottom_text'); ?>
        </div>
        <div class="investments-block">
            <figure class="bg-image overlay-dark"><img src="<?php the_field('section_2_bg_img'); ?>"></figure>
            <div class="mainwrap investments-wrap">
                <?php the_field('section_2_text'); ?>
            </div>
        </div>
        <div class="investments-block bg-elem-1">
            <div class="mainwrap investments-wrap">
                <?php the_field('section_3_text'); ?>
            </div>
        </div>
        <div class="investments-block">
            <figure class="bg-image overlay-dark"><img src="<?php the_field('section_4_bg_img'); ?>"></figure>
            <div class="mainwrap investments-wrap">
                <?php the_field('section_4_text'); ?>
            </div>
        </div>
        <div class="investments-block bg-elem-2">
            <div class="mainwrap investments-wrap">
                <div class="faq-list">
                    <?php
                    if (get_field('questions')) {
                        foreach (get_field('questions') as $item) { ?>
                            <div class="faq-list-item spoiler-wrap">
                                <div class="faq-question spoiler-btn"><span><?= $item['questions_item_title'] ?></span>
                                    <div class="faq-question-icon">
                                        <div class="spoiler-icon">
                                            <svg class="icon icon-arrow-down">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/icons/symbol-defs.svg#icon-arrow-down"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-answer spoiler-content">
                                    <?php
                                    foreach ($item['questions_item_answers'] as $item_2) { ?>
                                        <div class="faq-answer-item">
                                            <p class="faq-answer-item-title uppercase extra-dark-gray"><?= $item_2['questions_item_answers_item_title'] ?></p>
                                            <p><?= $item_2['questions_item_answers_item_text'] ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>