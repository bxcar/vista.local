<?php
/**
 * Template Name: accounts
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="accounts-content">
            <div class="mainwrap">
                <div class="accounts-table-wrap box-shadow-general">
                    <div class="accounts-table">
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

                            $amount = count($table['body']);
                            $i = 1;
                            foreach ($table['body'] as $tr) {
                                if ($i < $amount) {
                                    echo '<tr>';
                                    foreach ($tr as $td) {
                                        echo '<td>';
                                        echo $td['c'];
                                        echo '</td>';
                                    }

                                    echo '</tr>';
                                }
                                $i++;
                            }

                            echo '</tbody>';

                            $i = 1;
                            echo '<tfoot>';
                            foreach ($table['body'] as $tr) {
                                if ($i == $amount) {
                                    echo '<tr>';
                                    foreach ($tr as $td) {
                                        echo '<td>';
                                        echo $td['c'];
                                        echo '</td>';
                                    }

                                    echo '</tr>';
                                }
                                $i++;
                            }
                            echo '</tfoot>';

                            echo '</table>';
                        } ?>
                    </div>
                    <p><?php the_field('text_under_table');?></p>
                </div>
                <div class="accounts-description">
                    <?php the_field('bottom_text');?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>