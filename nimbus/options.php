<?php
/* * *************************************************************************************************** */
// Create Theme Options page 
// Print required JS and CSS files
// Help for Theme Options page
/* * *************************************************************************************************** */

add_action('admin_menu', 'nimbus_add_theme_options_page');

function nimbus_add_theme_options_page() {

    // Create Theme Options page 

    $theme_options_page = add_theme_page(THEME_NAME . __(' Theme Options', 'nimbus'), __(' Theme Options', 'nimbus'), 'edit_theme_options', 'nimbus-options', 'nimbus_page_render');

    if (!$theme_options_page) {
        return;
    }

    // Print required JS and CSS files

    add_action('admin_print_styles-' . $theme_options_page, 'nimbus_options_styles');

    add_action('admin_print_scripts-' . $theme_options_page, 'nimbus_options_scripts');

}

/* * *************************************************************************************************** */

// Enqueue admin JS
/* * *************************************************************************************************** */

function nimbus_options_scripts() {

    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-form');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('jquery-ui-sortable');
    wp_register_script('jquery_cookie', get_template_directory_uri() . '/nimbus/js/jquery.cookies.2.2.0.js', array('jquery'), '1.0');
    wp_enqueue_script('jquery_cookie');
    wp_register_script('options', get_template_directory_uri() . '/nimbus/js/options.js', array('wp-color-picker','jquery'), '1.0');
    wp_enqueue_script('options');
    wp_enqueue_media();
    
}

/* **************************************************************************************************** */
// Enqueue admin CSS
/* **************************************************************************************************** */

function nimbus_options_styles() {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/nimbus/css/option_page_style.css');
    wp_register_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css", array(), "1.0", "all");
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style('lato', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
    wp_enqueue_style('osans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('thickbox');
}

/* * *************************************************************************************************** */
// Include Resources on init
/* * *************************************************************************************************** */


add_action('admin_init', 'nimbus_require_resources');

function nimbus_require_resources() {

    require_once dirname(__FILE__) . '/options_engine.php';
    require_once dirname(__FILE__) . '/options_security.php';
}

/* * *************************************************************************************************** */
// Register Settings on init
/* * *************************************************************************************************** */

add_action('admin_init', 'nimbus_register_settings_on_init');

function nimbus_register_settings_on_init() {

    register_setting('nimbus_option_group', THEME_OPTIONS, 'nimbus_options_sanitize');

}


/* * *************************************************************************************************** */
// Render options page
/* * *************************************************************************************************** */

if (!function_exists('nimbus_page_render')) {



    function nimbus_page_render() {

        ?>
        <div id="options_container">
            <div class="newsletter">
            <p>get the newsletter! <a class='nimbus_button_nl' target='_blank' href='http://eepurl.com/A2701'>Sign Up!</a></p> 
            </div>
            <div class="social_button fb">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=528943183877095&version=v2.0";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://www.facebook.com/nimbusthemes" data-colorscheme="light" data-layout="button_count" data-show-faces="false"></div>
            </div>
            <div class="social_button twit">
                <a href="https://twitter.com/nimbusthemes" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @nimbusthemes</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <div class="social_button goog">
                <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/111351631103795825699" data-rel="publisher"></div>
                <script type="text/javascript">
                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/platform.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>
            </div>
            
            <div class="clear"></div>
            <a href="http://www.nimbusthemes.com"><img id="panel_logo" src="<?php echo get_template_directory_uri(); ?>/nimbus/images/nimbus-panel.jpg" alt='Nimbus Panel'  /></a>
            <div id="options_wrapper">   
                <div id="options_header">    
                    <img src="<?php if (ISFREE) { echo get_template_directory_uri() . '/nimbus/images/upgrade-panel.jpg'; } else { echo get_template_directory_uri() . '/nimbus/images/panel.jpg'; } ?>" id="options_banner" />
                    <?php if (ISFREE) { ?>
                    <a id="upgrade_in_banner" target="_blank" class="nimbus_button_big_pink" href="<?php echo SALESPAGEURL; ?>?utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=upgrade_in_banner_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">Upgrade Now!</a>
                    <?php } ?>
                </div>
                <div id="options_content">    
                    <div id="tab_wrapper">    
                        <ul id="tabs">
                            <?php nimbus_tab_engine(); ?>
                        </ul>
                    </div>
                    <div id="form_wrapper">
                        <form action="options.php" method="post" id="nimbus_form">
                            <div id="options_buttons_top">
                                <a id="demo_options_top" target="_blank" class="nimbus_button_big_gray" href="<?php echo DEMOURL; ?>&utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=demo_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">View Demo</a>
                                <a id="support_options_top" target="_blank" class="nimbus_button_big_gray" href="<?php echo SUPPORTINFOURL; ?>?utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=support_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">Get Help</a>   
                                <?php 
                                submit_button( 'Save', 'nimbus_button_big_blue', 'update', false, array( 'id' => 'update_options_top'));
                                ?>
                            </div>
                            <?php
                            settings_errors();
                            settings_fields('nimbus_option_group');
                            nimbus_field_engine();
                            ?>
                            <div class="clear20"></div>
                            <div id="options_buttons_bottom">
                                <?php 
                                $reset_confirm = __('Are you sure you want to reset? ALL SAVED SETTINGS WILL BE LOST!', 'nimbus');
                                submit_button( 'Reset', 'nimbus_button_big_lgray', 'reset', false, array( 'id' => 'reset_options_top', 'onclick' => 'return confirm( \'' . $reset_confirm . '\')'));
                                ?>
                                <a id="demo_options_bottom" target="_blank" class="nimbus_button_big_gray" href="<?php echo DEMOURL; ?>&utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=demo_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">View Demo</a>
                                <a id="support_options_bottom" target="_blank" class="nimbus_button_big_gray" href="<?php echo SUPPORTINFOURL; ?>?utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=support_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">Get Help</a>   
                                <?php 
                                submit_button( 'Save', 'nimbus_button_big_blue', 'update', false, array( 'id' => 'update_options_top'));
                                ?>
                            </div>
                        </form>
                    </div>
                    <div class="clear20"></div>
                </div> 
            </div> 
        </div>
        <div style="clear:both;"></div>
        <?php
    }
}


/* * *************************************************************************************************** */
// On options form submit do:
/* * *************************************************************************************************** */

function nimbus_options_sanitize($input) {

    global $NIMBUS_OPTIONS_ARR;

    // Do if selected reset button
    if (isset($_POST['reset'])) {
        $alert = __('Default options restored.', 'nimbus');
        add_settings_error('nimbus-options', 'restore_defaults', $alert, 'updated fade');
        return nimbus_return_defaults();
    }

    // Do if selected save button
    if (isset($_POST['update'])) {
        $clean = array();
        $options = $NIMBUS_OPTIONS_ARR;
        foreach ($options as $option) {
            if (!isset($option['id'], $option['type']) || ($option['type'] == 'tab') || ($option['type'] == 'item_html')) {
                continue;
            }
            $id = preg_replace('/[^a-zA-Z0-9._\-]/', '', strtolower($option['id']));
            
            // Set checkbox to false if it wasn't sent in the $_POST
            if ( 'checkbox' == $option['type'] && ! isset( $input[$id] ) ) {
                $input[$id] = false;
            }

            // Set each item in the multicheck to false if it wasn't sent in the $_POST
            if ( 'multicheck' == $option['type'] && ! isset( $input[$id] ) ) {
                foreach ( $option['options'] as $key => $value ) {
                    $input[$id][$key] = false;
                }
            }
            
            // Apply filters
            if (isset($input[$id])) {
                if (has_filter('nimbus_filter_' . $option['type'])) {
                    $clean[$id] = apply_filters('nimbus_filter_' . $option['type'], $input[$id], $option);
                } else {
                    $clean[$id] = $input[$id];
                }
            }
            
        }
        $alert = __('Options saved.', 'nimbus');
        add_settings_error('nimbus-options', 'save_options', $alert, 'updated fade');
        return $clean;
    } 
}

/* * *************************************************************************************************** */
// Return default options
/* * *************************************************************************************************** */

function nimbus_return_defaults() {

    global $NIMBUS_OPTIONS_ARR;
    $defaults_return = array();
    $options = $NIMBUS_OPTIONS_ARR;
    foreach ((array) $options as $option) {
        if (!isset($option['id'], $option['default'])) {
            continue;
        }
        $defaults_return[$option['id']] = $option['default'];
    }
    return $defaults_return;
}

/* * *************************************************************************************************** */
// Helper to return options.
/* * *************************************************************************************************** */

if (!function_exists('nimbus_get_option')) {

    function nimbus_get_option($option_data, $default_data = false) {
        global $NIMBUS_OPTIONS_ARR;
        $options = get_option(THEME_OPTIONS);
        $default_options = $NIMBUS_OPTIONS_ARR;
        if (isset($options[$option_data])) {
            return $options[$option_data];
        } else {
            $default = $default_options[$option_data]['default'];
            return $default;
        }
    }

}


/* * *************************************************************************************************** */
// WP_head options.
/* * *************************************************************************************************** */

add_action('wp_head', 'nimbus_options_to_head');

function nimbus_options_to_head() {

    global $NIMBUS_FONT_FACES, $NIMBUS_OPTIONS_ARR, $post;
    
    $get_fonts = $NIMBUS_FONT_FACES;
    $options = $NIMBUS_OPTIONS_ARR;
    
    foreach ($options as $option) {
        if (($option['type'] == "typography") || ($option['type'] == "font")  || ($option['type'] == "face")) {
            $$option['id'] = nimbus_get_option($option['id']);
        }    
    }
    $font_list = array();
    foreach ($options as $option) {
        if (($option['type'] == "typography") || ($option['type'] == "font")  || ($option['type'] == "face")) {
            $nimbus_get_face = nimbus_get_option($option['id']);
            array_push($font_list, $nimbus_get_face['face']);
        }    
    }
    $filtered_font_list = array_unique($font_list);
    foreach ($filtered_font_list as $key => $font) {
        if(isset($get_fonts[$font])){
            echo $get_fonts[$font]['import'];
            echo "\n";
        }
    }
    ?>

        <!-- Style from <?php echo THEME_NAME; ?> Theme Options. --> <?php echo "\n"; ?> 
    <style type="text/css"><?php echo "\n"; ?> 
    
        /* Body */
        
        body { font:<?php echo $body_style['style']; ?> <?php echo $body_style['size']; ?>/<?php echo $body_style['line']; ?> <?php echo $get_fonts[$body_style['face']]['fam']; ?>; color:<?php echo $body_style['color']; ?>;  text-transform:<?php echo $body_style['fonttrans']; ?>; background-color:#4c4c4c; } 
        body > .container, body > .container.frontpage_featured .featured > div { background:<?php echo nimbus_get_option('nimbus_content_bg_color'); ?>; -webkit-box-shadow: 0px 0px 5px 0px <?php echo nimbus_get_option('nimbus_content_box_color'); ?>; -moz-box-shadow: 0px 0px 5px 0px <?php echo nimbus_get_option('nimbus_content_box_color'); ?>; box-shadow: 0px 0px 5px 0px <?php echo nimbus_get_option('nimbus_content_box_color'); ?>; }
        div.content div.featured_image_caption, .blog_pagination, .single_post_nav  { border-bottom:1px solid <?php echo nimbus_get_option('nimbus_universal_border_color'); ?>; }
        div.content .tax_tags, header #menu_row { border-top:1px solid <?php echo nimbus_get_option('nimbus_universal_border_color'); ?>;  }
        .bio_wrap > div { border:1px solid <?php echo nimbus_get_option('nimbus_universal_border_color'); ?>; }
        
        /* Links*/
        
        a { color:<?php echo nimbus_get_option('link_color'); ?>; }
        a:hover, a:focus { color:<?php echo nimbus_get_option('link_hover_color'); ?>; }
        
        
        /* Headings*/
        
        h1, h1 a { font:<?php echo $h1_style['style']; ?> <?php echo $h1_style['size']; ?>/<?php echo $h1_style['line']; ?> <?php echo $get_fonts[$h1_style['face']]['fam']; ?>; color:<?php echo $h1_style['color']; ?>;  text-transform:<?php echo $h1_style['fonttrans']; ?>; } 
        h1 a:hover { color:<?php echo nimbus_get_option('h1_hover_color'); ?>; }
        h2, h2 a { font:<?php echo $h2_style['style']; ?> <?php echo $h2_style['size']; ?>/<?php echo $h2_style['line']; ?> <?php echo $get_fonts[$h2_style['face']]['fam']; ?>; color:<?php echo $h2_style['color']; ?>; text-transform:<?php echo $h2_style['fonttrans']; ?>; }
        h2 a:hover { color:<?php echo nimbus_get_option('h2_hover_color'); ?>; }
        h3, h3 a { font:<?php echo $h3_style['style']; ?> <?php echo $h3_style['size']; ?>/<?php echo $h3_style['line']; ?> <?php echo $get_fonts[$h3_style['face']]['fam']; ?>; color:<?php echo $h3_style['color']; ?>;  text-transform:<?php echo $h3_style['fonttrans']; ?>; }
        h3 a:hover { color:<?php echo nimbus_get_option('h3_hover_color'); ?>; }
        h4, h4 a { font:<?php echo $h4_style['style']; ?> <?php echo $h4_style['size']; ?>/<?php echo $h4_style['line']; ?> <?php echo $get_fonts[$h4_style['face']]['fam']; ?>; color:<?php echo $h4_style['color']; ?>;  text-transform:<?php echo $h4_style['fonttrans']; ?>;}
        h4 a:hover { color:<?php echo nimbus_get_option('h4_hover_color'); ?>; }
        h5, h5 a { font:<?php echo $h5_style['style']; ?> <?php echo $h5_style['size']; ?>/<?php echo $h5_style['line']; ?> <?php echo $get_fonts[$h5_style['face']]['fam']; ?>; color:<?php echo $h5_style['color']; ?>;  text-transform:<?php echo $h5_style['fonttrans']; ?>;}
        h5 a:hover { color:<?php echo nimbus_get_option('h5_hover_color'); ?>; }
        h6, h6 a { font:<?php echo $h6_style['style']; ?> <?php echo $h6_style['size']; ?>/<?php echo $h6_style['line']; ?> <?php echo $get_fonts[$h6_style['face']]['fam']; ?>; color:<?php echo $h6_style['color']; ?>;  text-transform:<?php echo $h6_style['fonttrans']; ?>;}
        h6 a:hover { color:<?php echo nimbus_get_option('h6_hover_color'); ?>; }        
        
        /* Tables */
        
        th, ul.css-tabs a, div.accordion h2, h2.hide_show_title span { font:<?php echo $th_style['style']; ?> <?php echo $th_style['size']; ?>/<?php echo $th_style['line']; ?> <?php echo $get_fonts[$th_style['face']]['fam']; ?>; color:<?php echo $th_style['color']; ?>;  text-transform:<?php echo $th_style['fonttrans']; ?>;}
        td, td a, td a:hover { font:<?php echo $td_style['style']; ?> <?php echo $td_style['size']; ?>/<?php echo $td_style['line']; ?> <?php echo $get_fonts[$td_style['face']]['fam']; ?>; color:<?php echo $td_style['color']; ?>;  text-transform:<?php echo $td_style['fonttrans']; ?>;}
        caption { font:<?php echo $tc_style['style']; ?> <?php echo $tc_style['size']; ?>/<?php echo $tc_style['line']; ?> <?php echo $get_fonts[$tc_style['face']]['fam']; ?>; color:<?php echo $tc_style['color']; ?>;  text-transform:<?php echo $tc_style['fonttrans']; ?>;}
        
        
        /* Header */
        
        .text_logo, .text_logo a { font:<?php echo $nimbus_logo_style['style']; ?> <?php echo $nimbus_logo_style['size']; ?>/<?php echo $nimbus_logo_style['line']; ?> <?php echo $get_fonts[$nimbus_logo_style['face']]['fam']; ?>; color:<?php echo $nimbus_logo_style['color']; ?>;  text-transform:<?php echo $nimbus_logo_style['fonttrans']; ?>;   }
        .navbar-default .navbar-brand, .navbar-default a, .navbar-brand a, .navbar-default:hover .navbar-brand:hover, .navbar-default a:hover, .navbar-brand a:hover { font:<?php echo $nimbus_mobile_logo_style['style']; ?> <?php echo $nimbus_mobile_logo_style['size']; ?>/<?php echo $nimbus_mobile_logo_style['line']; ?> <?php echo $get_fonts[$nimbus_mobile_logo_style['face']]['fam']; ?>; color:<?php echo $nimbus_mobile_logo_style['color']; ?>;  text-transform:<?php echo $nimbus_mobile_logo_style['fonttrans']; ?>; }
        header .header_widget_right, header .header_widget_left { font:<?php echo $nimbus_header_widget_style['style']; ?> <?php echo $nimbus_header_widget_style['size']; ?>/<?php echo $nimbus_header_widget_style['line']; ?> <?php echo $get_fonts[$nimbus_header_widget_style['face']]['fam']; ?>; color:<?php echo $nimbus_header_widget_style['color']; ?>;  text-transform:<?php echo $nimbus_header_widget_style['fonttrans']; ?>;   }
        .carousel-caption p { font:<?php echo $nimbus_slideshow_caption_style['style']; ?> <?php echo $nimbus_slideshow_caption_style['size']; ?>/<?php echo $nimbus_slideshow_caption_style['line']; ?> <?php echo $get_fonts[$nimbus_slideshow_caption_style['face']]['fam']; ?>; color:<?php echo $nimbus_slideshow_caption_style['color']; ?>;  text-transform:<?php echo $nimbus_slideshow_caption_style['fonttrans']; ?>; }
        
        
        /* Footer */
         
        #credit, #credit a, #copyright, #copyright a { font:<?php echo $nimbus_copyright_style['style']; ?> <?php echo $nimbus_copyright_style['size']; ?>/<?php echo $nimbus_copyright_style['line']; ?> <?php echo $get_fonts[$nimbus_copyright_style['face']]['fam']; ?>; color:<?php echo $nimbus_copyright_style['color']; ?>;  text-transform:<?php echo $nimbus_copyright_style['fonttrans']; ?>; }
        .blog_pagination a, .single_post_nav a { font:<?php echo $nimbus_post_nav_style['style']; ?> <?php echo $nimbus_post_nav_style['size']; ?>/<?php echo $nimbus_post_nav_style['line']; ?> <?php echo $get_fonts[$nimbus_post_nav_style['face']]['fam']; ?>; color:<?php echo $nimbus_post_nav_style['color']; ?>;  text-transform:<?php echo $nimbus_post_nav_style['fonttrans']; ?>;  }
        
        
        /* Menu */
        

        .navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus, .nav>li>a:hover, .nav>li>a:focus, .fallback_cb > ul > li > a, .fallback_cb > ul > li > a:hover { font:<?php echo $nimbus_menu_style['style']; ?> <?php echo $nimbus_menu_style['size']; ?>/<?php echo $nimbus_menu_style['line']; ?> <?php echo $get_fonts[$nimbus_menu_style['face']]['fam']; ?>; color:<?php echo $nimbus_menu_style['color']; ?>!important;  text-transform:<?php echo $nimbus_menu_style['fonttrans']; ?>; }
        .nav .caret, .navbar-default .navbar-nav>.dropdown>a .caret,.navbar-default .navbar-nav>.dropdown>a .caret, .navbar-default .navbar-nav>.dropdown.active>a .caret, .navbar-default .navbar-nav>.open>a .caret, .navbar-default .navbar-nav>.open>a:hover .caret, .navbar-default .navbar-nav>.open>a:focus .caret, .nav a:hover .caret {  border-top-color: <?php echo $nimbus_menu_style['color']; ?>!important; border-bottom-color: <?php echo $nimbus_menu_style['color']; ?>!important; }
        .navbar-default .navbar-nav > li li a {  font:<?php echo $nimbus_sub_menu_style['style']; ?> <?php echo $nimbus_sub_menu_style['size']; ?>/<?php echo $nimbus_sub_menu_style['line']; ?> <?php echo $get_fonts[$nimbus_sub_menu_style['face']]['fam']; ?>; color:<?php echo $nimbus_sub_menu_style['color']; ?>;  text-transform:<?php echo $nimbus_sub_menu_style['fonttrans']; ?>; }
        .dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus, .children li a, .children li a:hover, .children li a:focus { color:<?php echo $nimbus_sub_menu_style['color']; ?>; }
        #menu_row .dropdown-menu, .children { background-color:<?php echo nimbus_get_option('nimbus_content_bg_color'); ?>; border: 1px solid #<?php echo nimbus_get_option('nimbus_dd_box_color'); ?>; }
        .navbar-default, .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus, .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus, header .fallback_cb > ul > li > a { background-color:<?php echo nimbus_get_option('nimbus_content_bg_color'); ?>; } 
        .navbar-default .navbar-toggle, .navbar-default .navbar-toggle { background-color: <?php echo nimbus_get_option('nimbus_mobile_dd_toggle_color'); ?>; }
        .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus { background-color: <?php echo nimbus_get_option('nimbus_mobile_dd_toggle_hover_color'); ?>; }
        .navbar-default .navbar-toggle { border-color: <?php echo nimbus_get_option('nimbus_mobile_dd_toggle_border_color'); ?>; } 
        .navbar-default .navbar-toggle .icon-bar { background-color: <?php echo nimbus_get_option('nimbus_mobile_dd_toggle_detail_color'); ?>; } 

        /* Blog */ 
        
        div.content div.date { font:<?php echo $nimbus_article_date['style']; ?> <?php echo $nimbus_article_date['size']; ?>/<?php echo $nimbus_article_date['line']; ?> <?php echo $get_fonts[$nimbus_article_date['face']]['fam']; ?>; color:<?php echo $nimbus_article_date['color']; ?>;  text-transform:<?php echo $nimbus_article_date['fonttrans']; ?>; }
        div.content div.author, div.content div.author a { font:<?php echo $nimbus_article_author['style']; ?> <?php echo $nimbus_article_author['size']; ?>/<?php echo $nimbus_article_author['line']; ?> <?php echo $get_fonts[$nimbus_article_author['face']]['fam']; ?>; color:<?php echo $nimbus_article_author['color']; ?>;  text-transform:<?php echo $nimbus_article_author['fonttrans']; ?>; }
        div.content div.excerpt { font:<?php echo $nimbus_article_excerpt['style']; ?> <?php echo $nimbus_article_excerpt['size']; ?>/<?php echo $nimbus_article_excerpt['line']; ?> <?php echo $get_fonts[$nimbus_article_excerpt['face']]['fam']; ?>; color:<?php echo $nimbus_article_excerpt['color']; ?>;  text-transform:<?php echo $nimbus_article_excerpt['fonttrans']; ?>; }
        div.content div.featured_image_caption span { font:<?php echo $nimbus_article_featured_img_caption['style']; ?> <?php echo $nimbus_article_featured_img_caption['size']; ?>/<?php echo $nimbus_article_featured_img_caption['line']; ?> <?php echo $get_fonts[$nimbus_article_featured_img_caption['face']]['fam']; ?>; color:<?php echo $nimbus_article_featured_img_caption['color']; ?>;  text-transform:<?php echo $nimbus_article_featured_img_caption['fonttrans']; ?>; }
        div.content a.more-link { font:<?php echo $nimbus_more_style['style']; ?> <?php echo $nimbus_more_style['size']; ?>/<?php echo $nimbus_more_style['line']; ?> <?php echo $get_fonts[$nimbus_more_style['face']]['fam']; ?>; color:<?php echo $nimbus_more_style['color']; ?>;  text-transform:<?php echo $nimbus_more_style['fonttrans']; ?>; }
        div.content .tax_tags { font:<?php echo $nimbus_tax_style['style']; ?> <?php echo $nimbus_tax_style['size']; ?>/<?php echo $nimbus_tax_style['line']; ?> <?php echo $get_fonts[$nimbus_tax_style['face']]['fam']; ?>; color:<?php echo $nimbus_tax_style['color']; ?>;  text-transform:<?php echo $nimbus_tax_style['fonttrans']; ?>; }
       
        
        /* Odds n Ends */
        
        code, pre, var { font-family:<?php echo $get_fonts[$code_style['face']]['fam']; ?>; color:<?php echo $code_style['color']; ?>; }
        blockquote, div.quote p, div.quote a, blockquote p { font:<?php echo $blockquote_style['style']; ?> <?php echo $blockquote_style['size']; ?>/<?php echo $blockquote_style['line']; ?> <?php echo $get_fonts[$blockquote_style['face']]['fam']; ?>; color:<?php echo $blockquote_style['color']; ?>;  text-transform:<?php echo $blockquote_style['fonttrans']; ?>; font-size: <?php echo $blockquote_style['size']; ?>; font-weight: <?php echo $blockquote_style['style']; ?>; line-height: <?php echo $blockquote_style['line']; ?>; }
        div.content blockquote { border-left:4px solid <?php echo nimbus_get_option('nimbus_blockquote_border_color'); ?>;  }
       
        #wp-calendar a { color:<?php echo nimbus_get_option('link_color'); ?>; }
         
        
        /* Buttons*/

        a.nimbus_button { font-family:<?php echo $get_fonts[$button_style['face']]['fam']; ?>; }
        
        
        /* Responsive */
        
        @media (max-width: 767px) {
            <?php
            global $post;
            $unique_template = get_post_meta($post->ID, '_wp_page_template', TRUE);
            if (($unique_template == 'alt_frontpage.php') || is_front_page()) {
            ?>
                header.container {
                    margin-top: 50px; padding-bottom:20px;
                } 
            <?php
            }
            ?>
        }
        
        /* Custom*/
        
        <?php echo nimbus_get_option('custom_css') ?>
        
        @media (max-width: 767px) {
        }
        @media (min-width: 768px) and (max-width: 979px) {
        }
        @media (min-width: 980px)and (max-width: 1200px) {
        }
        @media (min-width: 1200px) {
        }
        
        /* options settings */
        
        <?php echo "\n"; ?> 
    </style>
    <?php
    echo "\n";
}

/* * *************************************************************************************************** */
// Optional Scripts
/* * *************************************************************************************************** */

add_action('wp_enqueue_scripts', 'nimbus_optional_scripts');

function nimbus_optional_scripts() {

    if (!is_admin()) {

        $scripts_multi = nimbus_get_option('scripts_multicheck');

        if (!empty($scripts_multi['mootools']))  {

            wp_register_script('mootools_g', 'https://ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js', array(), '1.4.1');
            wp_enqueue_script('mootools_g');
        }

        if (!empty($scripts_multi['prototype']))  {

            wp_register_script('prototype_g', 'https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js', array(), '1.7.0.0');
            wp_enqueue_script('prototype_g');
        }

        if (!empty($scripts_multi['scriptaculous']))  {

            wp_register_script('scriptaculous_g', 'https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js', array(), '1.7.0.0');
            wp_enqueue_script('scriptaculous_g');
        }

        
        if (!empty($scripts_multi['dojo']))  {

            wp_register_script('dojo_g', 'https://ajax.googleapis.com/ajax/libs/dojo/1.6.1/dojo/dojo.xd.js.uncompressed.js', array(), '1.7.0.0');
            wp_enqueue_script('dojo_g');
        }
    }
}

/* * *************************************************************************************************** */
// WP_head Textarea from Scripts Tab
/* * *************************************************************************************************** */

add_action('wp_head', 'nimbus_scripts_to_head');

function nimbus_scripts_to_head() {

    echo nimbus_get_option('scripts_head');
}

/* * *************************************************************************************************** */
// WP_footer Textarea from Scripts Tab
/* * *************************************************************************************************** */

add_action('wp_footer', 'nimbus_scripts_to_footer');

function nimbus_scripts_to_footer() {

    echo nimbus_get_option('scripts_foot');
}

/* * *************************************************************************************************** */

// Scripts Top Content
/* * *************************************************************************************************** */

function nimbus_scripts_content_top() {

    echo nimbus_get_option('scripts_top_content');
}

/* * *************************************************************************************************** */

// Scripts Bottom Content
/* * *************************************************************************************************** */

function nimbus_scripts_content_bottom() {

    echo nimbus_get_option('scripts_bottom_content');
}


