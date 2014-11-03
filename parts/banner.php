<?php 
global $post;

    $banner_option = nimbus_get_option('nimbus_banner_option');
    $nimbus_content_width_banner = nimbus_get_option('nimbus_content_width_banner');

// Do frontpage banner options
if ((is_front_page() && !is_paged())) {
    // Content width banner
    if ($banner_option == 'image_content_width') { 
    ?>
        <div>
            <?php
            if (!empty($nimbus_content_width_banner)) {
            ?>
            <img id="frontpage_banner" src="<?php echo $nimbus_content_width_banner; ?>" alt="Frontpage Banner" />
            <?php
            } else {
                if (nimbus_get_option('reminder_images') == 'on') {
                ?>
                    <img id="frontpage_banner" src="<?php echo get_template_directory_uri(); ?>/images/preview/nimbus_1170_385_<?php echo rand(1,3); ?>.jpg" alt="Frontpage Banner" />
                <?php
                }
            }
            ?>
        </div>
    <?php 
    } 
} else {
// Not on frontpage
}     
?>