<?php
$thumb_id = get_post_thumbnail_id(get_the_ID());
$args = array(
	'post_type' => 'attachment',
	'post_status' => null,
	'post_parent' => $post->ID,
	'include'  => $thumb_id
    ); 
$thumbnail_image = get_posts($args);
if (has_post_thumbnail() && isset($thumbnail_image[0])) {
    if ($thumbnail_image[0]->post_excerpt != '') {
    ?>
        <div class="featured_image_caption">
            <?php
            echo '<span>' . $thumbnail_image[0]->post_excerpt . '</span>';
            ?>
        </div>
    <?php
    } else {
        // echo "<div class='clear30'></div>";
    }
} else {
    // echo "<div class='clear30'></div>";
}
?> 
