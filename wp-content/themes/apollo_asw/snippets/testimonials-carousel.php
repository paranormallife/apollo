<?php 
$the_query = new WP_Query( array(
    'post_type' => 'testimonials',
    'posts_per_page' => 10,
    'orderby' => 'menu_order',
    'order' => 'ASC'
) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
    <div class="testimonials-carousel">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
            $review = get_post_meta( $post->ID, 'review', true );
            $rating = get_post_meta( $post->ID, 'rating', true );
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
        <div class="testimonial-slide">
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
    <div class="reviews-links">
        <a class="button gold" href="<?= get_theme_mod('wpurl'); ?>/testimonials">More Reviews</a>
        <a class="button cyan" target="_blank" href="<?= get_theme_mod('reviews_link'); ?>">Leave a Review</a>
    </div>
 <?php endif; ?>

 <script>
    jQuery(document).ready(function(){
        jQuery('.testimonials-carousel').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 6000,
            prevArrow: '<div class="arrow prev"><ion-icon name="chevron-back"></ion-icon></div>',
            nextArrow: '<div class="arrow next"><ion-icon name="chevron-forward"></ion-icon></div>',
        });
    });
 </script>