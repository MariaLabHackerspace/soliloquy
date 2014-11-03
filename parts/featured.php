<?php

// set variables if front-page
if (is_front_page()) {
    $nimbus_left_featured = nimbus_get_option('nimbus_left_featured');
    $nimbus_center_featured = nimbus_get_option('nimbus_center_featured');
    $nimbus_right_featured = nimbus_get_option('nimbus_right_featured');
    $toggle = nimbus_get_option('nimbus_toggle_featured');
    
// set variables if alternate template    
} else if (is_page_template('alt_frontpage.php')) {
    $nimbus_left_featured = trim(get_post_meta($post->ID, 'left_featured', true));
    $nimbus_center_featured = trim(get_post_meta($post->ID, 'center_featured', true));
    $nimbus_right_featured = trim(get_post_meta($post->ID, 'right_featured', true));
    $toggle = trim(get_post_meta($post->ID, 'toggle_featured', true));
}

if ((is_front_page() && !is_paged()) || is_page_template('alt_frontpage.php')) {   
    $nimbus_featured = array(
        'nimbus_left_featured'              =>  $nimbus_left_featured,
        'nimbus_center_featured'            =>  $nimbus_center_featured,
        'nimbus_right_featured'             =>  $nimbus_right_featured,
    );
    if ($toggle == 1) {
    ?>
        <div class="container frontpage_featured">
            <div class="row">
                <?php
                foreach ($nimbus_featured as $key => $featured) {
                ?>
                    <div id="<?php echo $key; ?>" class="col-sm-4 featured">
                        <?php 
                        if (!empty($featured)) { 
                            $original_query = $wp_query;
                            $wp_query = null;
                            $wp_query = new WP_Query(array('page_id' => $featured, 'posts_per_page' => 1, 'post__not_in' => get_option( 'sticky_posts' )));
                            if (have_posts()) : 
                                while (have_posts()) : 
                                    the_post();
                                    get_template_part( 'parts/content', 'frontpage_featured'); 
                                endwhile;
                                else:
                                    get_template_part( 'parts/error', 'no_results');
                            endif;
                            $wp_query = null;
                            $wp_query = $original_query;
                            wp_reset_postdata();
                        } 
                        ?>	
                    </div>
                <?php
                }
                ?>
            </div>       
        </div>
    <?php
    }
}
?>