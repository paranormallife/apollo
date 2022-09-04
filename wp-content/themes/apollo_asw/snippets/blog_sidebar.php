<?php
    $host_ID = get_the_ID();
?>

<div class="blog-sidebar">
    <div class="heading"><span>More Articles</span></div>
    <ul>
        <?php 
        $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        ) ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php
                    $post_ID = get_the_ID();
                    if( $post_ID != $host_ID ) :
                ?>
                    <li>
                        <a href="<?= get_the_permalink(); ?>">
                            <?= the_title(); ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?> 
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </ul>
</div>
