<?php
$top_scripts = nimbus_get_option('nimbus_top_scripts_multi');
if ((is_single() && !empty($top_scripts['posts'])) || (is_front_page() && !empty($top_scripts['home'])) || (is_page() && !empty($top_scripts['pages']))) {
    nimbus_scripts_content_top();
}
?>