<?php
$nimbus_post_meta_blog = nimbus_get_option('nimbus_post_meta_blog');
if (has_category() || has_tag()) {
?>
    <div class="row tax_tags">
        <div class="col-xs-6 tax">
            <?php 
            if ($nimbus_post_meta_blog['categories'] == 1) {
                if (has_category()) {
                    _e('Posted in: ', 'nimbus'); 
                    the_category(', ');
                }
            }
            ?>
        </div>
        <div class="col-xs-6 tags">
            <?php
            if ($nimbus_post_meta_blog['tags'] == 1) {
                if (has_tag()) { 
                    the_tags('Tags: ', ', ', '');
                } 
            }
            ?>
        </div>
    </div>
<?php 
}
?>
