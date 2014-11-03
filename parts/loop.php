<?php
global $more;
if (have_posts()) { 
    while (have_posts()) { 
        the_post();
        if (is_single() || is_page()) {
            // no $more
        } else {
            $more = 0;
        }
        ?>
        <div <?php post_class('container content'); ?> >
            <?php
            if (is_single()) {
                get_template_part( 'parts/content', 'single');
            } else if (is_page()) {
                get_template_part( 'parts/content', 'page');
            } else {
                get_template_part( 'parts/content', 'blog');
            }
            ?>
        </div>
    <?php    
    }
} else {
        get_template_part( 'parts/error', 'no_results');
}
?>


