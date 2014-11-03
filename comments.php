<?php 
if (comments_open()) {
    echo "<h2>";
    _e('Comments', 'nimbus');
    echo "</h2>";
}
if (post_password_required()) { 
?>
    <p class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'nimbus'); ?></p>
    <?php 
    return;
}
if (have_comments()) { 
    $comments_by_type = separate_comments($comments); 
    if (!empty($comments_by_type['comment'])) { 
    ?>
        <ol id="comments">	
            <?php wp_list_comments(array('type' => 'comment', 'callback' => 'nimbus_comment', 'avatar_size' => 75, 'reply_text' => __('Reply', 'nimbus'))); ?>
        </ol>		
    <?php 
    } 
    ?>

    <div class="navigation">
        <div class="alignleft">
    <?php previous_comments_link() ?>
        </div>
        <div class="alignright">
    <?php next_comments_link() ?>
        </div>
    </div>

    <?php 
    if (!empty($comments_by_type['pings'])) { 
    ?>
        <ol id="pings">
            <?php wp_list_comments(array('type' => 'pings', 'callback' => 'nimbus_ping')); ?>
        </ol>
    <?php 
    } 
} else { 
?>
    <div class="nocomments">
        <?php
        if ('open' == $post->comment_status) { 
        ?>
            <p><?php _e('Be the first to comment.', 'nimbus'); ?></p>
        <?php 
        } else { 
            // If comments are closed. 
        } 
        ?>
    </div>
<?php 
} 
if ('open' == $post->comment_status) {

    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    if ($req) {
        $req_echo = "aria-required='true'";
    } else {
        $req_echo = "";
    }
    
    $fields = array(
        'author' => '<div class="form-group">
                        <label class="sr-only" for="author">' . __("Name", "nimbus") . '</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="author" id="author" value="' . esc_attr($comment_author) . '" tabindex="1" placeholder="' . __('Name', 'nimbus') . '" ' . $req_echo . ' />
                        </div>
                    </div>',
        'email' => '<div class="form-group">
                        <label class="sr-only" for="email">' . __('Email', 'nimbus') . '</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="email" id="email" value="' . esc_attr($comment_author_email) . '" tabindex="2" placeholder="' . __('Email', 'nimbus') . '" ' . $req_echo . ' />
                        </div>
                    </div>',
        'url' => '<div class="form-group">
                        <label class="sr-only" for="url">' .  __('Website', 'nimbus') . '</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="url" id="url" value="' . esc_attr($comment_author_url) . '" tabindex="3" placeholder="' .  __('Website', 'nimbus') . '" />
                        </div>
                    </div>'
    );


    $modified_defaults = array(
        'fields' => apply_filters('comment_form_default_fields', $fields),
        'comment_field' => '<div class="form-group">
                    <label class="sr-only" for="comment">' .  __('Comment', 'nimbus') . '</label>
                    <div class="col-md-10">
                        <textarea class="form-control input-lg" name="comment" id="comment" tabindex="4" placeholder="Type your comment here..."></textarea>
                    </div>
                </div>',
        'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        'logged_in_as' => '<p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        'comment_notes_before' => '',
        'comment_notes_after' => '<p class="form_allowed_tags">' . sprintf(__('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s'), ' <code>' . allowed_tags() . '</code>') . '</p>',
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'title_reply' => __('Leave a Reply', 'nimbus'),
        'title_reply_to' => __('Leave a Reply to %s', 'nimbus'),
        'cancel_reply_link' => __('Cancel reply', 'nimbus'),
        'label_submit' => __('Submit', 'nimbus'),
    );
    ?>
    <div id="respond" class="form-horizontal">
        <?php comment_form($modified_defaults); ?>
    </div>
<?php 
} 
?>

