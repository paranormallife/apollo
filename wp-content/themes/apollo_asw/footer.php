<!-- FOOTER.PHP ++++++++++++++++++++++ -->

<?php
    $phone = get_theme_mod('phone');
    $address = get_theme_mod('address');
    $email = get_theme_mod('email');
    $name = get_bloginfo('name');
    $reviews_link = get_theme_mod('reviews_link');
?>

<footer>
    <div class="page-width footer-columns">
        <div class="footer-column-1">
            <h2><?= $name; ?></h2>
            <div class="addresss"><?= $address; ?></div>
            <div class="phone"><a href="tel:<?= $phone; ?>"><?= $phone; ?></a></div>
            <div class="email"><a href="mailto:<?= $email; ?>"><?= $email; ?></a></div>
        </div>
        <div class="footer-column-2">
            <div class="footer-menu">
                <h2><?= wp_get_nav_menu_name('nav2'); ?></h2>
                <?php wp_nav_menu( array( 'theme_location' => 'nav2' ) ); ?>
            </div>
        </div>
    </div>
</footer>
<div class="subfooter">
    <div class="page-width">
        <div class="copyright">
            &copy; <?= date('Y'); ?>, <?= $name; ?>
        </div>
        <ul class="subfooter-links">
            <?php if( $reviews_link ) : ?>
                <li><a href="<?= $reviews_link ?>" target="_blank">Leave a Review</a></li>
            <?php endif; ?>
            <li><a href="https://asubtleweb.com" target="_blank">A Subtle Website</a></li>
        </ul>
    </div>
</div>


<?php get_template_part('assets/scripts'); ?>

<?php /* Include this so the admin bar is visible. */ wp_footer(); ?>

</body>
</html>