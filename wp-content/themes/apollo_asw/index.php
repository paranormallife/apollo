<?php get_header(); ?>

<!-- Index Template -->

<div class="page-width">

    <?php if( is_front_page() ) : ?>
        <?php get_template_part('snippets/testimonials-carousel'); ?>
        <?php get_template_part('snippets/homepage-cta'); ?>
        <main class="homepage">
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </main>
    <?php elseif( is_archive('testimonials') ) : ?>
        <?php get_template_part('snippets/testimonials-archive'); ?>
    <?php else : ?>
        <main class="single-page">
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </main>
    <?php endif; ?>

</div>
<?php if( is_page('contact') ) : ?>
    <?php $map = get_theme_mod('google-map'); ?>
    <?php if( $map ) : ?>
        <div class="map-embed">
            <?= $map; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>