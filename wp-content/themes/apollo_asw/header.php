<!DOCTYPE html>

<head>
<?php $theme = get_bloginfo('template_directory'); ?>
<meta http-equiv="Content-Type" content="text/html, charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php get_template_part('snippets/header_meta') ?>

<?php $styleSheetHash = '?v=001'; ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?><?= $styleSheetHash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= get_stylesheet_directory_uri(); ?>/assets/css/base.css<?= $styleSheetHash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= get_stylesheet_directory_uri(); ?>/assets/css/tablet.css<?= $styleSheetHash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= get_stylesheet_directory_uri(); ?>/assets/css/desktop.css<?= $styleSheetHash; ?>" />

<?php /* This should always be included just before the </head> tag. */ wp_head(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
</head>

<body id="body" class="asw <?php if(is_front_page()) { echo 'home '; } else { echo get_post_type(); echo ' '; echo $post->post_name; } ?>">

<header>
  <?php get_template_part('snippets/header_nav'); ?>
</header>

<!-- END OF HEADER.PHP -->