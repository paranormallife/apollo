<?php
    $contact_email = get_theme_mod('contact_email');
    $instagram = get_theme_mod('instagram');
    $facebook = get_theme_mod('facebook');
    $twitter = get_theme_mod('twitter');
    $linkedin = get_theme_mod('linkedin');
    $youtube = get_theme_mod('youtube');
    $form = get_theme_mod('contact_form_code');
?>

<div class="contact-info">
    <div class="contact-links">
        <?php
            if( $contact_email ) {
                echo '<p><a href="mailto:'.$contact_email.'"><ion-icon name="mail"></ion-icon> <span>'.$contact_email.'</span></a></p>';
            }
        ?>
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
    <div class="contact-form">
        <?= do_shortcode($form); ?>
    </div>
</div>