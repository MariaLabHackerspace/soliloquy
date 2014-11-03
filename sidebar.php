<?php
// set conditions to show widget areas
global $wp_query;
$i = 1;
if (is_page() || is_single()) {
    $postid = $wp_query->post->ID;
    if (trim(get_post_meta($postid, 'alt_sidebar_select', true)) != "") {
        while ($i <= 20) {
            if (trim(get_post_meta($postid, 'alt_sidebar_select', true)) == $i) {
                if (is_active_sidebar( "sidebar_" . $i )) {
                    dynamic_sidebar( "sidebar_" . $i );
                }
            }
            $i++;
        }
    } else if ( is_single() ) {
        if (is_active_sidebar( "sidebar_blog" )) {
            dynamic_sidebar( "sidebar_blog" );
        }
    } else {
        if (is_active_sidebar( "sidebar_pages" )) {
            dynamic_sidebar( "sidebar_pages" );
        }
    }
}
?>