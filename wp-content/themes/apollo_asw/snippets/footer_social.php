<?php
    $instagram = get_theme_mod('instagram');
    $facebook = get_theme_mod('facebook');
    $twitter = get_theme_mod('twitter');
    $linkedin = get_theme_mod('linkedin');
    $youtube = get_theme_mod('youtube');
    $phone = get_theme_mod('phone');
    $email = get_theme_mod('email');
    $location = get_theme_mod('location');
?>

<div class="footer-contact">
    <ul>
        <?php if( $phone ) : ?>
            <li class="footer-phone">
                <div class="icon" onclick="phoneToggle()"><ion-icon name="call-sharp"></ion-icon></div>
                <a href="tel:<?= $phone; ?>"><?= $phone; ?></a>
            </li>
        <?php endif; ?>
        <?php if( $email ) : ?>
            <li class="footer-email">
                <div class="icon" onclick="emailToggle()"><ion-icon name="mail-sharp"></ion-icon></div>
                <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
            </li>
        <?php endif; ?>
        <?php if( $location ) : ?>
            <li class="footer-location">
                <div class="icon" onclick="locationToggle()"><ion-icon name="location-sharp"></ion-icon></div>
                <?= $location; ?>
            </li>
        <?php endif; ?>
    </ul>
</div>

<div class="social-links">
    <ul>
        <?php
            if( $instagram ) {
                echo '<li><a href="'.$instagram.'" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>';
            }
            if( $facebook ) {
                echo '<li><a href="'.$facebook.'" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>';
            }
            if( $twitter ) {
                echo '<li><a href="'.$twitter.'" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></li>';
            }
            if( $linkedin ) {
                echo '<li><a href="'.$linkedin.'" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>';
            }
            if( $youtube ) {
                echo '<li><a href="'.$youtube.'" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a></li>';
            }
        ?>
    </ul>
</div>