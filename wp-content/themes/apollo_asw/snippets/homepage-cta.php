<?php
    $line_1 = get_theme_mod('homepage_cta_line_1');
    $line_2 = get_theme_mod('homepage_cta_line_2');
    $line_3 = get_theme_mod('homepage_cta_line_3');
    $phone = get_theme_mod('phone');
?>

<?php if( $line_1 or $line_3 ) : ?>
    <div class="homepage-cta">
        <a href="tel:<?= $phone; ?>">

            <?php if( $line_1 ) : ?>
                <div class="line-1"><?= $line_1; ?></div>
            <?php endif; ?>

            <?php if( $line_2 ) : ?>
                <div class="line-2"><?= $line_2; ?></div>
            <?php endif; ?>
            
            <?php if( $line_3 ) : ?>
                <div class="line-3"><?= $line_3; ?></div>
            <?php endif; ?>

            <div class="phone">
                <span class="icon"><ion-icon name="call"></ion-icon></span>
                <span class="phone-number"><?= $phone; ?></span>
            </div>

        </a>
    </div>
<?php endif; ?>