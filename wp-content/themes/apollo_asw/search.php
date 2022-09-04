<?php get_header(); ?>

<?php $theme = get_stylesheet_directory_uri(); ?>

<!-- Search Template -->

<main>
    <div class="page-content search-results page-width">

        <h1>Search Results for "<?php echo get_search_query(); ?>"</h1>

        <?php if ( have_posts() ) {
        echo '<ul class="articles">';
        while ( have_posts() ) {
            the_post(); 
            echo '<li>';
                echo '<a href="' . get_the_permalink() . '">';
                    echo '<h2>' . get_the_title() . '</h2>';
                    echo '<p>' . get_the_excerpt() . '</p>';
                echo '</a>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'Sorry, no results were found for your search.';
    } 
    
    ?>

    
    </div>
</main>

<?php get_footer(); ?>