<?php
    $phone = get_theme_mod('phone');
    $location = get_theme_mod('location');
    $wordmark = get_theme_mod('wordmark');
    $name = get_bloginfo('name');
    $wpurl = get_bloginfo('wpurl');
    $theme = get_stylesheet_directory_uri();
    $default_hero = get_theme_mod('default_hero');
    $featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
    if( $featured_image ) {
        $hero = $featured_image;
    } else {
        $hero = $default_hero;
    }
?>

<div class="header-areas">
    <div class="sticky">
        <div class="grid page-width">
            <div class="phone">
                <a href="tel:<?= $phone; ?>">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <span class="text"><?= $phone; ?></span>
                </a>
            </div>
            <div class="location">
                <a href="<?= $wpurl; ?>/contact">
                    <span class="icon"><ion-icon name="location"></ion-icon></span>
                    <span class="text"><?= $location; ?></span>
                </a>
            </div>
            <div class="menu-toggle" onclick="menuToggle()">
                <div class="menu-open"><ion-icon name="menu"></ion-icon></div>
                <div class="menu-close"><ion-icon name="close"></ion-icon></div>
                <span class="label">Menu</span>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="main-menu-container page-width">
            <?php wp_nav_menu( array( 'theme_location' => 'nav1' ) ); ?>
        </div>
    </div>
    <div class="hero">
        <div class="hero-image" style="background-image: url('<?= $hero; ?>');">&nbsp;</div>
        <div class="page-width header-bottom">
            <div class="wordmark">
                <a href="<?= $wpurl; ?>" title="Homepage">
                    <?php if( is_front_page() ) : ?><h1><?php endif; ?>
                        <?= $wordmark; ?>
                    <?php if( is_front_page() ) : ?></h1><?php endif; ?>
                </a>
            </div>
            <div class="quicklinks">
                <?php wp_nav_menu( array( 'theme_location' => 'nav3' ) ); ?>
            </div>
        </div>
    </div>
</div>