<div class="lightbox-gallery">
    <?php $gallery_id = rand(100000,999999); ?>
    <?php foreach( $attributes['images'] as $image ) : ?>
    <?php
        $thumb_url = wp_get_attachment_image_url( $image['id'], 'medium');
        $large_url = wp_get_attachment_image_url( $image['id'], 'large');
        $i++;
    ?>
    <div class="thumbnail" style="background-image: url('<?= $thumb_url; ?>');">
        <a class="gallery-<?= $gallery_id; ?>" href="<?= $large_url; ?>">
            <img src="<?= $thumb_url; ?>" alt="Gallery Image <?= $i; ?>" />
        </a>
    </div>
    <?php endforeach; ?>
</div>

<script>
    jQuery(document).ready(function(){
        jQuery('.gallery-<?= $gallery_id; ?>').featherlightGallery({
            gallery: {
                fadeIn: 300,
                fadeOut: 300
            },
            openSpeed:    300,
            closeSpeed:   300
        });
    });
</script>