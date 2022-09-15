<?php
    $line_1 = get_theme_mod('homepage_cta_line_1');
    $line_2 = get_theme_mod('homepage_cta_line_2');
    $line_3 = get_theme_mod('homepage_cta_line_3');
    $contact_link = get_theme_mod('homepage_cta_contact');
    $phone = get_theme_mod('phone');
?>

<?php if( $line_1 or $line_3 ) : ?>
    <div class="homepage-cta">

            <div class="slim">
                <?php if( $line_1 ) : ?>
                    <div class="line-1"><?= $line_1; ?></div>
                <?php endif; ?>
    
                <?php if( $line_2 ) : ?>
                    <div class="line-2"><?= $line_2; ?></div>
                <?php endif; ?>
                
                <?php if( $line_3 ) : ?>
                    <div class="line-3"><?= $line_3; ?></div>
                <?php endif; ?>
    
                <div class="columns">
                    <div class="phone">
                        <a href="tel:<?= $phone; ?>" class="button">
                            <span class="icon"><ion-icon name="call"></ion-icon></span>
                            <span class="phone-number"><?= $phone; ?></span>
                        </a>
                    </div>
                    <div class="message">
                        <a href="<?= $contact_link; ?>" class="button">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <span class="phone-number">Send a Message</span>
                        </a>
                    </div>
                </div>
            </div>


    </div>
<?php endif; ?>