<?php
  $homepage_service_1 = get_theme_mod('homepage_service_1');
  $permalink_1 = get_the_permalink($homepage_service_1);
  $title_1 = get_the_title($homepage_service_1);
  $homepage_service_1_image = get_theme_mod('homepage_service_1_image');
  $homepage_service_2 = get_theme_mod('homepage_service_2');
  $permalink_2 = get_the_permalink($homepage_service_2);
  $title_2 = get_the_title($homepage_service_2);
  $homepage_service_2_image = get_theme_mod('homepage_service_2_image');
  $homepage_service_3 = get_theme_mod('homepage_service_3');
  $permalink_3 = get_the_permalink($homepage_service_3);
  $title_3 = get_the_title($homepage_service_3);
  $homepage_service_3_image = get_theme_mod('homepage_service_3_image');
  if( $homepage_service_3 ) {
    $count = 'count-3';
  } elseif( $homepage_service_2 ) {
    $count = 'count-2';
  } else {
    $count = 'count-1';
  }
?>

<div class="homepage-services <?= $count; ?>">
    <?php if( $homepage_service_1 ) : ?>
        <a href="homepage-service-1" href="<?= $permalink_1; ?>" style="background-image: url('<?= $homepage_service_1_image; ?>');">
            <div class="title">
                <?= $title_1; ?>
            </div>
        </a>
    <?php endif; ?>
    <?php if( $homepage_service_2 ) : ?>
        <a href="homepage-service-2" href="<?= $permalink_2; ?>" style="background-image: url('<?= $homepage_service_2_image; ?>');">
            <div class="title">
                <?= $title_2; ?>
            </div>
        </a>
    <?php endif; ?>
    <?php if( $homepage_service_3 ) : ?>
        <a href="homepage-service-3" href="<?= $permalink_3; ?>" style="background-image: url('<?= $homepage_service_3_image; ?>');">
            <div class="title">
                <?= $title_3; ?>
            </div>
        </a>
    <?php endif; ?>
</div>