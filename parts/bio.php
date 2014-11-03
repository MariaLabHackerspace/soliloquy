<?php

if (nimbus_get_option('display_bio') == '1' ) {
    if (is_author()) {
        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));  
    } 
    if (!in_the_loop()) {
     echo "<div class='container content'>";
    }   
    n_clear();
    ?>
    <div class="bio_wrap">
        <div class="row">
            <div class="col-md-2">
                <?php
                if (is_author()) {
                    echo get_avatar($curauth->user_email, '171');  
                } else { 
                    echo get_avatar(get_the_author_meta('email'), '171');
                }
                ?>
            </div>
            <div class="col-md-10">
                <?php
                if (is_author()) {
                ?>
                    <h3><?php echo $curauth->display_name; ?></h3>
                    <p><?php echo $curauth->user_description; ?></p> 
                <?php    
                } else { 
                ?>
                    <h3><?php the_author_posts_link(); ?></h3>
                    <p><?php the_author_meta('description'); ?></p>
                <?php    
                }
                ?>
            </div>
        </div>
    </div>	
    <?php
    if (!in_the_loop()) {
     echo "</div>";
    }   
}
?>
  