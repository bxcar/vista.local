<?php
/**
 * Template Name: support
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="support-block wave-bg">
            <div class="mainwrap support-wrap">
                <?php the_field('text_1')?>
            </div>
        </div>
        <div class="support-block">
            <figure class="bg-image overlay-dark"><img src="<?= get_template_directory_uri(); ?>/img/support-block-bg-0.png"></figure>
            <figure class="bg-graphic-bottom"><img src="<?= get_template_directory_uri(); ?>/img/support-block-bg-graphic.png"></figure>
            <div class="mainwrap support-wrap">
                <?php the_field('text_2')?>
            </div>
        </div>
        <div class="support-block graphic-elem-bg">
            <div class="mainwrap support-wrap">
                <?php the_field('text_3')?>
            </div>
        </div>
    </div>
<?php get_header(); ?>