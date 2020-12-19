<?php

// Loop through all blog posts
while (have_posts()) {
    // Tells wordpress to get all the infos of the post
    the_post();
    ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>

        <hr>
    <?php
}
