<?php
/**
 * Template Name: indices
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

                                foreach ($table['header'] as $th) {
                                        echo '<th>';
                                        echo $th['c'];
                                        echo '</th>';
                                }

                                echo '</tr>';

                                echo '</thead>';
                            }

                            echo '<tbody>';

                            foreach ($table['body'] as $tr) {

                                echo '<tr>';
                                $i = 0;
                                foreach ($tr as $td) {
                                    if($i == 4) {
                                        echo '<td class="table-cell-wide">';
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
                </div>
            </div>
        </div>
        <div class="contactUs-innerblock">
            <figure class="bg-image overlay-dark"><img src="<?= get_template_directory_uri(); ?>/img/contact-bg.png"></figure>
            <figure class="bg-graphic-bottom"><img src="<?= get_template_directory_uri(); ?>/img/contact-form-graphic-bg.png"></figure>
            <div class="mainwrap">
                <div class="center-inner-block">
                    <h2 class="title-section white"><?php the_field('cf_title', 148); ?></h2>
                </div>
                <form class="contactUs-form form-general white" id="static-form" method="post">
                    <input name="required-field" type="hidden" value="email">
                    <input name="name" type="text" placeholder="<?php the_field('cf_field_1', 148); ?>">
                    <input name="email" type="email" placeholder="<?php the_field('cf_field_2', 148); ?>" required>
                    <input name="phone" type="number" placeholder="<?php the_field('cf_field_3', 148); ?>">
                    <textarea name="text" placeholder="<?php the_field('cf_field_4', 148); ?>"></textarea>
                    <button id="submit-static-form" class="btn-general filled white" type="submit"><?php the_field('cf_button_text', 148); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>