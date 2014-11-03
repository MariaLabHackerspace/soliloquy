<?php 
$title = the_title('','',false);
if (empty($title)) { 
_e('Post ID','nimbus');
the_ID(); 
} else { 
    the_title();
}                              
?>