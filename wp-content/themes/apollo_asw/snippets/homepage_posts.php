<?php
    $page_for_posts = get_option( 'page_for_posts' );
    $blog_url = get_permalink( $page_for_posts );
?>
<section class="homepage-posts">

    <div class="page-width">
        <h2><a href="<?= $blog_url; ?>">The Latest</a></h2>
    </div>
    
    <?php get_template_part('snippets/posts_grid'); ?>

</section>