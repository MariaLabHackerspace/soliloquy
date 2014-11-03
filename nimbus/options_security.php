<?php

/* **************************************************************************************************** */
// Sanitize functions based off of: see below 
/* **************************************************************************************************** */

/**
 * @package   Options_Framework
 * @author    Devin Price <devin@wptheming.com>
 * @license   GPL-2.0+
 * @link      http://wptheming.com
 * @copyright 2013 WP Theming
 */

/* **************************************************************************************************** */
// Filter text fields
/* **************************************************************************************************** */

function nimbus_filter_text($input) {
    global $allowedposttags;
    $output = wp_kses($input, $allowedposttags);
    return $output;
}

add_filter('nimbus_filter_text', 'nimbus_filter_text');


/* **************************************************************************************************** */
// Filter Checkbox
/* **************************************************************************************************** */

function nimbus_filter_checkbox($input) {
    if ($input) {
        $output = "1";
    } else {
        $output = "0";
    }
    return $output;
}

add_filter('nimbus_filter_checkbox', 'nimbus_filter_checkbox');


/* **************************************************************************************************** */
// Filter Multicheck
/* **************************************************************************************************** */

function nimbus_filter_multicheck($input, $option) {
    $output = '';
    if (is_array($input)) {
        foreach ($option['options'] as $key => $value) {
            $output[$key] = "0";
        }
        foreach ($input as $key => $value) {
            if (array_key_exists($key, $option['options']) && $value) {
                $output[$key] = "1";
            }
        }
    }
    return $output;
}

add_filter('nimbus_filter_multicheck', 'nimbus_filter_multicheck', 10, 2);


/* **************************************************************************************************** */
// Filter image fields
/* **************************************************************************************************** */

function nimbus_filter_image($input) {
    $output = esc_url($input);
    return $output;
}

add_filter('nimbus_filter_image', 'nimbus_filter_image');


/* **************************************************************************************************** */
// Filter textarea fields
/* **************************************************************************************************** */

function nimbus_filter_textarea($input) {
    if ( current_user_can( 'unfiltered_html' ) ) {
        $output = $input;
    }
    else {
        global $allowedtags;
        $output = wp_kses( $input, $allowedtags);
    }
    return $output;
}

add_filter('nimbus_filter_textarea', 'nimbus_filter_textarea');


/* **************************************************************************************************** */
// Filter radio fields
/* **************************************************************************************************** */

function nimbus_filter_radio( $input, $option ) {
    global $allowedtags;
	$output = wp_kses( $input, $allowedtags);
	return $output;
}

add_filter('nimbus_filter_radio', 'nimbus_filter_radio', 10, 2);


/* **************************************************************************************************** */
// Filter select fields
/* **************************************************************************************************** */

function nimbus_filter_select( $input, $option ) {
    global $allowedtags;
	$output = wp_kses( $input, $allowedtags);
	return $output;
}

add_filter('nimbus_filter_select', 'nimbus_filter_select', 10, 2);


/* **************************************************************************************************** */
// Filter color fields
/* **************************************************************************************************** */

function nimbus_filter_color( $input, $default = '' ) {
    $hex = $input;
    if ( nimbus_validate_hex( $hex ) ) {
        return $hex;
    } else {
        return $default;
    }
}

add_filter('nimbus_filter_color', 'nimbus_filter_color');


/* **************************************************************************************************** */
// Filter face fields
/* **************************************************************************************************** */

function nimbus_filter_face( $input ) {
	global $NIMBUS_FONT_FACES;
    $output = '';
	if ( array_key_exists( $input['face'], $NIMBUS_FONT_FACES ) ) {
		$output = $input;
	}
	return $output;
}

add_filter('nimbus_filter_face', 'nimbus_filter_face');


/* **************************************************************************************************** */
// Typography
/* **************************************************************************************************** */

function nimbus_filter_typography( $input, $option ) {

	$output = wp_parse_args( $input, array(
		'size'  => '',
        'line' => '',
		'face'  => '',
		'style' => '',
		'color' => '',
        'fonttrans' => ''
	) );
    
    /* Size */
	if ( 0 === preg_match( '/^[0-9]{2}$/', $output['size']) ) {
		$output['size'] = $output['size'];
	}
	else {
		$output['size'] = '';
	}
    
    $output['line'] = $output['line'];
    $output['style'] = $output['style'];
    $output['fonttrans'] = $output['fonttrans'];
    
    /* Face */
    global $NIMBUS_FONT_FACES;
	if ( array_key_exists( $output['face'], $NIMBUS_FONT_FACES ) ) {
		$output['face'] = $output['face'];
	} else {
        $output['face'] = '';
    }
    
    /* Color */
	$output['color'] = apply_filters( 'nimbus_filter_color', $output['color'] );
	return $output;
}
add_filter( 'nimbus_filter_typography', 'nimbus_filter_typography', 10, 2);


/* **************************************************************************************************** */
// Font
/* **************************************************************************************************** */

function nimbus_filter_font( $input, $option ) {

	$output = wp_parse_args( $input, array(
		'face'  => '',
		'color' => ''
	) );

    /* Face */
    global $NIMBUS_FONT_FACES;
	if ( array_key_exists( $output['face'], $NIMBUS_FONT_FACES ) ) {
		$output['face'] = $output['face'];
	} else {
        $output['face'] = '';
    }
    
    /* Color */
	$output['color'] = apply_filters( 'nimbus_filter_color', $output['color'] );
	return $output;
}
add_filter( 'nimbus_filter_font', 'nimbus_filter_font', 10, 2);


/* **************************************************************************************************** */
// Validate Hex
/* **************************************************************************************************** */

function nimbus_validate_hex( $hex ) {
	$hex = trim( $hex );
	if ( 0 === strpos( $hex, '#' ) ) {
		$hex = substr( $hex, 1 );
	}
	elseif ( 0 === strpos( $hex, '%23' ) ) {
		$hex = substr( $hex, 3 );
	}
	if ( 0 === preg_match( '/^[0-9a-fA-F]{6}$/', $hex ) ) {
		return false;
	}
	else {
		return true;
	}
}
