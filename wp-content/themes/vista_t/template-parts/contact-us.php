<?php
/**
 * Template Name: contact-us
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="contactUs-inner">
            <div class="mainwrap">
                <div class="center-inner-block">
                    <h2 class="title-section"><?php the_field('cf_title'); ?></h2>
                </div>
                <form class="contactUs-form form-general" id="static-form" method="post">
                    <p class="contactUs-form-description"><?php the_field('text_under_cf_title'); ?></p>
                    <input name="required-field" type="hidden" value="email">
                    <input name="name" type="text" placeholder="<?php the_field('cf_field_1'); ?>" required>
                    <input name="email" type="email" placeholder="<?php the_field('cf_field_2'); ?>" required>
                    <input name="phone" type="number" placeholder="<?php the_field('cf_field_3'); ?>">
                    <input name="subject" type="text" placeholder="<?php the_field('cf_field_4'); ?>">
                    <textarea name="text" placeholder="<?php the_field('cf_field_5'); ?>"></textarea>
                    <button id="submit-static-form" class="btn-general filled orange" type="submit"><?php the_field('cf_button_text'); ?></button>
                </form>
                <div class="contactUs-warning">
                    <p class="contactUs-warning-title semibold uppercase orange"><span><?php the_field('text_under_cf_text_title'); ?></span></p>
                    <p class="light"><?php the_field('text_under_cf_text_desc'); ?></p>
                </div>
            </div>
        </div>
        <div class="contactDetails">
            <figure class="bg-image"><img src="<?php the_field('section_2_bg_img'); ?>"></figure>
            <div class="mainwrap contactDetails-wrap">
                <div class="contactDetails-column">
                    <h4 class="contactDetails-title"><?php the_field('section_2_title_1'); ?></h4>
                    <p class="contactDetails-description"><?php the_field('section_2_desc_1'); ?></p>
                </div>
                <div class="contactDetails-column">
                    <h4 class="contactDetails-title"><?php the_field('section_2_title_2'); ?></h4>
                    <p class="contactDetails-description"><?php the_field('section_2_desc_2'); ?></p>
                </div>
            </div>
        </div>
        <div class="contactEmails">
            <div class="mainwrap contactEmails-wrap">
                <div class="contactEmails-content box-shadow-general">
                    <div class="contactEmails-content-column">
                        <?php
                        if(get_field('items_1')) {
                            foreach (get_field('items_1') as $item) { ?>
                                <div class="contactEmails-item">
                                    <h4 class="contactEmails-item-title"><?= $item['title'] ?></h4>
                                    <p><span class="light-gray"><?= $item['subtitle'] ?></span>&emsp;<span class="medium-gray"><?= $item['desc'] ?></span>
                                    </p>
                                </div>
                            <?php }
                        } ?>
                    </div>
                    <div class="contactEmails-content-column">
                        <?php
                        if(get_field('items_2')) {
                            foreach (get_field('items_2') as $item) { ?>
                                <div class="contactEmails-item">
                                    <h4 class="contactEmails-item-title"><?= $item['title'] ?></h4>
                                    <p><span class="light-gray"><?= $item['subtitle'] ?></span>&emsp;<span class="medium-gray"><?= $item['desc'] ?></span>
                                    </p>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>