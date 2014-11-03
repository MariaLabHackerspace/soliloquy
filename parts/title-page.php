<?php  
$title = single_post_title('',false);
if (empty($title)) { 
_e('Post ID','nimbus');
the_ID(); 
} else { 
    single_post_title();
}                              
?>