<?php
    $page_for_posts = get_option( 'page_for_posts' );
    $args = array(
        'post_type' => 'page',
        'name'   => 'news',
        'posts_per_page' => 1
    );
?>

<?php 
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="blog-page-content">
            <?php the_content(); ?>
        </div>

        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>