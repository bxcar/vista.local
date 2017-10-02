<?php
/**
 * Template Name: faq
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="faq-content">
            <div class="mainwrap faq-wrap">
                <p class="faq-description"><span><?php the_field('top_text'); ?></span>
                </p>
                <div class="faq-list">
                    <?php
                    if(get_field('questions')) {
                        foreach (get_field('questions') as $item) { ?>
                            <div class="faq-list-item spoiler-wrap">
                                <div class="faq-question spoiler-btn"><span><?= $item['questions_item_title']?></span>
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
                                    <?php }?>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <div class="contactUs-innerblock">
            <figure class="bg-image overlay-dark"><img src="<?= get_template_directory_uri(); ?>/img/contact-bg.png"></figure>
            <figure class="bg-graphic-bottom"><img src="<?= get_template_directory_uri(); ?>/img/contact-form-graphic-bg.png"></figure>
            <div class="mainwrap">
                <div class="center-inner-block">
                    <h2 class="title-section white"><?php the_field('contact_form_title') ?></h2>
                </div>
                <form class="contactUs-form form-general white" id="static-form" method="post">
                    <input name="required-field" type="hidden" value="email">
                    <input  name="name" type="text" placeholder="<?php the_field('first_input') ?>">
                    <input name="email" type="email" placeholder="<?php the_field('second_input') ?>" required>
                    <input name="phone" type="number" placeholder="<?php the_field('third_input') ?>">
                    <textarea name="text" placeholder="<?php the_field('fourth_input') ?>"></textarea>
                    <button id="submit-static-form" class="btn-general filled white" type="submit"><?php the_field('contact_form_button_text') ?></button>
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>