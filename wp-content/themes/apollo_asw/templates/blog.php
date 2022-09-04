<section class="blog">

    <?php 
        $parent = get_option( 'page_for_posts' );
        $featured_image = get_the_post_thumbnail_url( $parent, 'full' );
        $default_image = get_theme_mod('default_image');
        if( $featured_image ) { $hero = $featured_image; }
        else { $hero = $default_image; }
        $banner = get_post_meta( $parent, 'banner', true );
        if( has_block('lazyblock/intro-section') ) {
            $intro = 'has-intro';
        }
        echo '<div class="post-hero" style="background-image: url(\''.$hero.'\')">';
            if( $banner ) {
                echo '<div class="post-banner-container page-width">';
                    echo '<div class="post-banner">'.$banner.'</div>';
                echo '</div>';
            }
        echo '</div>';
        echo '<div class="page-width post-content ' . $intro . '">';
            if( has_block('lazyblock/intro-section') ) {
                // Do not display H1
            } else {
                echo '<h1>' . get_the_title( $parent ) . '</h1>';
            }
            echo get_the_content( null, false, $parent );
        echo '</div>';
    ?>
    
    
    <?php 
        $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => -1
        ) );
        $default_image = get_theme_mod('default_image');
?>
 
 <?php if ( $the_query->have_posts() ) : ?>
    
    <div class="posts-grid page-width">
    
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php 
                $featured_image = get_the_post_thumbnail_url( $post->ID, 'large' );
                if( $featured_image ) {
                    $thumb = $featured_image;
                } else {
                    $thumb = $default_image;
                }
                $external_link = get_post_meta( get_the_ID(), 'post_options_external-link', true );
                if( $external_link ) {
                    $url = $external_link;
                    $target = '_blank';
                } else {
                    $url = get_the_permalink();
                    $target = '_self';
                }
            ?>
            <article>
                <a href="<?= $url; ?>" title="Read: <?= get_the_title(); ?>" target="<?= $target; ?>">
                    <div class="thumbnail" style="background-image: url('<?= $thumb ?>');">&nbsp;</div>
                    <div class="content">
                        <div class="title"><?php the_title(); ?></div>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </div>
                    <div class="read-more">View <ion-icon name="arrow-forward-outline"></ion-icon></div>
                </a>
            </article>
        <?php endwhile; ?>
    
        <?php wp_reset_postdata(); ?>
 
    </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</section>