<?php
$sidebar_select = get_post_meta($post->ID, 'sidebar_select', true);
if ($sidebar_select == 'right') {
    $sidebar_select_aside_classes = '';
    $sidebar_select_content_classes = '';
} else {
    $sidebar_select_aside_classes = 'col-sm-pull-9';
    $sidebar_select_content_classes = 'col-sm-push-3';
}
if (empty($sidebar_select) || ($sidebar_select == 'none')) {
    get_template_part( 'parts/post', 'header');
    echo "<div class='content_constrain'>";
        get_template_part( 'parts/author');
        get_template_part( 'parts/scripts', 'content_top');
        the_content();
        get_template_part( 'parts/scripts', 'content_bottom');
        get_template_part( 'parts/wp_link_pages');
        get_template_part( 'parts/bio');
        comments_template();
        get_template_part( 'parts/tax_tags');
    echo "</div>";
} else {
    get_template_part( 'parts/post', 'header');
    echo "<div class='content_constrain'>";
        ?>
        <div class="row">
            
            <div class="col-sm-9 <?php echo $sidebar_select_content_classes; ?>">
                <?php
                get_template_part( 'parts/scripts', 'content_top');
                the_content();
                get_template_part( 'parts/scripts', 'content_bottom');
                get_template_part( 'parts/wp_link_pages');
                get_template_part( 'parts/bio');
                comments_template();
                get_template_part( 'parts/tax_tags');
                ?>
               </div>
               <div class="col-sm-3 <?php echo $sidebar_select_aside_classes; ?>">
                <div class="excerpt">
                    <?php
                    the_excerpt();
                    ?>
                </div>
                <?php
                get_template_part( 'parts/author');
                ?>
            </div>
        </div> 
    <?php
    echo "</div>";
}
?>

                    

                        
              
 
  
