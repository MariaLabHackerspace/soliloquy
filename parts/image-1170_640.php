<?php
if (get_post_meta($post->ID, 'hide_image_on_page', true) != "true" ) {
    if (has_post_thumbnail()) {
        the_post_thumbnail('nimbus_1170_640', array('class' => 'nimbus_1170_640'));
    } else {
        if (nimbus_get_option('reminder_images') == "on" ) {
        ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/preview/nimbus_1170_640_<?php echo rand(1,4); ?>.jpg" class="nimbus_1170_640" alt="<?php the_title(); ?>" />
        <?php 
        }
    }
}
?>   
