<?php

/* * *************************************************************************************************** */
// Global Options Array
/* * *************************************************************************************************** */


global $NIMBUS_OPTIONS_ARR;

$NIMBUS_OPTIONS_ARR = array();

/* **************************************************************************************************** */
// Membership
/* **************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["membership_tab"] = array("name" => __('Nimbus Membership', 'nimbus'),
    "id" => "membership_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "membership",
    "icon" => "fa-star",
    "type" => "tab");


$NIMBUS_OPTIONS_ARR[] = array( "tab" => "membership",
    "html" => "
        <div id='membership_tab'>
            <h1>" . __('Nimbus Membership', 'nimbus') . "</h1>
            <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('Join Nimbus and start building awesome sites today!', 'nimbus') . "</h2>
            <img src='" . OPTIONS_PATH . "images/themes-join2.jpg' style='width:100%;height:auto;' />
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div style='text-align:center;'>
            <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Get ALL Themes', 'nimbus') . "</a>
            </div>
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div class='option_wrapper'>
                <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('With your purchase you will get:', 'nimbus') . "</h2>
                <div class='clear'></div>
            <ul>
                <li>
                    <h3 style='color:#ca0088;'>" . __('Unlimited Support For Theme Features', 'nimbus') . "</h3>
                    <p>" . __('If you\'ve got questions, we\'ve got answers. It\'s our commitment to you that we\'ll provide the most positive support anywhere on the web!', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Frontpage Slideshows', 'nimbus') . "</h3>
                    <p>" . __('Create your website\'s front page by choosing one of several slidshow layouts and designs.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Responsive, Custom CSS Options', 'nimbus') . "</h3>
                    <p>" . __('Polish your site down to the minute detail with responsive, custom CSS. Your site can look different on every browser size!', 'nimbus') . "</p>
                </li>
                <li>
                    <h3 style='color:#ca0088;'>" . __('Powerful SEO Tools', 'nimbus') . "</h3>
                    <p>" . __('Get powerful SEO tools that give you maximum control of your theme\'s placement on Google. Add custom titles, descriptions and keywords to each page or choose defaults for ease of use.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Hundreds of Shortcodes', 'nimbus') . "</h3>
                    <p>" . __('Style your website with custom buttons, images, lists, typography, tables, columns, and more... all brought to you by our vast library of shortcodes. View all your shortcode options here:', 'nimbus') . " <a  target='_blank' href='http://demo.nimbusthemes.com/soliloquy/shortcodes/' target='_blank'>" . __('Soliloquy Shortcodes', 'nimbus') . "</a></p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Extended Social Media Integration', 'nimbus') . "</h3>
                    <p>" . __('Take advantage of additional social network integrations and increase the reach of your website.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Multiple Frontpages', 'nimbus') . "</h3>
                    <p>" . __('Use a custom page template to apply the frontpage layout to as many pages as you want!', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Custom Widgets', 'nimbus') . "</h3>
                    <p>" . __('Use custom widgets to quickly and easily populate your website with profesionally designed content.', 'nimbus') . "</p>
                </li>

                <li><h3 style='color:#ca0088;'>" . __('Whitelist Dozens of MIME Types', 'nimbus') . "</h3>
                    <p>" . __('Stop running into those frustrating WordPress uploader errors when loading unusual file types. Choose from our long list of additional file types to whiltelist as approved.', 'nimbus') . "</p>
                </li>

                <li><h3 style='color:#ca0088;'>" . __('Demo Content Loader', 'nimbus') . "</h3>
                    <p>" . __('Make setting up your website easy by loading demo content with the click of a button.', 'nimbus') . "</p>
                </li>

                <li><h3 style='color:#ca0088;'>" . __('Additional Script Integration', 'nimbus') . "</h3>
                    <p>" . __('Use in-page script locations to embed buttons and widgets from your favorite third-party services.', 'nimbus') . "</p>
                </li>
            <ul>

                <div class='clear25'></div>
                <div class='clear15'></div>
                <div style='text-align:center;'>
                <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Get ALL Themes', 'nimbus') . "</a>
                <div class='clear25'></div>
                </div>
            </div>
            <div class='clear25'></div>
        </div>
    <div class='clear30'></div>
  ",
  "type" => "html");


$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Setup
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["setup_tab"] = array("name" => __('Theme Setup', 'nimbus'),
    "id" => "setup_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "setup",
    "icon" => "fa-cog",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( "tab" => "setup",
    "html" => "
    <h1>" . __('Set Up Your ', 'nimbus') . THEME_NAME . __(' Theme', 'nimbus') . "</h1>
    <p><strong>" . __('We realize there\'s a lot going on with this theme, so we\'ve tried to make setup as simple as possible.', 'nimbus') . "</strong></p>
    <p>" . __('There are a few initial steps that will put you on track to creating the fully operational website of your dreams:', 'nimbus') . "</p>
    <div class='option_wrapper'>
            <a href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_link&utm_campaign=" . THEME_NAME_CLEAN . "' style='float:right; margin:20px 0 20px 20px;' type='submit' class='nimbus_button_sm_pink'>" . __('Upgrade today!!', 'nimbus') . "</a>
            <p class='option_name'><span class='option_number'>1</span>. LOAD DEMO CONTENT</p>
            <p>" . __('If you are starting from scratch, then you\'ll want to load some example content by clicking the button below.', 'nimbus') . "</p>
            <div class='clear'></div>
    </div>
    <div class='option_wrapper'>
            <a style='float:right; margin:40px 0 20px 20px;' class='nimbus_button_sm_blue' target='_blank' href='" . GUIDEURL . "'>" . __('Download', 'nimbus') . "</a>
            <p class='option_name'><span class='option_number'>2</span>. DOWNLOAD THE USER GUIDE</p>
            <p>" . __('Once you\'ve loaded the demo content, you\'re going to want to learn how to make changes to your website and use the Nimbus Panel. We\'ve provided an extensive user guide PDF that you\'ll want to read through as you\'re learning your way around:', 'nimbus') . "</p>
    </div>
    <h1>" . __('Example Content', 'nimbus') . "</h1>
  ",
  "type" => "html");

  $NIMBUS_OPTIONS_ARR["reminder_images"] = array("name" => __('Reminder Images', 'nimbus'),
    "desc" => __('When you\'re comfortable with loading featured images and working with the ', 'nimbus') . THEME_NAME . __(' Theme, you may want to turn off all reminder images.', 'nimbus'),
    "id" => "reminder_images",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => __('On', 'nimbus'),"off" => __('Off', 'nimbus')));

$NIMBUS_OPTIONS_ARR["example_widgets"] = array("name" => __('Example Widgets', 'nimbus'),
    "desc" => __('When you\'re comfortable working with the theme, you may want to turn off all example widgets.', 'nimbus'),
    "id" => "example_widgets",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => __('On', 'nimbus'),"off" => __('Off', 'nimbus')));

$NIMBUS_OPTIONS_ARR["nimbus_example_content"] = array("name" => __('Example Content', 'nimbus'),
    "desc" => __('When you\'re comfortable working with the theme, you may want to turn off all example content.', 'nimbus'),
    "id" => "nimbus_example_content",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => __('On', 'nimbus'),"off" => __('Off', 'nimbus')));

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);

/* * *************************************************************************************************** */
// General
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["general_tab"] = array("name" => __('General Settings', 'nimbus'),
    "id" => "general_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "general",
    "icon" => "fa-cogs",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Logo Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_image_logo"] = array("name" => __('Image Logo', 'nimbus'),
    "desc" => __('Upload a logo image. If you have a logo, enter it here. The dimensions of the logo image you upload will be the dimensions you see on your website, so make sure it\'s the size you want.', 'nimbus'),
    "id" => "nimbus_image_logo",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_text_logo"] = array("name" => __('Text Logo', 'nimbus'),
    "desc" => __('If no image logo is loaded, a text logo will be displayed. You can style this text logo on the <strong>Typogaphy</strong> tab.', 'nimbus'),
    "id" => "nimbus_text_logo",
    "default" => get_bloginfo('name'),
    "type" => "text",
    "info" => "<p>" . __('If you don\'t have a logo, you can use one of our many preset Google fonts to create a quick logo. Just type in the text you want for the logo in this space. You can style the text on the typography tab later on.', 'nimbus') . "</p>",
    "tab" => "general",
    "classes" => "");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Additional Image Options', 'nimbus') . "</h1>",
    "type" => "html"
    );


$NIMBUS_OPTIONS_ARR["favicon"] = array("name" => __('Favicon', 'nimbus'),
    "desc" => __('Upload a favicon image.', 'nimbus'),
    "id" => "favicon",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "info" => "<p>" . __('A favicon is the icon that is displayed in the address bar of every browser. You can customize your favicon to match your site\'s branding by creating a favicon of your own - either in Photoshop or <a href=\'http://www.gimp.org/\' target=\'_blank\'>GIMP</a> if you\'re familiar with the process, or by using one of the many favicon generators online. Once you have your <strong>favicon.ico</strong> file (it must be named that), select <strong>Browse</strong> and drop it in the upload box. After it\'s uploaded, select <strong>Insert into Post</strong> and this will auto-populate the <strong>Favicon</strong> field with the new URL of the uploaded favicon.ico file.', 'nimbus') . "</p>
                                    <p> " . __('Make sure to select <strong>Save</strong>.', 'nimbus') . "</p>",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["gravatar"] = array(
    "name" => __('Default Gravatar', 'nimbus'),
    "desc" => __('There is already a default gravatar that ships with WordPress, but you can change it here. Upload a default gravatar that will be displayed when a commenter has not signed up for a personalized gravatar. After loading your new gravatar here, you will then need to navigate to Settings >> Discussion >> Select your new gravatar.', 'nimbus'),
    "id" => "gravatar",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "info" => "<p>" . __('The default avatar is the image that appears in the comments section of the blog if a user doesn\'t have a personal avatar through Gravatar.', 'nimbus') . " </p>
                                    <p>" . __('The theme already has a default avatar but if you\'d like to put one of your own in, this is where you do it. The avatar image can be any size as long as it\'s a square; it will be resized automatically to fit the 75x75px default commentator image.', 'nimbus') . "</p>
                                    <p>" . __('Once you\'ve uploaded the avatar, select <strong>Save</strong> and then go to <strong>Settings >> Discussion</strong> and scroll down to <strong>Avatars</strong>, select the new default avatar and <strong>Save Changes</strong>.', 'nimbus') . "</p>",
    "type" => "image"
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Copyright Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["copyright"] = array(
    "name" => __('Copyright Text', 'nimbus'),
    "desc" => __('This text wil be displayed in the footer of your website.', 'nimbus'),
    "id" => "copyright",
    "tab" => "general",
    "default" => "&copy; " . date('o') . ", " . get_bloginfo('name'),
    "info" => "<p>" . __('The copyright text will show up in the footer. Just put your site/company name in place of the default site title. Change the year here too if you\'d like.', 'nimbus') . "</p>",
    "type" => "textarea"
    );


$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Frontpage
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_tab"] = array(
    "name" => __('Frontpage', 'nimbus'),
    "id" => "frontpage_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage",
    "icon" => "fa-file",
    "type" => "tab"
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage",
    "html" => "<h1>" . __('Frontpage Options', 'nimbus') . "</h1>",
    "type" => "html"
    );


$NIMBUS_OPTIONS_ARR[] = array( "tab" => "frontpage",
    "html" => "
        <div id='membership_tab'>
            <h2 style='color:#ca0088;font-weight:bold;font-size:22px;margin: .67em 0;line-height:1.3em;padding-top: 15px;'>" . __('Create Beautiful Slideshows', 'nimbus') . "</h2>
            <img src='" . OPTIONS_PATH . "images/soliloquy_slider.jpg' style='width:100%;height:auto;' />
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div class='option_wrapper'>
                <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('With your purchase you will get:', 'nimbus') . "</h2>
                <div class='clear'></div>
            <ul>
                <li><h3 style='color:#ca0088;'>" . __('Beautiful Image Slideshow', 'nimbus') . "</h3>
                    <p>" . __('Create beautiful and dynamic slideshows to set just the right tone on your website.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Ability to add Custom Videos or HTML', 'nimbus') . "</h3>
                    <p>" . __('The possibilities are endless. Add video, images, and so much more!', 'nimbus') . "</p>
                </li>
            <ul>

                <div class='clear25'></div>
                <div class='clear15'></div>
                <div style='text-align:center;'>
                <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Get ALL Themes', 'nimbus') . "</a>
                <div class='clear25'></div>
                </div>
            </div>
        </div>
  ",
  "type" => "html");

$NIMBUS_OPTIONS_ARR["nimbus_banner_option"] = array(
    "name" => __('Banner Options', 'nimbus'),
    "desc" => __('Select which banner layout you would like to display on the frontpage.', 'nimbus'),
    "id" => "nimbus_banner_option",
    "default" => "image_content_width",
    "tab" => "frontpage",
    "type" => "radio",
    "options" => array( "image_content_width" => __('Banner Image Spanning the Width of the Content Area', 'nimbus'), "none" => __('No Banner', 'nimbus'))
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage",
    "html" => "<h1>" . __('Banner Image Spanning the Width of the Content Area', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_content_width_banner"] = array("name" => __('Banner Image', 'nimbus'),
    "desc" => __('Select the Full Width banner off your desktop. It should be 1170x385 pixels.', 'nimbus'),
    "id" => "nimbus_content_width_banner",
    "default" => "",
    "type" => "image",
    "tab" => "frontpage"
    );

$NIMBUS_OPTIONS_ARR["nimbus_slider_pro"] = array(
    "tab" => "frontpage",
    "name" =>  __('Slideshow Spanning the Width of the Content Area', 'nimbus'),
    "id" => "nimbus_slider_pro",
    "type" => "pro"
    );




$NIMBUS_OPTIONS_ARR["nimbus_no_con_pro"] = array(
    "tab" => "frontpage",
    "name" => __('Full Width Banner Content: No Image', 'nimbus'),
    "id" => "nimbus_no_con_pro",
    "type" => "pro"
    );



$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage",
    "html" => "<h1>" . __('Featured Page Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_toggle_featured"] = array("name" => __('Display Featured Pages', 'nimbus'),
    "desc" => __('Check here to display four featured pages under the banner on the frontpage.', 'nimbus'),
    "id" => "nimbus_toggle_featured",
    "tab" => "frontpage",
    "default" => "1",
    "label" => "Show Featured",
    "type" => "checkbox");

$NIMBUS_OPTIONS_ARR["nimbus_left_featured"] = array("name" => __('Left Feature Column', 'nimbus'),
    "desc" => __('Set the page to display in the left feature column on the frontpage. Remember to set a featured image for this page if you want one to appear.', 'nimbus'),
    "id" => "nimbus_left_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());

$NIMBUS_OPTIONS_ARR["nimbus_center_featured"] = array("name" => __('Center Feature Column', 'nimbus'),
    "desc" => __('Set the page to display in the center feature column on the frontpage. Remember to set a featured image for this page if you want one to appear.', 'nimbus'),
    "id" => "nimbus_center_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());

$NIMBUS_OPTIONS_ARR["nimbus_right_featured"] = array("name" => __('Right Feature Column', 'nimbus'),
    "desc" => __('Set the page to display in the right feature column on the frontpage. Remember to set a featured image for this page if you want one to appear.', 'nimbus'),
    "id" => "nimbus_right_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());


$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Blog
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["blog_tab"] = array("name" => __('Blog', 'nimbus'),
    "id" => "blog_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "blog",
    "icon" => "fa-quote-left",
    "type" => "tab");
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Blog Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
$NIMBUS_OPTIONS_ARR["nimbus_post_meta_blog"] = array("name" => __('Display Meta Information on Posts', 'nimbus'),
    "desc" => __('Select the folllowing information you would like to have displayed on post pages.', 'nimbus'),
    "id" => "nimbus_post_meta_blog",
    "tab" => "blog",
    "default" => array("categories" => "1", "tags" => "1"),
    "type" => "multicheck",
    "options" => nimbus_include_blog_meta());

$NIMBUS_OPTIONS_ARR["display_bio"] = array("name" => __('Display Author Bio', 'nimbus'),
    "desc" => __('Select to display the author\'s bio at the bottom of the post.', 'nimbus'),
    "id" => "display_bio",
    "tab" => "blog",
    "default" => "1",
    "label" => "Display Bio",
    "info" => "<p>" . __('The author bio will be displayed at the bottom of the post. This information is coming from the <strong>Profile</strong> page located under <strong>Users >> Your Profile</strong>.', 'nimbus') . "</p>",
    "type" => "checkbox");


$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);

/* * *************************************************************************************************** */
// Design
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["design_tab"] = array("name" => __('Design', 'nimbus'),
    "id" => "design_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "design",
    "icon" => "fa-pencil-square-o",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "design",
    "html" => "<h1>" . __('Body Appearance Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["body_bg_color"] = array("name" => __('Body Background Color', 'nimbus'),
    "desc" => __('Set the background color for your website.', 'nimbus'),
    "id" => "body_bg_color",
    "html" => "<p>Please use the WordPress core <a href='" . admin_url() . "themes.php?page=custom-background'>Background</a> setting under Appearance >> Background.</p>",
    "tab" => "design",
    "type" => "item_html");

$NIMBUS_OPTIONS_ARR["nimbus_content_bg_color"] = array("name" => __('Content Areas Backgound Color', 'nimbus'),
    "desc" => __('Set the background color for the content areas.', 'nimbus'),
    "id" => "nimbus_content_bg_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["nimbus_content_box_color"] = array("name" => __('Content Areas. Box Shadow Color', 'nimbus'),
    "desc" => __('Set the box-shadow color for the content areas.', 'nimbus'),
    "id" => "nimbus_content_box_color",
    "tab" => "design",
    "default" => '#333333',
    "type" => "color");


$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "design",
    "html" => "<h1>" . __('Menu Appearance Options', 'nimbus') . "</h1>",
    "type" => "html"
    );



$NIMBUS_OPTIONS_ARR["nimbus_dd_box_color"] = array("name" => __('Dropdown Menu Box Shadow Color', 'nimbus'),
    "desc" => __('Set the box-shadow color for the dropdown menus.', 'nimbus'),
    "id" => "nimbus_dd_box_color",
    "tab" => "design",
    "default" => '#555555',
    "type" => "color");


$NIMBUS_OPTIONS_ARR["nimbus_mobile_dd_toggle_color"] = array("name" => __('Mobile Button Color', 'nimbus'),
    "desc" => __('Set the background color for the toggle button in the mobile menu.', 'nimbus'),
    "id" => "nimbus_mobile_dd_toggle_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["nimbus_mobile_dd_toggle_hover_color"] = array("name" => __('Mobile Button Hover Color', 'nimbus'),
    "desc" => __('Set the background color for the toggle button in the mobile menu.', 'nimbus'),
    "id" => "nimbus_mobile_dd_toggle_hover_color",
    "tab" => "design",
    "default" => '#e0e0e0',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["nimbus_mobile_dd_toggle_border_color"] = array("name" => __('Mobile Button Border Color', 'nimbus'),
    "desc" => __('Set the border color for the toggle button in the mobile menu.', 'nimbus'),
    "id" => "nimbus_mobile_dd_toggle_border_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["nimbus_mobile_dd_toggle_detail_color"] = array("name" => __('Mobile Button Detail Color', 'nimbus'),
    "desc" => __('Set the detail color for the toggle button in the mobile menu.', 'nimbus'),
    "id" => "nimbus_mobile_dd_toggle_detail_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");



$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "design",
    "html" => "<h1>" . __('Borders', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_universal_border_color"] = array("name" => __('Universal Border Color', 'nimbus'),
    "desc" => __('Set the border color used to defign many elements around the theme.', 'nimbus'),
    "id" => "nimbus_universal_border_color",
    "tab" => "design",
    "default" => '#c0c0c0',
    "type" => "color");



$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "design",
    "html" => "<h1>" . __('Blockquote Appearance Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_blockquote_border_color"] = array("name" => __('Blockquote Left Border Color', 'nimbus'),
    "desc" => __('Set the left border color for the blockquote element.', 'nimbus'),
    "id" => "nimbus_blockquote_border_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");


$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "design",
    "html" => "<h1>" . __('Button and Shortcode Appearance Options', 'nimbus') . "</h1>",
    "type" => "html"
    );


$NIMBUS_OPTIONS_ARR["nimbus_button_color"] = array("name" => __('Button Colors', 'nimbus'),
    "desc" => __('Set the default button colors to use across website. Check out our shortcodes for limitless color and appearance options. See Shortcodes tab.', 'nimbus'),
    "id" => "nimbus_button_color",
    "default" => "btn-default",
    "tab" => "design",
    "type" => "select",
    "class" => "",
    "options" => nimbus_button_styles()
    );


$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);

/* * *************************************************************************************************** */
// Typography
/* * *************************************************************************************************** */


$NIMBUS_OPTIONS_ARR["typography_tab"] = array("name" => __('Typography', 'nimbus'),
    "id" => "typography_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "typography",
    "icon" => "fa-font",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Body Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["body_style"] = array("name" => __('Body Settings', 'nimbus'),
    "desc" => __('Set <strong>Body</strong> font style. This is the default font that will be used in most instances on your website.', 'nimbus'),
    "id" => "body_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.7em", "face" => "Open Sans", "style" => "400", "color" => "#2b2b2b", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Link Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["link_color"] = array("name" => __('Link Color', 'nimbus'),
    "desc" => __('Set the default link color.', 'nimbus'),
    "id" => "link_color",
    "tab" => "typography",
    "default" => '#059ac5',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["link_hover_color"] = array("name" => __('Link Hover Color', 'nimbus'),
    "desc" => __('Set link hover color.', 'nimbus'),
    "id" => "link_hover_color",
    "tab" => "typography",
    "default" => '#008ab2',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Logo Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_logo_style"] = array("name" => __('Default Logo Typography', 'nimbus'),
    "desc" => __('Set typography preferences for the text logo that is displayed when no image logo exists.', 'nimbus'),
    "id" => "nimbus_logo_style",
    "tab" => "typography",
    "info" => "<p>Allows you to change the typeface of your logo if you are using text instead of an image. Also allows you to change all other attributes we described in the <strong>Body Settings</strong> section above.</p>",
    "default" => array("size" => "36px", "line" => "1em", "face" => "Fjalla One", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_mobile_logo_style"] = array("name" => __('Mobile Logo Typography', 'nimbus'),
    "desc" => __('Set typography preferences for the mobile text logo that is displayed in the fixed menu bar.', 'nimbus'),
    "id" => "nimbus_mobile_logo_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "Fjalla One", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_header_widget_style"] = array("name" => __('Header Widget Font', 'nimbus'),
    "desc" => __('Set the header widget font style', 'nimbus'),
    "id" => "nimbus_header_widget_style",
    "tab" => "typography",
    "default" => array("size" => "11px", "line" => "1.5em", "face" => "Open Sans", "style" => "400 italic", "color" => "#8d8d8d", "fonttrans" => "none"),
    "type" => "typography");



$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Banner Slideshow Text', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_slideshow_caption_style"] = array("name" => __('Slideshow Caption', 'nimbus'),
    "desc" => __('Set the font style for the slideshow caption.', 'nimbus'),
    "id" => "nimbus_slideshow_caption_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.5em", "face" => "Open Sans", "style" => "400", "color" => "#ffffff", "fonttrans" => "none"),
    "type" => "typography");



$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Navigation Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_menu_style"] = array("name" => __('Navigation Font', 'nimbus'),
    "desc" => __('Set the navigation menu font style', 'nimbus'),
    "id" => "nimbus_menu_style",
    "tab" => "typography",
    "default" => array("size" => "21px", "line" => "1em", "face" => "Source Sans Pro", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_sub_menu_style"] = array("name" => __('Sub Navigation Font', 'nimbus'),
    "desc" => __('Set the sub navigation menu font style', 'nimbus'),
    "id" => "nimbus_sub_menu_style",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1em", "face" => "Open Sans", "style" => "400", "color" => "#2b2b2b", "fonttrans" => "none"),
    "type" => "typography");




$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Title Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["h1_style"] = array("name" => __('H1 Settings', 'nimbus'),
    "desc" => __('Set H1 style.', 'nimbus'),
    "id" => "h1_style",
    "tab" => "typography",
    "default" => array("size" => "42px", "line" => "1.2em", "face" => "Fjalla One", "style" => "700", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h1_hover_color"] = array("name" => __('H1 Hover Color', 'nimbus'),
    "desc" => __('Set H1 hover color.', 'nimbus'),
    "id" => "h1_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h2_style"] = array("name" => __('H2 Settings', 'nimbus'),
    "desc" => __('Set H2 style.', 'nimbus'),
    "id" => "h2_style",
    "tab" => "typography",
    "default" => array("size" => "50px", "line" => "1.2em", "face" => "Source Sans Pro", "style" => "500", "color" => "#000000", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h2_hover_color"] = array("name" => __('H2 Hover Color', 'nimbus'),
    "desc" => __('Set H2 hover color.', 'nimbus'),
    "id" => "h2_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h3_style"] = array("name" => __('H3 Settings', 'nimbus'),
    "desc" => __('Set H3 style.', 'nimbus'),
    "id" => "h3_style",
    "tab" => "typography",
    "default" => array("size" => "28px", "line" => "1.3em", "face" => "Source Sans Pro", "style" => "400", "color" => "#000000", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h3_hover_color"] = array("name" => __('H3 Hover Color', 'nimbus'),
    "desc" => __('Set H3 hover color.', 'nimbus'),
    "id" => "h3_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h4_style"] = array("name" => __('H4 Settings', 'nimbus'),
    "desc" => __('Set H4 style.', 'nimbus'),
    "id" => "h4_style",
    "tab" => "typography",
    "default" => array("size" => "21px", "line" => "1.3em", "face" => "Fjalla One", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h4_hover_color"] = array("name" => __('H4 Hover Color', 'nimbus'),
    "desc" => __('Set H4 hover color.', 'nimbus'),
    "id" => "h4_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h5_style"] = array("name" => __('H5 Settings', 'nimbus'),
    "desc" => __('Set H5 style.', 'nimbus'),
    "id" => "h5_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.3em", "face" => "Fjalla One", "style" => "400", "color" => "#000000", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h5_hover_color"] = array("name" => __('H5 Hover Color', 'nimbus'),
    "desc" => __('Set H5 hover color.', 'nimbus'),
    "id" => "h5_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h6_style"] = array("name" => __('H6 Settings', 'nimbus'),
    "desc" => __('Set H6 style.', 'nimbus'),
    "id" => "h6_style",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1.3em", "face" => "Fjalla One", "style" => "400", "color" => "#000000", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h6_hover_color"] = array("name" => __('H6 Hover Color', 'nimbus'),
    "desc" => __('Set H6 hover color.', 'nimbus'),
    "id" => "h6_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["nimbus_more_style"] = array("name" => __('More Tag Link Style', 'nimbus'),
    "desc" => __('Set the style for the more tag in on blog and archive pages.', 'nimbus'),
    "id" => "nimbus_more_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.3em", "face" => "Fjalla One", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Blog Element Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_article_date"] = array("name" => __('Article Date Style', 'nimbus'),
    "desc" => __('Set the font style for the article date.', 'nimbus'),
    "id" => "nimbus_article_date",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1.7em", "face" => "PT Sans", "style" => "600 italic", "color" => "#b3b3b3", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_article_author"] = array("name" => __('Article Author Style', 'nimbus'),
    "desc" => __('Set the font style for the article Author.', 'nimbus'),
    "id" => "nimbus_article_author",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1.7em", "face" => "Georgia", "style" => "400 italic", "color" => "#8d8d8d", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_article_excerpt"] = array("name" => __('Article Excerpt Style', 'nimbus'),
    "desc" => __('Set the font style for the article excerpt.', 'nimbus'),
    "id" => "nimbus_article_excerpt",
    "tab" => "typography",
    "default" => array("size" => "24px", "line" => "1.3em", "face" => "Source Sans Pro", "style" => "400", "color" => "#000000", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_article_featured_img_caption"] = array("name" => __('Features Image Caption Style', 'nimbus'),
    "desc" => __('Set the font style for the featured image captions.', 'nimbus'),
    "id" => "nimbus_article_featured_img_caption",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1.7em", "face" => "Georgia", "style" => "400 italic", "color" => "#8d8d8d", "fonttrans" => "none"),
    "type" => "typography");



$NIMBUS_OPTIONS_ARR["nimbus_author_bio"] = array("name" => __('Author Bio Style', 'nimbus'),
    "desc" => __('Set the typographic style for the description text in the author bio box', 'nimbus'),
    "id" => "nimbus_author_bio",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.2em", "face" => "Open Sans", "style" => "400", "color" => "#121212", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_excerpt_style"] = array("name" => __('Excerpt Font', 'nimbus'),
    "desc" => __('Set the excerpt font style', 'nimbus'),
    "id" => "nimbus_excerpt_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.5em", "face" => "Open Sans", "style" => "400", "color" => "#121212", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_post_nav_style"] = array("name" => __('Page-Post Navigation Style', 'nimbus'),
    "desc" => __('Set the page-post navigation font style', 'nimbus'),
    "id" => "nimbus_post_nav_style",
    "tab" => "typography",
    "default" => array("size" => "21px", "line" => "1em", "face" => "Fjalla One", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_tax_style"] = array("name" => __('Blog and Category Meta Style', 'nimbus'),
    "desc" => __('Set the font style for the tags and categories at the bottom of posts.', 'nimbus'),
    "id" => "nimbus_tax_style",
    "tab" => "typography",
    "default" => array("size" => "12px", "line" => "1.4em", "face" => "Open Sans", "style" => "400", "color" => "#8d8d8d", "fonttrans" => "none"),
    "type" => "typography");


$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Blockquote and Pullquote Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["blockquote_style"] = array("name" => __('Blockquote Settings', 'nimbus'),
    "desc" => __('Set blockquote tag style and the typographic style for the [nimbus_quote] shortcode.', 'nimbus'),
    "id" => "blockquote_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1.8em", "face" => "Open Sans", "style" => "400", "color" => "#121212", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["pullquote_style"] = array("name" => __('Pullquote Settings', 'nimbus'),
    "desc" => __('Set typographic style for the [nimbus_pullquote_left] and [nimbus_pullquote_right] shortcodes.', 'nimbus'),
    "id" => "pullquote_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.2em", "face" => "Open Sans", "style" => "400", "color" => "#121212", "fonttrans" => "none"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Code Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["code_style"] = array("name" => __('Code/Pre Settings', 'nimbus'),
    "desc" => __('Set Code/Pre style.', 'nimbus'),
    "id" => "code_style",
    "tab" => "typography",
    "default" => array('face' => 'Courier New', 'color' => '#121212'),
    "type" => "font");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Table Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["th_style"] = array("name" => __('TH Settings', 'nimbus'),
    "desc" => __('Set TH (Table Heading) style.', 'nimbus'),
    "id" => "th_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "Open Sans", "style" => "600", "color" => "#121212", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["td_style"] = array("name" => __('TD Settings', 'nimbus'),
    "desc" => __('Set TD (Table Data) style.', 'nimbus'),
    "id" => "td_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.4em", "face" => "Arial", "style" => "400", "color" => "#121212", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["tc_style"] = array("name" => __('Table Caption Settings', 'nimbus'),
    "desc" => __('Set Table Caption style.', 'nimbus'),
    "id" => "tc_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1em", "face" => "Open Sans", "style" => "600 italic", "color" => "#121212", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Sidebar Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_sidebar_text_style"] = array("name" => __('Sidebar Text', 'nimbus'),
    "desc" => __('Set the default font that will be used for sidebar text.', 'nimbus'),
    "id" => "nimbus_sidebar_text_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.4em", "face" => "Open Sans", "style" => "400", "color" => "#121212", "fonttrans" => "none"),
    "type" => "typography");


$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Footer Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_copyright_style"] = array("name" => __('Copyright Text', 'nimbus'),
    "desc" => __('Set the default text for the copyright.', 'nimbus'),
    "id" => "nimbus_copyright_style",
    "tab" => "typography",
    "default" => array("size" => "11px", "line" => "1em", "face" => "Open Sans", "style" => "400", "color" => "#666666", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Odds and Ends', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_search_style"] = array("name" => __('Search Field', 'nimbus'),
    "desc" => __('Set the default font that will be used in the search field.', 'nimbus'),
    "id" => "nimbus_search_style",
    "tab" => "typography",
    "default" => array("size" => "30px", "line" => "1em", "face" => "Open Sans", "style" => "400", "color" => "#505050", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["default_button_style"] = array("name" => "Default Button Font",
    "desc" => "Set button style",
    "id" => "default_button_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "Open Sans", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_typography_one"] = array("name" => __('Font for [nimbus_typography_one] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_one] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_one",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_typography_two"] = array("name" => __('Font for [nimbus_typography_two] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_two] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_two",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_typography_three"] = array("name" => __('Font for [nimbus_typography_three] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_three] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_three",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["button_style"] = array("name" => __('Button Shortcodes', 'nimbus'),
    "desc" => __('Set the font that will be used for all button shortcodes.', 'nimbus'),
    "id" => "button_style",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "face");

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Scripts
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["scripts_tab"] = array("name" => __('Scripts', 'nimbus'),
    "id" => "scripts_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "scripts",
    "icon" => "fa-file-text",
    "type" => "tab");
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Script Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
$NIMBUS_OPTIONS_ARR["scripts_multicheck"] = array("name" => __('Include Site-wide JS Libraries ', 'nimbus'),
    "desc" => __('Select the JS libraries you would like to have included in the <strong>head</strong> section of your site on all pages and posts. Jquery and jQuery UI are automatically included. (* indicates it is hosted by Google).', 'nimbus'),
    "id" => "scripts_multicheck",
    "tab" => "scripts",
    "default" => array("mootools" => "0", "prototype" => "0", "scriptaculous" => "0", "dojo" => "0"),
    "type" => "multicheck",
    "options" => nimbus_include_scripts_in_head());

$NIMBUS_OPTIONS_ARR["scripts_head"] = array("name" => __('Add Scripts to Head', 'nimbus'),
    "desc" => __('Add any scripts you would like to add just before the closing &lt;/head&gt; tag.', 'nimbus'),
    "id" => "scripts_head",
    "classes" => "code",
    "tab" => "scripts",
    "default" => "",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR["scripts_top_content"] = array("name" => __('Add Scripts to Top of Content', 'nimbus'),
    "desc" => __('Add any scripts you would like to add just before start of the content on post/pages.', 'nimbus'),
    "id" => "scripts_top_content",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_top_scripts_multi"] = array("name" => __('Include Top of Content Scripts', 'nimbus'),
    "desc" => __('Select the content types where you would like to include the scripts from the text area above.', 'nimbus'),
    "id" => "nimbus_top_scripts_multi",
    "tab" => "scripts",
    "default" => array("home" => "0", "pages" => "0", "posts" => "0"),
    "type" => "pro",
    "options" => array("home" => "Home", "pages" => "Pages", "posts" => "Posts"));

$NIMBUS_OPTIONS_ARR["scripts_bottom_content"] = array("name" => __('Add Scripts to Bottom of Content', 'nimbus'),
    "desc" => __('Add any scripts you would like to add directly after the content on post/pages.', 'nimbus'),
    "id" => "scripts_bottom_content",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_bottom_scripts_multi"] = array("name" => __('Include Bottom of Content Scripts', 'nimbus'),
    "desc" => __('Select the content types where you would like to include the scripts from the text area above.', 'nimbus'),
    "id" => "nimbus_bottom_scripts_multi",
    "tab" => "scripts",
    "default" => array("home" => "0", "pages" => "0", "posts" => "0"),
    "type" => "pro",
    "options" => array("home" => "Home", "pages" => "Pages", "posts" => "Posts"));

$NIMBUS_OPTIONS_ARR["scripts_foot"] = array("name" => __('Add Scripts to Footer', 'nimbus'),
    "desc" => __('Add any scripts you would like to add just before the closing &lt;/body&gt; tag.', 'nimbus'),
    "id" => "scripts_foot",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);

/* * *************************************************************************************************** */
// CSS
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["css_tab"] = array("name" => __('Custom CSS', 'nimbus'),
    "id" => "css_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "css",
    "icon" => "fa-code",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Custom CSS Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["custom_css"] = array("name" => __('Custom CSS', 'nimbus'),
    "desc" => __('Add your custom CSS to the header.', 'nimbus'),
    "id" => "custom_css",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR["custom_css_less_767"] = array("name" => "Responsive CSS: Browsers Less Than 767px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_less_767",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["custom_css_768_979"] = array("name" => "Responsive CSS: Browsers Between 768px and 979px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_768_979",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["custom_css_980_1200"] = array("name" => "Responsive CSS: Browsers Between 980px and 1200px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_980_1200",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["custom_css_more_1200"] = array("name" => "Responsive CSS: Browsers Larger Than 1200px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_more_1200",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "pro");


$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Pages
/* * *************************************************************************************************** */

function nimbus_pages_arr() {

    $pages = array();
    $get_pages = get_pages('sort_column=post_parent,menu_order');
    foreach ($get_pages as $page) {
        $pages[$page->ID] = $page->post_title;
    }
    return $pages;
}
function nimbus_random_page(){
    $get_pages = get_pages();
    if(!empty($get_pages)) {
        shuffle($get_pages);
        $page = $get_pages[0]->ID;
    } else {
        $page = "";
    }
    return $page;

}


/* * *************************************************************************************************** */
// Button Styles
/* * *************************************************************************************************** */

function nimbus_button_styles() {

    $button_styles = array(
        "btn-default" =>  __('White', 'nimbus'),
        "btn-primary" =>  __('Dark Blue', 'nimbus'),
        "btn-success" =>  __('Green', 'nimbus'),
        "btn-info" =>  __('Light Blue', 'nimbus'),
        "btn-warning" =>  __('Orange', 'nimbus'),
        "btn-danger" =>  __('Red', 'nimbus')
    );
    return $button_styles;
}


/* * *************************************************************************************************** */
// Scripts
/* * *************************************************************************************************** */

function nimbus_include_scripts_in_head() {

    $scripts_in_head = array("mootools" => "MooTools*",
        "dojo" => "Dojo*",
        "prototype" => "Prototype*",
        "scriptaculous" => "script.aculo.us*");
    return $scripts_in_head;
}

/* * *************************************************************************************************** */
// Meta Info
/* * *************************************************************************************************** */

function nimbus_include_blog_meta() {

    $post_meta = array("categories" => __('Categories', 'nimbus'),
        "tags" => __('Tags', 'nimbus'));
    return $post_meta;
}

/* * *************************************************************************************************** */
// Border Types
/* * *************************************************************************************************** */

function nimbus_image_border_types() {

    $border_types = array("solid" => __('Solid', 'nimbus'),
        "double" => __('Double', 'nimbus'),
        "grooved" => __('Grooved', 'nimbus'),
        "dotted" => __('Dotted', 'nimbus'),
        "inset" => __('Inset', 'nimbus'),
        "outset" => __('Outset', 'nimbus'),
        "ridged" => __('Ridged', 'nimbus'),
        "dashed" => __('Dashed', 'nimbus'));
    return $border_types;
}

/* * *************************************************************************************************** */
// Nivo Effects
/* * *************************************************************************************************** */

function nimbus_nivo_effect_types() {

    $nivo_effects = array("random" => __('Random', 'nimbus'),
        "fade" => __('Fade', 'nimbus'),
        "sliceDown" => __('Slice Down', 'nimbus'),
        "sliceDownLeft" => __('Slice Down Left', 'nimbus'),
        "sliceUp" => __('Slice Up', 'nimbus'),
        "sliceUpLeft" => __('Slice Up Left', 'nimbus'),
        "sliceUpDown" => __('Slice Up Down', 'nimbus'),
        "sliceUpDownLeft" => __('Slice Up Down Left', 'nimbus'),
        "fold" => __('Fold', 'nimbus'),
        "slideInRight" => __('Slide In Right', 'nimbus'),
        "boxRandom" => __('Box Random', 'nimbus'),
        "boxRain" => __('Box Rain', 'nimbus'),
        "boxRainReverse" => __('Box Rain Reverse', 'nimbus'),
        "boxRainGrowReverse" => __('Box Rain Grow Reverse', 'nimbus'));
    return $nivo_effects;
}

/* * *************************************************************************************************** */
// Default Title Configs
/* * *************************************************************************************************** */

function nimbus_default_title_config() {

    $title_configs = array("post-site" => __('Post Title | Site Title', 'nimbus'),
        "site-post" => __('Site Title | Post Title', 'nimbus'),
        "site" => __('Site Title', 'nimbus'),
        "post" => __('Post Title', 'nimbus'));
    return $title_configs;
}

/* * *************************************************************************************************** */
// Font fonttrans Options
/* * *************************************************************************************************** */

function nimbus_font_transform() {

    $font_transform = array("none" => __('Normal', 'nimbus'),
        "capitalize" => __('Capitalize', 'nimbus'),
        "uppercase" => __('Uppercase', 'nimbus'),
        "lowercase" => __('Lowercase', 'nimbus'));
    return $font_transform;
}

/* * *************************************************************************************************** */
// Font Percent of Parnent
/* * *************************************************************************************************** */

function nimbus_percent_of_parent() {

    $nimbus_percent_of_parent = array();
        $i = 1;
        while ($i <= 400) {
            $nimbus_percent_of_parent[$i] = $i . "%";
            $i++;
        }

    return $nimbus_percent_of_parent;
}



/* * *************************************************************************************************** */
// Fonts Styles
/* * *************************************************************************************************** */

function nimbus_font_styles() {

    $default = array("200" => "200 (light)",
        "200 italic" => "200 (light) Italic",
        "300" => "300 (book)",
        "300 italic" => "300 (book) Italic",
        "400" => "400 (normal)",
        "400 italic" => "400 (normal) Italic",
        "500" => "500 (semi-bold)",
        "500 italic" => "500 (semi-bold) Italic",
        "600" => "600(bold)",
        "600 italic" => "600(bold) Italic",
        "700" => "700 (bolder)",
        "700 italic" => "700 (bolder) Italic",
        "800" => "800(extra-bold)",
        "800 italic" => "800(extra-bold) Italic");

    return $default;
}

/* * *************************************************************************************************** */
// Font faces
/* * *************************************************************************************************** */

global $NIMBUS_FONT_FACES;

$NIMBUS_FONT_FACES = array();

$NIMBUS_FONT_FACES = array("Droid Sans" => array("name" => "Droid Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Droid Sans', sans-serif"),
    "Open Sans" => array("name" => "Open Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>",
        "fam" => "'Open Sans', sans-serif"),
    "Oswald" => array("name" => "Oswald*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Oswald', sans-serif"),
    "Droid Serif" => array("name" => "Droid Serif*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Droid Serif', serif"),
    "PT Sans" => array("name" => "PT Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'PT Sans', sans-serif"),
    "Lobster" => array("name" => "Lobster*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />",
        "fam" => "'Lobster', cursive"),
    "Yanone Kaffeesatz" => array("name" => "Yanone Kaffeesatz*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,200,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Yanone Kaffeesatz', sans-serif"),
    "Arvo" => array("name" => "Arvo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Arvo', serif"),
    "Ubuntu" => array("name" => "Ubuntu*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Ubuntu', sans-serif"),
    "The Girl Next Door" => array("name" => "The Girl Next Door*",
        "import" => "<link href='//fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css' />",
        "fam" => "'The Girl Next Door', cursive"),
    "Calligraffitti" => array("name" => "Calligraffitti*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css' />",
        "fam" => "'Calligraffitti', cursive"),
    "Cabin" => array("name" => "Cabin*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Cabin', sans-serif"),
    "Dancing Script" => array("name" => "Dancing Script*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Dancing Script', cursive"),
    "Josefin Sans" => array("name" => "Josefin Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Josefin Sans', sans-serif"),
    "Nobile" => array("name" => "Nobile*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Nobile:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Nobile', sans-serif"),
    "Molengo" => array("name" => "Molengo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css' />",
        "fam" => "'Molengo', sans-serif"),
    "PT Sans Narrow" => array("name" => "PT Sans Narrow*",
        "import" => "<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'PT Sans Narrow', sans-serif"),
    "Cuprum" => array("name" => "Cuprum*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Cuprum:400,700italic,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Cuprum', sans-serif"),
    "Josefin Slab" => array("name" => "Josefin Slab*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Josefin Slab', serif"),
    "Arimo" => array("name" => "Arimo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Arimo', sans-serif"),
    "Cantarell" => array("name" => "Cantarell*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Cantarell:400,700,700italic,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Cantarell', sans-serif"),
    "Signika Negative" => array("name" => "Signika Negative*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Signika Negative', sans-serif"),
    "Open Sans Condensed" => array("name" => "Open Sans Condensed*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Open Sans Condensed', sans-serif"),
    "Six Caps" => array("name" => "Six Caps*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>",
        "fam" => "'Six Caps', sans-serif"),
    "Lato" => array("name" => "Lato*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Lato', sans-serif"),
    "Signika" => array("name" => "Signika*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Signika:400,700,300,600' rel='stylesheet' type='text/css'>",
        "fam" => "'Signika', sans-serif"),
    "Abel" => array("name" => "Abel*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>",
        "fam" => "'Abel', sans-serif"),
    "Gudea" => array("name" => "Gudea*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Gudea', sans-serif"),
    "Ruda" => array("name" => "Ruda*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Ruda:400,700,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Ruda', sans-serif"),
    "Duru Sans" => array("name" => "Duru Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Duru Sans', sans-serif"),
    "Asul" => array("name" => "Asul*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Asul:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Asul', sans-serif"),
    "Tenor Sans" => array("name" => "Tenor Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Tenor+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Tenor Sans', sans-serif"),
    "Nunito" => array("name" => "Nunito*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>",
        "fam" => "'Nunito', sans-serif"),
    "Michroma" => array("name" => "Michroma*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>",
        "fam" => "'Michroma', sans-serif"),
    "Quattrocento Sans" => array("name" => "Quattrocento Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Quattrocento Sans', sans-serif"),
    "Chivo" => array("name" => "Chivo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Chivo:400,900,400italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Chivo', sans-serif"),
    "Maven Pro" => array("name" => "Maven Pro*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Maven Pro', sans-serif"),
    "Federo" => array("name" => "Federo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Federo' rel='stylesheet' type='text/css'>",
        "fam" => "'Federo', sans-serif"),
    "Andika" => array("name" => "Andika*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Andika' rel='stylesheet' type='text/css'>",
        "fam" => "Andika', sans-serif"),
    "Varela" => array("name" => "Varela*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>",
        "fam" => "'Varela', sans-serif"),
    "Amaranth" => array("name" => "Amaranth*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Amaranth', sans-serif"),
    "Inder" => array("name" => "Inder*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>",
        "fam" => "'Inder', sans-serif"),
    "Istok Web" => array("name" => "Istok Web*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Istok Web', sans-serif"),
    "Snippet" => array("name" => "Snippet*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Snippet' rel='stylesheet' type='text/css'>",
        "fam" => "'Snippet', sans-serif"),
    "Rosario" => array("name" => "Rosario*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Rosario', sans-serif"),
    "Mako" => array("name" => "Mako*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Mako' rel='stylesheet' type='text/css'>",
        "fam" => "'Mako', sans-serif"),
    "Droid Sans Mono" => array("name" => "Droid Sans Mono*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>",
        "fam" => "'Droid Sans Mono', sans-serif"),
    "Questrial" => array("name" => "Questrial*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>",
        "fam" => "'Questrial', sans-serif"),
    "Shanti" => array("name" => "Shanti*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Shanti' rel='stylesheet' type='text/css'>",
        "fam" => "'Shanti', sans-serif"),
    "Gentium Basic" => array("name" => "Gentium Basic*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Gentium Basic', serif"),
    "Basic" => array("name" => "Basic*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Basic' rel='stylesheet' type='text/css'>",
        "fam" => "'Basic', sans-serif"),
    "Varela Round" => array("name" => "Varela Round*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>",
        "fam" => "'Varela Round', sans-serif"),
    "Antic" => array("name" => "Antic*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>",
        "fam" => "'Antic', sans-serif"),
    "Rosario" => array("name" => "Rosario*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Rosario:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Rosario', sans-serif"),
    "Actor" => array("name" => "Actor*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Actor', sans-serif"),
    "Cabin Condensed" => array("name" => "Cabin Condensed*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Cabin Condensed', sans-serif"),
    "Ropa Sans" => array("name" => "Ropa Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Ropa+Sans:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Ropa Sans', cursive"),
    "Trochut" => array("name" => "Trochut*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Trochut:400,400italic,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Trochut', cursive"),
    "Port Lligat Sans" => array("name" => "Port Lligat Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Port+Lligat+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Port Lligat Sans', cursive"),
    "Flamenco" => array("name" => "Flamenco*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Flamenco:300,400' rel='stylesheet' type='text/css'>",
        "fam" => "'Flamenco', cursive"),
    "Metamorphous" => array("name" => "Metamorphous*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>",
        "fam" => "'Metamorphous', cursive"),
    "Fredericka the Great" => array("name" => "Fredericka the Great*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>",
        "fam" => "'Fredericka the Great', cursive"),
    "Nixie One" => array("name" => "Nixie One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Nixie One', cursive"),
    "Sancreek" => array("name" => "Sancreek*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>",
        "fam" => "'Sancreek', cursive"),
    "Vast Shadow" => array("name" => "Vast Shadow*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Vast+Shadow' rel='stylesheet' type='text/css'>",
        "fam" => "'Vast Shadow', cursive"),
    "Monoton" => array("name" => "Monoton*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>",
        "fam" => "'Monoton', cursive"),
    "Raleway" => array("name" => "Raleway*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Raleway', cursive"),
    "Geostar" => array("name" => "Geostar*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Geostar' rel='stylesheet' type='text/css'>",
        "fam" => "'Geostar', cursive"),
    "Buda" => array("name" => "Buda*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Buda:300' rel='stylesheet' type='text/css'>",
        "fam" => "'Buda', cursive"),
    "Forum" => array("name" => "Forum*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Forum' rel='stylesheet' type='text/css'>",
        "fam" => "'Forum', cursive"),
    "Mr Bedfort" => array("name" => "Mr Bedfort*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Mr+Bedfort' rel='stylesheet' type='text/css'>",
        "fam" => "'Mr Bedfort', cursive"),
    "Rouge Script" => array("name" => "Rouge Script*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'>",
        "fam" => "'Rouge Script', cursive"),
    "Habibi" => array("name" => "Habibi*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>",
        "fam" => "'Habibi', serif"),
    "Lora" => array("name" => "Lora*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Lora', serif"),
    "Playfair Display" => array("name" => "Playfair Display*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Playfair Display', serif"),
    "Brawler" => array("name" => "Brawler*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Brawler' rel='stylesheet' type='text/css'>",
        "fam" => "'Brawler', serif"),
    "Caudex" => array("name" => "Caudex*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Caudex:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Caudex', serif"),
    "Cambo" => array("name" => "Cambo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Cambo' rel='stylesheet' type='text/css'>",
        "fam" => "'Cambo', serif"),
    "Esteban" => array("name" => "Esteban*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Esteban' rel='stylesheet' type='text/css'>",
        "fam" => "'Esteban', serif"),
    "Alegreya SC" => array("name" => "Alegreya SC*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Alegreya+SC:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Alegreya SC', serif"),
    "Lustria" => array("name" => "Lustria*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>",
        "fam" => "'Lustria', serif"),
    "Amethysta" => array("name" => "Amethysta*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Amethysta' rel='stylesheet' type='text/css'>",
        "fam" => "'Amethysta', serif"),
    "Junge" => array("name" => "Junge*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>",
        "fam" => "'Junge', serif"),
    "Glegoo" => array("name" => "Glegoo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>",
        "fam" => "'Glegoo', serif"),
    "Mr De Haviland" => array("name" => "Mr De Haviland*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'>",
        "fam" => "'Mr De Haviland', cursive"),
    "Herr Von Muellerhoff" => array("name" => "Herr Von Muellerhoff*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>",
        "fam" => "'Herr Von Muellerhoff', cursive"),
    "Sofia" => array("name" => "Sofia*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>",
        "fam" => "'Sofia', cursive"),
    "Noto Sans" => array("name" => "Noto Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Noto Sans', sans-serif"),
    "Fauna One" => array("name" => "Fauna One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Fauna One', serif"),
    "Inconsolata" => array("name" => "Inconsolata*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Inconsolata', sans-serif"),
    "Kite One" => array("name" => "Kite One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Kite One', sans-serif"),
    "Expletus Sans" => array("name" => "Expletus Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Expletus+Sans:400,500,600,400italic,700,500italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Expletus Sans', cursive"),
    "Numans" => array("name" => "Numans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>",
        "fam" => "'Numans', sans-serif"),
    "Leckerli One" => array("name" => "Leckerli One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Leckerli One', cursive"),
    "Carrois Gothic" => array("name" => "Carrois Gothic*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>",
        "fam" => "'Carrois Gothic', sans-serif"),
    "Lily Script One" => array("name" => "Lily Script One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Lily Script One', cursive"),
    "EB Garamond" => array("name" => "EB Garamond*",
        "import" => "<link href='//fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>",
        "fam" => "'EB Garamond', serif"),
    "Merriweather" => array("name" => "Merriweather*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Merriweather', serif"),
    "Merriweather Sans" => array("name" => "Merriweather Sans*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Merriweather Sans', sans-serif"),
    "Titillium Web" => array("name" => "Titillium Web*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Titillium Web', sans-serif"),
    "Crimson Text" => array("name" => "Crimson Text*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Crimson Text', serif"),
    "Croissant One" => array("name" => "Croissant One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Croissant+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Croissant One', cursive"),
    "Monsieur La Doulaise" => array("name" => "Monsieur La Doulaise*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Monsieur+La+Doulaise' rel='stylesheet' type='text/css'>",
        "fam" => "'Monsieur La Doulaise', cursive"),
    "Roboto Slab" => array("name" => "Roboto Slab*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>",
        "fam" => "'Roboto Slab', serif"),
    "Roboto" => array("name" => "Roboto*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Roboto', sans-serif"),
    "Roboto Condensed" => array("name" => "Roboto Condensed*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Roboto Condensed', sans-serif"),
    "Berkshire Swash" => array("name" => "Berkshire Swash*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>",
        "fam" => "'Berkshire Swash', cursive"),
    "Graduate" => array("name" => "Graduate*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>",
        "fam" => "'Graduate', sans-serif"),
    "Text Me One" => array("name" => "Text Me One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Text Me One', sans-serif"),
    "Shadows Into Light Two" => array("name" => "Shadows Into Light Two*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>",
        "fam" => "'Shadows Into Light Two', cursive"),
    "Alef" => array("name" => "Alef*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Alef', sans-serif"),
    "Elsie" => array("name" => "Elsie*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Elsie:400,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Elsie', cursive"),
    "Muli" => array("name" => "Muli*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Muli', sans-serif"),
    "Simonetta" => array("name" => "Simonetta*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Simonetta:400,900,400italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Simonetta', cursive"),
    "Belgrano" => array("name" => "Belgrano*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>",
        "fam" => "'Belgrano', serif"),
    "Parisienne" => array("name" => "Parisienne*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>",
        "fam" => "'Parisienne', cursive"),
    "Arapey" => array("name" => "Arapey*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Arapey:400italic,400' rel='stylesheet' type='text/css'>",
        "fam" => "'Arapey', serif"),
    "Sintony" => array("name" => "Sintony*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Sintony', sans-serif"),
    "Montserrat Alternates" => array("name" => "Montserrat Alternates*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Montserrat Alternates', sans-serif"),
    "Grand Hotel" => array("name" => "Grand Hotel*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>",
        "fam" => "'Grand Hotel', cursive"),
    "Cinzel" => array("name" => "Cinzel*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Cinzel:400,900,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Cinzel', serif"),
    "Telex" => array("name" => "Telex*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>",
        "fam" => "'Telex', sans-serif"),
    "Armata" => array("name" => "Armata*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>",
        "fam" => "'Armata', sans-serif"),
    "Archivo Narrow" => array("name" => "Archivo Narrow*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Archivo Narrow', sans-serif"),
    "Anaheim" => array("name" => "Anaheim*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>",
        "fam" => "'Anaheim', sans-serif"),
    "Source Sans Pro" => array("name" => "Source Sans Pro*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Source Sans Pro', sans-serif"),
    "ABeeZee" => array("name" => "ABeeZee*",
        "import" => "<link href='//fonts.googleapis.com/css?family=ABeeZee:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'ABeeZee', sans-serif"),
    "Karla" => array("name" => "Karla*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Karla', serif"),
    "Great Vibes" => array("name" => "Great Vibes*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>",
        "fam" => "'Great Vibes', cursive"),
    "Didact Gothic" => array("name" => "Didact Gothic*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>",
        "fam" => "'Didact Gothic', serif"),
    "Coustard" => array("name" => "Coustard*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Coustard:400,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Coustard', serif"),
    "Domine" => array("name" => "Domine*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Domine', serif"),
    "Sacramento" => array("name" => "Sacramento*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>",
        "fam" => "'Sacramento', serif"),
    "Rochester" => array("name" => "Rochester*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>",
        "fam" => "'Rochester', serif"),
    "Oxygen" => array("name" => "Oxygen*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>",
        "fam" => "'Oxygen', serif"),
    "Rokkit" => array("name" => "Rokkit*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Rokkit', serif"),
    "Exo" => array("name" => "Exo*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Exo', sans-serif"),
    "Arbutus Slab" => array("name" => "Arbutus Slab*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>",
        "fam" => "'Arbutus Slab', serif"),
    "Marcellus" => array("name" => "Marcellus*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>",
        "fam" => "'Marcellus', serif"),
    "Marcellus SC" => array("name" => "Marcellus SC*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>",
        "fam" => "'Marcellus SC', serif"),
    "Bitter" => array("name" => "Bitter*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Bitter', serif"),
    "Julius Sans One" => array("name" => "Julius Sans One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Julius Sans One', sans-serif"),
    "Fjalla One" => array("name" => "Fjalla One*",
        "import" => "<link href='//fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Fjalla One', sans-serif"),
    "Arial" => array("name" => "Arial, Helvetica",
        "import" => "",
        "fam" => "Arial, Helvetica, sans-serif"),
    "Arial Black" => array("name" => "Arial Black, Gadget",
        "import" => "",
        "fam" => "Arial Black, Gadget, sans-serif"),
    "Comic Sans MS" => array("name" => "Comic Sans MS",
        "import" => "",
        "fam" => "'Comic Sans MS', cursive, sans-serif"),
    "Lucida Sans Unicode" => array("name" => "Lucida Sans Unicode",
        "import" => "",
        "fam" => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif"),
    "Tahoma" => array("name" => "Tahoma",
        "import" => "",
        "fam" => "Tahoma, Geneva, sans-serif"),
    "Trebuchet MS" => array("name" => "Trebuchet MS",
        "import" => "",
        "fam" => "'Trebuchet MS', Helvetica, sans-serif"),
    "Verdana" => array("name" => "Verdana",
        "import" => "",
        "fam" => "Verdana, Geneva, sans-serif"),
    "Georgia" => array("name" => "Georgia",
        "import" => "",
        "fam" => "Georgia, serif"),
    "Palatino Linotype" => array("name" => "Palatino Linotype",
        "import" => "",
        "fam" => "'Palatino Linotype', 'Book Antiqua', Palatino, serif"),
    "Times New Roman" => array("name" => "Times New Roman",
        "import" => "",
        "fam" => "'Times New Roman', Times, serif"),
    "Courier New" => array("name" => "Courier New",
        "import" => "",
        "fam" => "'Courier New', Courier, monospace"),
    "Lucida Console" => array("name" => "Lucida Console",
        "import" => "",
        "fam" => "'Lucida Console', Monaco, monospace"),
    "Bebas" => array("name" => "Bebas**",
        "import" => "<style type='text/css'>@font-face { font-family: 'BebasRegular'; src: url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.eot'); src: url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.eot?#iefix') format('embedded-opentype'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.woff') format('woff'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.ttf') format('truetype'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.svg#BebasRegular') format('svg'); font-weight: normal; font-style: normal; }</style>",
        "fam" => "'BebasRegular'")
);
