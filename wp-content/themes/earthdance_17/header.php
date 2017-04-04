<!doctype html>
	<html class="no-js" lang="">
	    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="x-ua-compatible" content="ie=edge">
	        <title></title>
	        <meta name="description" content="">
	        <meta name="viewport" content="width=device-width, initial-scale=1">

					<script src="https://use.typekit.net/jec1rlg.js"></script>
					<script>try{Typekit.load({ async: true });}catch(e){}</script>

					<link rel="stylesheet" href="https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.css">
					<script src="https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.js"></script>

			<!-- <link rel="stylesheet" href="/wp-content/themes/earthdance_17/style.css" /> -->
	        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
	        <!-- Place favicon.ico in the root directory -->
      <!-- <script src="/wp-content/themes/earthdance_17/js/vendor/modernizr-custom.js"></script> -->

			<?php wp_head(); ?>
	    </head>
    <body <?php body_class('page'); ?>>

			<!--header section-->
			<header class="header__layer">
				<div class="header__bg">
				  <div class="header__container">
						<div class="header__logo-box">
							<a href="/" class="header__logo">
						    <?php include "includes/logo.php" ?>
								<span>EarthDance</span>
							</a>
					    <p class="header__tagline"><?php the_field('tagline', 'option'); ?></p>
						</div>
						<div class="header__social">
							<a href="<?php the_field('google_map_url', 'option'); ?>" class="header__link">Directions</a>
							<a href="<?php the_field('phone_number', 'option'); ?>" class="header__link">Phone</a>

							<a href="<?php the_field('facebook_url', 'option'); ?>" class="header__icon">
								<div data-icon="ei-sc-facebook" data-size="m"></div>
							</a>

							<a href="<?php the_field('twitter_url', 'option'); ?>" class="header__icon">
								<div data-icon="ei-sc-twitter" data-size="m"></div>
							</a>

							<a href="<?php the_field('instagram_url', 'option'); ?>" class="header__icon">
								<div data-icon="ei-sc-instagram" data-size="m"></div>
							</a>
						</div>
						<a href="#" class="header__icon hamburger">
							<div data-icon="ei-navicon" data-size="m"></div>
						</a>
				  </div>
				</div>

			  <?php include 'nav.php'; ?>
			</header>
