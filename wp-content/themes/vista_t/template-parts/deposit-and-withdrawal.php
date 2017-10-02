<?php
/**
 * Template Name: dep-and-with
 */
get_header(); ?>
    <div class="l-innerContent">
        <div class="deposit-content">
            <div class="mainwrap">
                <div class="deposit-instructions">
                    <?php the_field('top_text'); ?>
                </div>
                <div class="deposit-methods">
                    <ul class="deposit-methods-tags no-bullet">
                        <li><a class="uppercase" href="#deposit-method-1"><?php the_field('left_section_title'); ?></a></li>
                        <li><a class="uppercase" href="#deposit-method-2"><?php the_field('right_section_title'); ?></a></li>
                    </ul>
                    <div class="deposit-methods-item" id="deposit-method-1">
                        <?php
                        if(get_field('subsections')) {
                            foreach (get_field('subsections') as $item) { ?>
                                <div class="deposit-methods-item-inneritem spoiler-wrap">
                                    <div class="deposit-methods-item-inneritem-btn spoiler-btn"><span><?= $item['title']; ?></span><i
                                                class="fa fa-caret-down spoiler-icon"></i></div>
                                    <div class="spoiler-content">
                                        <div class="deposit-methods-item-inneritem-content">
                                            <?php $table = $item['table'];

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
                                                        if($i == 0 || $i == 4) {
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
                            <?php }
                        } ?>
                    </div>
                    <div class="deposit-methods-item" id="deposit-method-2">
                        <?php
                        if(get_field('subsections_right')) {
                            foreach (get_field('subsections_right') as $item) { ?>
                                <div class="deposit-methods-item-inneritem spoiler-wrap">
                                    <div class="deposit-methods-item-inneritem-btn spoiler-btn"><span><?= $item['title']; ?></span><i
                                                class="fa fa-caret-down spoiler-icon"></i></div>
                                    <div class="spoiler-content">
                                        <div class="deposit-methods-item-inneritem-content">
                                            <?php $table = $item['table'];

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
                                                        if($i == 0 || $i == 4) {
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
                            <?php }
                        } ?>
                    </div>
                </div>
                <div class="deposit-note">
                    <div class="deposit-note-wrap">
                        <?php the_field('bottom_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>