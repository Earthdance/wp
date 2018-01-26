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

					<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="<?php get_site_url() ?>/favicon.ico">
					<link rel="apple-touch-icon" sizes="57x57" href="<?php get_template_directory_uri() ?>/favicons/favicon-57.png">
					<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php get_template_directory_uri() ?>/favicons/favicon-57.png">
					<link rel="apple-touch-icon" sizes="72x72" href="<?php get_template_directory_uri() ?>/favicons/favicon-72.png">
					<link rel="apple-touch-icon" sizes="114x114" href="<?php get_template_directory_uri() ?>/favicons/favicon-114.png">
					<link rel="apple-touch-icon" sizes="120x120" href="<?php get_template_directory_uri() ?>/favicons/favicon-120.png">
					<link rel="apple-touch-icon" sizes="144x144" href="<?php get_template_directory_uri() ?>/favicons/favicon-144.png">
					<link rel="apple-touch-icon" sizes="152x152" href="<?php get_template_directory_uri() ?>/favicons/favicon-152.png">
					<meta name="application-name" content="EaerthDance">
					<meta name="msapplication-TileImage" content="<?php get_template_directory_uri() ?>/favicons/favicon-144.png">
					<meta name="msapplication-TileColor" content="#708f41">


      <!-- <script src="/wp-content/themes/earthdance_17/js/vendor/modernizr-custom.js"></script> -->

			<?php wp_head(); ?>

			<script>
			  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
				//
			  // ga('create', 'UA-16022492-2', 'auto');
			  // ga('send', 'pageview');
			</script>

			<script type='text/javascript'>
				(function (d, t) {
				  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
				  bh.type = 'text/javascript';
				  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=4hnuxxxuogylouhp3fnvxq';
				  s.parentNode.insertBefore(bh, s);
				  })(document, 'script');
				</script>
	    </head>
    <body <?php body_class('page'); ?>>

			<!--header section-->
			<header class="header__layer">
				<div class="header__bg">
				  <div class="header__container">
						<div class="header__logo-box">
							<a href="/" class="header__logo">
						    <?php include "includes/logo.php" ?>
								<span><?php include "includes/earthdance-letters.php" ?></span>
							</a>
					    <p class="header__tagline"><?php include "includes/farm-school.php" ?></p>
						</div>
						<div class="header__utility">
							<div class="header__links">
								<a href="/support/donate" class="header__link donateBtn" class="donateBtn">Donate</a>
								<a href="<?php the_field('google_map_url', 'option'); ?>" class="header__link">Location</a>
								<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="header__link">Phone</a>
							</div>
							<div class="header__social">
								<a href="<?php the_field('facebook_url', 'option'); ?>" class="header__icon">
									<div data-icon="ei-sc-facebook" data-size="m"></div>
								</a>
								<a href="<?php the_field('twitter_url', 'option'); ?>" class="header__icon">
									<div data-icon="ei-sc-twitter" data-size="m"></div>
								</a>
								<a href="<?php the_field('instagram_url', 'option'); ?>" class="header__icon">
									<div data-icon="ei-sc-instagram" data-size="m"></div>
								</a>
								<a href="<?php the_field('flickr_url', 'option'); ?>" class="header__icon">
									<div data-icon="ei-camera" data-size="m"></div>
								</a>
							</div>
					</div>
						<a href="#" class="header__icon hamburger">
							<div>
								<div data-icon="ei-navicon" data-size="m"></div>
							</div>
							<div class="hide">
								<div data-icon="ei-close" data-size="m"></div>
							</div>
						</a>
				  </div>
				</div>

			  <?php include 'nav.php'; ?>
			</header>

			<div id="manageScroll">
