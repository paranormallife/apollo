<?php
    $featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
    $hide_title = get_post_meta( $post->ID, 'hide_title', true );
    $overlay = get_post_meta( $post->ID, 'hero_overlay', true );
?>

<?php if( $hide_title != true ) : ?>

    <?php if( $featured_image ) : ?>

        <div class="page-hero">
            <?php if( $overlay ) : ?>
                <div class="featured-image monochrome" style="background-image: url('<?= $featured_image; ?>');">&nbsp;</div>
                <div class="overlay">&nbsp;</div>
            <?php else : ?>
                    <div class="featured-image" style="background-image: url('<?= $featured_image; ?>');">&nbsp;</div>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
        </div>

    <?php else : ?>

        <div class="page-hero empty">
            <h1><?php the_title(); ?></h1>
        </div>

    <?php endif; ?>

<?php endif; ?>