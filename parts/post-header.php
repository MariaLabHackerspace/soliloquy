<?php
    $open_link = $close_link = '';
    if (!is_single()) {
        $open_link = '<a href="'.get_permalink().'">';
        $close_link = '</a>';
    }
?>
<div class="date">
    <?php
    the_time(get_option('date_format'));
    ?>
</div>
<h2 class="post_title">
    <?php
        echo $open_link;
        get_template_part( 'parts/title', 'post');
        echo $close_link;
    ?>
</h2>

<?php
    echo $open_link;
    get_template_part( 'parts/image', '1170_640');
    echo $close_link;
    get_template_part( 'parts/image', 'caption');
?>
