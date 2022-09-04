<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
            $featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
            $default_image = get_theme_mod('default_image');
            if( $featured_image ) { $hero = $featured_image; }
            else { $hero = $default_image; }
            $banner = get_post_meta( $post->ID, 'banner', true );
            if( has_block('lazyblock/intro-section') ) {
                $intro = 'has-intro';
            }
            echo '<div class="post-hero" style="background-image: url(\''.$hero.'\')">';
                echo '<div class="hero-grain"></div>';
                if( $banner ) {
                    echo '<div class="post-banner-container page-width">';
                        echo '<div class="post-banner">'.$banner.'</div>';
                    echo '</div>';
                }
            echo '</div>';
            echo '<div class="content-width post-content ' . $intro . '">';
                if( has_block('lazyblock/intro-section') ) {
                    // Do not display H1
                } else {
                    echo '<h1>' . get_the_title() . '</h1>';
                }
                the_content();
            echo '</div>';
    } // end while
} // end if