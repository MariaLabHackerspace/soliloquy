<?php
if (!has_excerpt()) {
    get_template_part( 'parts/post', 'header');
    echo "<div class='content_constrain'>";
        get_template_part( 'parts/author');
        ?>
        <div class="row">
            <div class="col-sm-12 without_excerpt">
                <?php
                the_content(__('Read more', 'nimbus').' &rsaquo;&rsaquo;');
                ?>
            </div>
        </div>
        <?php    
        get_template_part( 'parts/tax_tags');
    echo "</div>";
} else {
    get_template_part( 'parts/post', 'header');
    echo "<div class='content_constrain'>";
    ?>
        <div class="row">
            <div class="col-sm-3 with_excerpt">
                <div class="excerpt">
                    <?php
                    the_excerpt();
                    ?>
                </div>
                <?php
                get_template_part( 'parts/author');
                ?>
            </div>
            <div class="col-sm-9">
                <?php
                if ($top_scripts['post'] = 1) {
                    nimbus_scripts_content_top();
                }
                the_content(__('Read more', 'nimbus').' &rsaquo;&rsaquo;');
                if ($bottom_scripts['post'] = 1) {
                    nimbus_scripts_content_bottom();
                }
                ?>
            </div>
        </div>    
        <?php
        get_template_part( 'parts/tax_tags');
    echo "</div>";
}
?>
                    

                        
              
 
  
