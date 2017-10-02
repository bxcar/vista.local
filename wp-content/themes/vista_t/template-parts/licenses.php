<?php
/**
 * Template Name: licenses
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="licenses-content">
            <div class="mainwrap licenses-wrap">
                <div class="licenses-description">
                    <?php the_field('top_text'); ?>
                </div>
                <div class="licences-list">
                    <?php
                    if(get_field('items')) {
                        foreach (get_field('items') as $item) { ?>
                            <div class="licences-list-item">
                            <?php if($item['text_in_left_top_corner']) { ?><div class="licences-list-item-label"><?= $item['text_in_left_top_corner'] ?></div><?php } ?>
                                <figure class="licences-list-item-img"><img src="<?= $item['block_img'] ?>"></figure>
                                <div class="licences-list-item-text">
                                    <p class="uppercase extra-dark-gray"><?= $item['title'] ?></p>
                                    <p class="light-gray"><?= $item['desc'] ?></p><?php if($item['button']['title']) { ?><a class="btn-general small outline orange" href="<?php

                                    if ($item['button']['postid']) {
                                        the_permalink($item['button']['postid']);
                                    } else {
                                        echo $item['button']['url'];
                                    }

                                    ?>" target="<?php echo $item['button']['target']; ?>"><?php echo $item['button']['title']; ?></a><?php } ?>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>