<?php
    $heading = get_theme_mod('contact_cta_heading');
    $label = get_theme_mod('contact_cta_label');
    $destination = get_theme_mod('contact_cta_destination');
    $permalink = get_permalink( $destination );
?>

<?php if( $destination ) : ?>
    <div class="footer-contact">
        <div class="page-width slim">
            <h2><?= $heading; ?></h2>
            <a class="button" href="<?= $permalink; ?>"><?= $label; ?></a>
        </div>
    </div>
<?php endif; ?>