<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script src="https://use.fontawesome.com/2eadd6ebbb.js"></script>

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					<i class="mtoggle fa fa-bars alignright" ></i>
					<!-- nav -->
					<nav class="nav" role="navigation">
						<div class="m-menu">
							<img class="open-menu-logo "src="<?php echo get_template_directory_uri(); ?>/img/logo_negativ.svg">
							<i class="mtoggle fa fa-times"></i>
						</div>
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<?php if (is_page() ) {
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('page-featured', array('class'=>'page-header-img'));
	    				}
						}
					 ?>

			</header>
			<!-- /header -->

			<!-- wrapper -->
			<div class="wrapper">
