<?php 
$the_query = new WP_Query( array(
    'post_type' => 'testimonials',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
) ); 
$leave_a_review = get_theme_mod('reviews_link');
$reviews_intro = get_theme_mod('reviews_intro');
?>

<main class="page-content single-page">
    <h1>Testimonials</h1>
    <div class="slim">
        <?= $reviews_intro; ?>
        <p>
            <a href="<?= $leave_a_review; ?>" class="button" target="_blank">Leave a Review</a>
        </p>
    </div>

    <?php
        $shortcode = get_theme_mod('reviews_shortcode');
        if( $shortcode ) {
            echo '<div class="reviews-plugin">' . do_shortcode($shortcode) . '</div>';
        }
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <div class="testimonials-grid">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php
                $review = get_post_meta( $post->ID, 'review', true );
                $rating = get_post_meta( $post->ID, 'rating', true );
                $location = get_post_meta( $post->ID, 'location', true );
                $location = get_post_meta( $post->ID, 'location', true );
                $source_name = get_post_meta( $post->ID, 'source_name', true );
                if( $source_name ) {
                    $source = $source_name;
                } else {
                    $source = 'HomeAdvisor';
                }
                $source_url = get_post_meta( $post->ID, 'source_url', true );
                if( $source_url ) {
                    $link = $source_url;
                } else {
                    $link = 'https://www.homeadvisor.com/rated.APOLLOSEAMLESSGUTTERS.116191157.html';
                }
            ?>
            <div class="testimonial-card">
                <?php if( $rating != 'None' ) : ?>
                    <div class="rating-stars rating-<?= $rating; ?>">
                        <ul>
                            <li class="one"><ion-icon name="star"></ion-icon></li>
                            <li class="two"><ion-icon name="star"></ion-icon></li>
                            <li class="three"><ion-icon name="star"></ion-icon></li>
                            <li class="four"><ion-icon name="star"></ion-icon></li>
                            <li class="five"><ion-icon name="star"></ion-icon></li>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="content"><?= $review; ?></div>
                <div class="attribution">
                    <span class="name"><?php the_title(); ?></span>
                    <?php if( $location ) : ?>
                        <span class="location"> <?= $location; ?></span>
                    <?php endif; ?>
                </div>
                <div class="source">
                    Source: <a href="<?= $link; ?>" target="_blank"><?= $source; ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
     <?php endif; ?>
</main>
