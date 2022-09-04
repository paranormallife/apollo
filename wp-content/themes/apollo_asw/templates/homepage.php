<?php
if ( is_active_sidebar( 'homepage_banner' ) ) {
    echo '<section class="homepage-banner">';
        echo '<div class="page-width">';
            dynamic_sidebar( 'homepage_banner' );
        echo '</div>';
    echo '</section>';
}

get_template_part('snippets/homepage_hero');
get_template_part('snippets/homepage_emergency');

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
            echo '<div class="content-width homepage-content">'; 
                the_content();
            echo '</div>';
    } // end while
} // end if

get_template_part('snippets/homepage-stories');
get_template_part('snippets/homepage_donate');
get_template_part('snippets/homepage_posts');