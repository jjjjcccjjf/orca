<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-v3.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  
  <?php wp_head(); ?>
</head>

<body>
  <div id="video-pop" class="mfp-hide white-popup-block video-popup">
        <?php echo get_field('panel_2_iframe_video', 6) ?>
  </div>
  <div class="homepage">
      <span class="border-nav"></span>
      <header>


        <aside>
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
        </aside>

        <div class="menu-hldr">
          <ul class="pad-0 listn menu-list">
            <li class="<?php echo (get_the_ID() == 6)? 'active': '' ?>"><a href="<?php echo get_permalink(6) ?>">Home</a></li>
            <li class="<?php echo (get_the_ID() == 31)? 'active': '' ?>"><a href="<?php echo get_permalink(31) ?>">About Orca</a></li>
            <li class="<?php echo (get_the_ID() == 49)? 'active': '' ?>"><a href="<?php echo get_permalink(49) ?>">Services</a></li>
            <li class="<?php echo (get_the_ID() == 29)? 'active': '' ?>"><a href="<?php echo get_permalink(29) ?>">Facilities</a></li>
            <li class="<?php echo (get_the_ID() == 67)? 'active': '' ?>"><a href="<?php echo get_permalink(67) ?>">Orca Technology</a></li>
            <li class="contact-nav <?php echo (get_the_ID() == 12)? 'active': '' ?>"><a href="<?php echo get_permalink(12) ?>">Contact Us</a></li>
          </ul>
        </div>

        <div class="burger not-active onload">
          <span></span>
          <span></span>
          <span></span>
        </div>



      </header>