<?php get_header(); ?>

<!-- Index Template -->

<div class="page-width">

    <?php if( is_front_page() ) : ?>
        <?php get_template_part('snippets/testimonials-carousel'); ?>
        <?php get_template_part('snippets/homepage-cta'); ?>
        <?php get_template_part('snippets/homepage-services'); ?>
        <main class="homepage">
            <div class="page-content slim">
                <?php the_content(); ?>
            </div>
        </main>
    <?php endif; ?>

</div>

<?php get_footer(); ?>