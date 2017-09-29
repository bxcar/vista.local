<?php
/**
 * Template Name: liquidity
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="liquidity-content">
            <div class="mainwrap">
                <div class="liquidity-description box-shadow-general">
                    <?php the_field('top_text'); ?>
                </div>
            </div>
            <div class="mainwrap-wide">
                <div class="liquidity-list">
                    <?php
                    if(get_field('items')) {
                        foreach (get_field('items') as $item) { ?>
                            <div class="liquidity-list-item">
                                <div class="liquidity-list-icon"><img src="<?= $item['items_item_img']?>"></div>
                                <p class="text-center extra-dark-gray"><?= $item['items_item_text']?></p>
                            </div>
                        <?php }
                     } ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>