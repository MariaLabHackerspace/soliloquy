   
        <footer class="container">
            <?php
            if (is_single()) {
                get_template_part( 'parts/single_post_nav');
            } else if (is_page()) {
                // no nav
            } else {
                get_template_part( 'parts/blog', 'pagination');
            }
            
            ?>
            <div class="content_constrain">
                <div class="row footer_widgets">
                    <div id="footer_widget_left" class="col-md-3">
                        <?php 
                        if (is_active_sidebar( 'Footer Left' )) { 
                            dynamic_sidebar( 'Footer Left' );
                        } else {   
                            get_template_part( 'parts/example_widgets', 'footer'); 
                        } 
                        ?>
                    </div>			
                    <div id="footer_widget_center_left" class="col-md-3">
                        <?php 
                        if (is_active_sidebar( 'Footer Center Left' )) { 
                            dynamic_sidebar( 'Footer Center Left' );
                        } else {   
                            get_template_part( 'parts/example_widgets', 'footer'); 
                        }
                        ?>
                    </div>			
                    <div id="footer_widget_center_right" class="col-md-3">
                        <?php 
                        if (is_active_sidebar( 'Footer Center Right' )) { 
                            dynamic_sidebar( 'Footer Center Right' );
                        } else {    
                            get_template_part( 'parts/example_widgets', 'footer'); 
                        } 
                        ?>
                    </div>
                    <div id="footer_widget_right" class="col-md-3">
                        <?php 
                        if (is_active_sidebar( 'Footer Right' )) { 
                            dynamic_sidebar( 'Footer Right' );
                        } else {    
                            get_template_part( 'parts/example_widgets', 'footer');
                        } 
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <p id="copyright"><?php echo nimbus_get_option('copyright') ?></p>
                    </div>					
                    <div class="col-md-5 col-md-offset-2">
                        <p id="credit"><a href="http://nimbusthemes.com/free/soliloquy/">Soliloquy WordPress Theme</a></p>
                    </div>       
                </div> 
            </div>
        </footer>
    
<?php wp_footer(); ?>		
</body>
</html>