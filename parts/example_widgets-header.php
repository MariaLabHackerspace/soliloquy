<?php
if (nimbus_get_option('example_widgets') == "on") {
    the_widget('WP_Widget_Text', array('title' => '', 'text' => 'Small Widget Spot', 'filter' => ''));   
} 
?>