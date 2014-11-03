<div class="col-sm-4 header_widget_left">
    <?php 
    if (is_active_sidebar( 'header_left' )) { 
        dynamic_sidebar( 'header_left' );
    } else {   
        get_template_part( 'parts/example_widgets', 'header'); 
    } 
    ?>
</div>
<div class="col-sm-4">
    <?php
    get_template_part( 'parts/header', 'logo'); 
    ?>
</div>
<div class="col-sm-4 header_widget_right">
    <?php 
    if (is_active_sidebar( 'header_right' )) { 
        dynamic_sidebar( 'header_right' );
    } else {   
        get_template_part( 'parts/example_widgets', 'header'); 
    } 
    ?>
</div>
<div class="clear"></div>

