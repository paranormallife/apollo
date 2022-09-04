<?php
    $phone = get_theme_mod('phone');
    $location = get_theme_mod('location');
    $wordmark = get_theme_mod('wordmark');
    $name = get_bloginfo('name');
    $wpurl = get_bloginfo('wpurl');
    $theme = get_stylesheet_directory_uri();
?>

<div class="header-areas">
    <div class="secondary">
        <div class="grid page-width">
            <div class="phone">
                <a href="tel:<?= $phone; ?>">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <span class="text"><?= $phone; ?></span>
                </a>
            </div>
            <div class="location">
                <span class="text"><?= $location; ?></span>
            </div>
        </div>
    </div>
    <div class="primary">
        <div class="grid page-width">
            <div class="wordmark">
                <a href="<?= $wpurl; ?>" title="Homepage">
                    <?php if( is_front_page() ) : ?><h1><?php endif; ?>
                        <?= $wordmark; ?>
                    <?php if( is_front_page() ) : ?></h1><?php endif; ?>
                </a>
            </div>
            <div class="graphic">
                <img src="<?= $theme; ?>/assets/images/asg-icon.svg" />
            </div>
            <div class="menu-toggle" onclick="menuToggle()">
                <div class="menu-open"><ion-icon name="menu"></ion-icon></div>
                <div class="menu-close"><ion-icon name="close"></ion-icon></div>
            </div>
            <div class="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'nav1' ) ); ?>
            </div>
        </div>
    </div>
</div>