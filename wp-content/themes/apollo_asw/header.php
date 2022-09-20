<!DOCTYPE html>

<head>
<?php $theme = get_bloginfo('template_directory'); ?>
<meta http-equiv="Content-Type" content="text/html, charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php get_template_part('snippets/header_meta') ?>

<?php 
  $styleSheetHash = '?v=005';
  $theme = get_stylesheet_directory_uri();
?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?><?= $styleSheetHash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= get_stylesheet_directory_uri(); ?>/assets/css/base.css<?= $styleSheetHash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= get_stylesheet_directory_uri(); ?>/assets/css/tablet.css<?= $styleSheetHash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= get_stylesheet_directory_uri(); ?>/assets/css/desktop.css<?= $styleSheetHash; ?>" />

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link type="text/css" rel="stylesheet" href="<?= $theme; ?>/featherlight/featherlight.min.css" />
<link type="text/css" rel="stylesheet" href="<?= $theme; ?>/featherlight/featherlight.gallery.min.css" />
<script src="<?= $theme; ?>/featherlight/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= $theme; ?>/featherlight/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
<?php /* This should always be included just before the </head> tag. */ wp_head(); ?>
</head>

<body id="body" class="asw <?php if(is_front_page()) { echo 'home '; } else { echo get_post_type(); echo ' '; echo $post->post_name; } ?>">

<header>
  <?php get_template_part('snippets/header_nav'); ?>
</header>

<!-- END OF HEADER.PHP -->