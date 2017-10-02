<?php
/**
 * Template Name: forex
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="products-content">
            <div class="mainwrap">
                <div class="products-description">
                    <?php the_post();
                    the_content(); ?>
                </div>
                <div class="products-table-wrap box-shadow-general">
                    <div class="products-table">
                        <?php $table = get_field('table');

                        if ($table) {

                            echo '<table>';

                            if ($table['header']) {

                                echo '<thead>';

                                echo '<tr>';
                                $table_header_count = count($table['header']);
                                $i = 0;
                                foreach ($table['header'] as $th) {
                                    if($i == ($table_header_count-2)) {
                                        echo '<th colspan="2">';
                                        echo $th['c'];
                                        echo '</th>';
                                    } elseif($i == ($table_header_count-1)) {

                                    } else {
                                        echo '<th rowspan="2">';
                                        echo $th['c'];
                                        echo '</th>';
                                    }

                                $i++; }

                                echo '</tr>';

                                echo '</thead>';
                            }

                            echo '<tbody>';

                            foreach ($table['body'] as $tr) {

                                echo '<tr>';
                                $i = 0;
                                foreach ($tr as $td) {
                                    if($i == 0) {
                                        echo '<td class="semibold uppercase orange">';
                                    } else {
                                        echo '<td>';
                                    }
                                    echo $td['c'];
                                    echo '</td>';
                                $i++; }

                                echo '</tr>';
                            }

                            echo '</tbody>';

                            echo '</table>';
                        } ?>
                    </div>
                    <script>
                        jQuery('.products-table thead').append(jQuery('.products-table tbody tr:first-child'));
                        for(var i = 0; i < 5; i++) {
                            jQuery('.products-table thead tr:last-child td:nth-child(1)').remove();
                        }
                    </script>
                    <div class="products-table-footer"><span><?php the_field('text_under_table'); ?></span><span><?php the_field('number_under_table'); ?></span></div>
                </div>
            </div>
        </div>
        <div class="contactUs-innerblock">
            <figure class="bg-image overlay-dark"><img src="<?= get_template_directory_uri(); ?>/img/contact-bg.png"></figure>
            <figure class="bg-graphic-bottom"><img src="<?= get_template_directory_uri(); ?>/img/contact-form-graphic-bg.png"></figure>
            <div class="mainwrap">
                <div class="center-inner-block">
                    <h2 class="title-section white"><?php the_field('cf_title'); ?></h2>
                </div>
                <form class="contactUs-form form-general white" id="static-form" method="post">
                    <input name="required-field" type="hidden" value="email">
                    <input name="name" type="text" placeholder="<?php the_field('cf_field_1'); ?>">
                    <input name="email" type="email" placeholder="<?php the_field('cf_field_2'); ?>" required>
                    <input name="phone" type="number" placeholder="<?php the_field('cf_field_3'); ?>">
                    <textarea name="text" placeholder="<?php the_field('cf_field_4'); ?>"></textarea>
                    <button id="submit-static-form" class="btn-general filled white" type="submit"><?php the_field('cf_button_text'); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>