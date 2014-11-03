<?php



/* * *************************************************************************************************** */

// Generate option tabs

/* * *************************************************************************************************** */



function nimbus_tab_engine() {

    global $NIMBUS_OPTIONS_ARR;

    $options = $NIMBUS_OPTIONS_ARR;

    foreach ($options as $option) {

        $output = '';

        if ($option['type'] == "tab") {

            $output .= '<li><a href="#' . $option['url'] . '"><i class="fa ' . $option['icon'] . ' fa-2x"></i>' . $option['name'] . '</a></li>';

        }

        echo $output;

    }

}





/* * *************************************************************************************************** */

// Generate option tabs content

/* * *************************************************************************************************** */



function nimbus_field_engine() {



    global $allowedtags, $NIMBUS_FONT_FACES, $NIMBUS_OPTIONS_ARR;

    $option_name = THEME_OPTIONS;

    $theme_options = get_option(THEME_OPTIONS);

    $options = $NIMBUS_OPTIONS_ARR;





    foreach ($options as $option) {



        $output = '';



        // Set option variables



        if (isset($option['classes'])) {

            $classes = $option['classes'];

        }



        if (isset($option['label'])) {

            $label = $option['label'];

        }



        // Set field number variable



        if (($option['type'] == "tab")) {

            unset($field_num);

            $field_num = 1;

        }



        // Open tab container



        if (($option['type'] == "tab")) {

            echo "<div id='" . $option['url'] . "'>";

        }



        // Do stuff excluding tabs and html.



        if (($option['type'] != "tab") && ($option['type'] != "html") && ($option['type'] != "close_tab")) {



            // Set value for default and override with saved option if set.



            $value = '';

            if (isset($option['default'])) {

                $value = $option['default'];

            }

            if (isset($theme_options[($option['id'])])) {

                $value = $theme_options[($option['id'])];

            }



            // Begin option, wrap all with basic title and wrappers.



            $output .= '<div id="' . $option['id'] . '_option_wrapper" class="option_wrapper">' . "\n";







            $output .= '<p class="option_name"><span class="option_number">' . $field_num . '</span>. ' . $option['name'] . '</p>' . "\n";



            // Include description if availible.



            if (isset($option['desc'])) {

                $output .= '<p class="option_description">' . $option['desc'] . '</p>' . "\n";

            }

        }



        // Construct text field.



        if ($option['type'] == "text") {

            $output .= '<input id="' . $option['id'] . '" class="' . $classes . ' text_field" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" type="text" value="' . esc_attr($value) . '" />' . "\n";

            $field_num++;



            // Construct textarea.

        } else if ($option['type'] == "textarea") {

            $output .= '<textarea id="' . $option['id'] . '" class="' . $classes . ' textarea" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" >' . esc_textarea($value) . '</textarea>' . "\n";

            $field_num++;



            // Construct select.

        } else if ($option['type'] == "select") {

            $output .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" id="' . esc_attr($option['id']) . '">' . "\n";

            foreach ($option['options'] as $key => $select) {



                $output .= '<option ' . selected($value, $key, false) . ' value="' . esc_attr($key) . '">' . esc_html($select) . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $field_num++;



            // Construct Font Select.

        } else if ($option['type'] == "typography") {



            // Font Face



            $output .= '<div class="split_select_left">' . "\n";

            $output .= '<p>' . __('Font Face: ( * Google Web Font )','nimbus') . '</p>' . "\n";

            $output .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][face]') . '" id="' . esc_attr($option['id'] . '_face') . '">' . "\n";

            $faces = $NIMBUS_FONT_FACES;

            ksort($faces);

            foreach ($faces as $key => $face) {

                $output .= '<option value="' . esc_attr($key) . '" ' . selected($value['face'], $key, false) . '>' . esc_html($face['name']) . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $output .= '</div>' . "\n";



            // Font Size



            $output .= '<div class="split_select_right">' . "\n";

            $output .= '<p>' . __('Font Size','nimbus') . '</p>' . "\n";

            $output .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][size]') . '" id="' . esc_attr($option['id'] . '_size') . '">' . "\n";

            for ($i = 6; $i < 66; $i++) {

                $font_size = $i . 'px';

                $output .= '<option value="' . esc_attr($font_size) . '" ' . selected($value['size'], $font_size, false) . '>' . esc_html($font_size) . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $output .= '</div><div class="clear10"></div>' . "\n";



            // Line-Height



            $output .= '<div class="split_select_left">' . "\n";

            $output .= '<p>' . __('Line Height','nimbus') . '</p>' . "\n";

            $output .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][line]') . '" id="' . esc_attr($option['id'] . '_line') . '">' . "\n";

            $line_begin = 0.5;

            $line_increment = 0.1;

            for ($i = 0; $i < 16; $i++) {

                $line_height = ($line_begin + $line_increment * $i) . 'em';

                $output .= '<option value="' . esc_attr($line_height) . '" ' . selected($value['line'], $line_height, false) . '>' . esc_html($line_height) . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $output .= '</div>' . "\n";



            // Font Style



            $output .= '<div class="split_select_right">' . "\n";

            $output .= '<p>' . __('Font Style','nimbus') . '</p>' . "\n";

            $styles = nimbus_font_styles();

            $output .= '<select class="' . $classes . '" name="' . $option_name . '[' . $option['id'] . '][style]" id="' . $option['id'] . '_style">' . "\n";

            foreach ($styles as $key => $style) {

                $output .= '<option value="' . esc_attr($key) . '" ' . selected($value['style'], $key, false) . '>' . $style . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $output .= '</div><div class="clear10"></div>' . "\n";



            // Text Transform



            $output .= '<div class="split_select_left">' . "\n";

            $output .= '<p>' . __('Font Case','nimbus') . '</p>' . "\n";

            $cases = nimbus_font_transform();

            $output .= '<select class="' . $classes . '" name="' . $option_name . '[' . $option['id'] . '][fonttrans]" id="' . $option['id'] . '_case">' . "\n";

            foreach ($cases as $key => $case) {

                $output .= '<option value="' . esc_attr($key) . '" ' . selected($value['fonttrans'], $key, false) . '>' . $case . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $output .= '</div>' . "\n";



            // Font Color



            $output .= '<div class="split_select_right_color">' . "\n";

            $output .= '<p>' . __('Font Color','nimbus') . '</p>' . "\n";

            $output .= '<input class="' . $classes . ' hex_field color-picker" name="' . esc_attr($option_name . '[' . $option['id'] . '][color]') . '" id="' . esc_attr($option['id'] . '_color') . '" type="text" value="' . esc_attr($value['color']) . '" />';

            $output .= '</div><div class="clear10"></div>' . "\n";

            $field_num++;



            // Construct checkbox.

        } else if ($option['type'] == "checkbox") {

            $output .= '<input id="' . $option['id'] . '" class="' . $classes . '" type="checkbox" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" ' . checked($value, 1, false) . ' /><span class="checkbox_label">' . $label . '</span>';

            $field_num++;



            // Construct multiple checkboxes

        } else if ($option['type'] == "multicheck") {

            foreach ($option['options'] as $key => $multi) {

                $checked = '';

                $label = $multi;

                $multi = preg_replace('/[^a-zA-Z0-9._\-]/', '', strtolower($key));



                $id = $option_name . '-' . $option['id'] . '-' . $multi;

                $name = $option_name . '[' . $option['id'] . '][' . $multi . ']';



                if (isset($value[$multi])) {

                    $checked = checked($value[$multi], 1, false);

                }



                $output .= '<input id="' . esc_attr($id) . '" class="' . $classes . '" type="checkbox" name="' . esc_attr($name) . '" ' . $checked . ' /><label for="' . esc_attr($id) . '">' . esc_html($label) . '</label><br />';

            }

            $field_num++;



            // Construct radio.

        } else if ($option['type'] == "radio") {

            $name = $option_name . '[' . $option['id'] . ']';

            foreach ($option['options'] as $key => $radio) {

                $id = $option_name . '-' . $option['id'] . '-' . $key;

                $output .= '<input class="' . $classes . '" type="radio" name="' . esc_attr($name) . '" id="' . esc_attr($id) . '" value="' . esc_attr($key) . '" ' . checked($value, $key, false) . ' /><label for="' . esc_attr($id) . '">' . esc_html($radio) . '</label><br />';

            }

            $field_num++;



            // Font Face/Color

        } else if ($option['type'] == "font") {



            // Font Face



            $output .= '<div class="split_select_left">' . "\n";

            $output .= '<p>' . __('Font Face','nimbus') . '</p>' . "\n";

            $output .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][face]') . '" id="' . esc_attr($option['id'] . '_face') . '">' . "\n";

            $faces = $NIMBUS_FONT_FACES;

            ksort($faces);

            foreach ($faces as $key => $face) {

                $output .= '<option value="' . esc_attr($key) . '" ' . selected($value['face'], $key, false) . '>' . esc_html($face['name']) . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $output .= '</div>' . "\n";



            // Font Color



            $output .= '<div class="split_select_right_color">' . "\n";

            $output .= '<p>' . __('Font Color','nimbus') . '</p>' . "\n";

            $output .= '<input class="' . $classes . '  hex_field color-picker" name="' . esc_attr($option_name . '[' . $option['id'] . '][color]') . '" id="' . esc_attr($option['id'] . '_color') . '" type="text" value="' . esc_attr($value['color']) . '" />';

            $output .= '</div><div class="clear10"></div>' . "\n";



            $field_num++;



            // Font Face Only

        } else if ($option['type'] == "face") {



            // Font Face



            $output .= '<div class="split_select_left">' . "\n";

            $output .= '<p>' . __('Font Face','nimbus') . '</p>' . "\n";

            $output .= '<select class="' . $classes . '" name="' . esc_attr($option_name . '[' . $option['id'] . '][face]') . '" id="' . esc_attr($option['id'] . '_face') . '">' . "\n";

            $faces = $NIMBUS_FONT_FACES;

            ksort($faces);

            foreach ($faces as $key => $face) {

                $output .= '<option value="' . esc_attr($key) . '" ' . selected($value['face'], $key, false) . '>' . esc_html($face['name']) . '</option>' . "\n";

            }

            $output .= '</select>' . "\n";

            $output .= '</div>' . "\n";



            $field_num++;



            // Construct color picker.

        } else if ($option['type'] == "color") {



            $output .= '<input class="' . $classes . ' hex_field color-picker" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" id="' . esc_attr($option['id']) . '" type="text" value="' . esc_attr($value) . '" />';

            $field_num++;



            // Construct image.

        } else if ($option['type'] == "image") {



            $output .= '<input id="' . $option['id'] . '" class="upload_image_text" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" type="text" value="' . $value . '" /><input class="upload_image_button" type="button" value="Upload" />' . "\n";



            $field_num++;



            // pro account

        } else if ($option['type'] == "pro") {



            $output .= '<p>' . __('This feature is available to premium theme users.','nimbus') . '</p><div class="clear5"></div><a class="nimbus_button_sm_pink" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade today!!</a></p>';

            $field_num++;



            // wp_editor

        } else if ($option['type'] == "editor") {

            echo $output;

            $textarea_name = esc_attr( $option_name . '[' . $option['id'] . ']' );

            $settings = array(

                'textarea_name' => $textarea_name,

                'media_buttons' => false,

                'tinymce' => array( 'plugins' => 'wordpress' )

            );

            wp_editor( $value, $option['id'], $settings );

            $output = '';

            $field_num++;



        // Sortable.

        } else if ($option['type'] == "sortable") {

           $value_array = explode(',', $value);

           $output .= '

           <script>

           jQuery(function() {

               jQuery( "#' . $option['id'] . '-sortable-field" ).sortable({

                   placeholder: "ui-state-highlight",

                   cursor: "crosshair",

                   create: function(event, ui) {

                       var order = jQuery("#' . $option['id'] . '-sortable-field").sortable("toArray");

                       jQuery("#' . $option['id'] . '").val(order.join(","));

                   },

                   update: function(event, ui) {

                       var order = jQuery("#' . $option['id'] . '-sortable-field").sortable("toArray");

                       jQuery("#' . $option['id'] . '").val(order.join(","));

                   }



               });

               jQuery( "#' . $option['id'] . '-sortable-field" ).disableSelection();

           });

           </script>

           ' . "\n";

           $output .= '<input type="hidden" id="' . $option['id'] . '" name="' . esc_attr($option_name . '[' . $option['id'] . ']') . '" value="" /><ul class="sortable_wrap" id="' . $option['id'] . '-sortable-field">' . "\n";

           foreach ($value_array as $unique_value) {

               $output .= '<li class="sortable_child" " id="' . esc_attr($unique_value) . '" class="ui-state-default">' . $option['options'][$unique_value] . '</li>' . "\n";

           }

           $output .= '</ul>' . "\n";

           $field_num++;





            // item_html

        } else if ($option['type'] == "item_html") {



            $output .= $option['html'];

            $field_num++;



            // Construct html.

        } else if ($option['type'] == "html") {

            $output .= $option['html'];

        }



        // Close field wrap html.



        if (($option['type'] != "tab") && ($option['type'] != "html") && ($option['type'] != "close_tab")) {

            $output .= '<div class="clear"></div></div>';

        }



        if (($option['type'] == "close_tab")) {

            echo "</div>";

        }



        echo $output;



    }



}