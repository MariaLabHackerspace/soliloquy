<?php
$bottom_scripts = nimbus_get_option('nimbus_bottom_scripts_multi');
if ((is_single() && !empty($bottom_scripts['posts'])) || (is_front_page() && !empty($bottom_scripts['home'])) || (is_page() && !empty($bottom_scripts['pages']))) {
    nimbus_scripts_content_bottom();
}
?>