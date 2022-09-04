<?php 
$parent = get_option( 'page_for_posts' );
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
            echo '<div class="content-width post-content ' . $intro . '">';
                if( has_block('lazyblock/intro-section') ) {
                    // Do not display H1
                } else {
                    echo '<h1>' . get_the_title() . '</h1>';
                }
                the_content();
                echo '<p><br/></br><a href="' . get_the_permalink($parent) . '">&larr; All Articles</a></p>';
            echo '</div>';
    } // end while
} // end if