<div class="frontpage_featured_item">
    <a href="<?php the_permalink(); ?>">
        <?php
        get_template_part( 'parts/image', '375_225');
        ?>
    </a>
    <h3><a href="<?php the_permalink(); ?>"><?php get_template_part( 'parts/title', 'page'); ?></a></h3>
    <?php 
    $the_excerpt = the_excerpt();
    if (!empty($the_excerpt)) {
        the_excerpt(); 
    } else {
        n_clear(8);
    }
    ?>
</div>
