<?php
$text = array(
    "Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.",
    "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in mollit anim id est laborum.",
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.",
    "Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.",
    "Quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.",
);
$title = array(
    "Lorem Ipsum",
    "Sed ut Perspiciatis",
    "Dolores Eos Qui",
    "Ratione Voluptatem",
    "Exercitation",
);
$rand = rand(0, 4);
$title = $title[$rand];
$rand = rand(0, 4);
$text = $text[$rand];
if (nimbus_get_option('example_widgets') == "on") {
    the_widget('WP_Widget_Text', array('title' => $title, 'text' => $text, 'filter' => ''));   
} 
?>