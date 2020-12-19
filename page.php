<?php

// Loop through all blog posts
while (have_posts()) {
    // Tells wordpress to get all the infos of the post
    the_post();
    ?>
        <h1>This is a page, not a post.</h1>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>
    <?php
}
