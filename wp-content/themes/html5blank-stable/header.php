<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
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

		<!-- wrapper -->
		<div class="pagewrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<nav class="row justify-content-end">
					<div class="col">
						<a href="#"><img src="wp-content/uploads/2017/07/editedLogo.png" height="110" width="170" alt="Logo"></a>
					</div>
					<div class="hidden-sm-down col-7 row justify-content-end align-self-end">
						<button class="active">Home</button>
						<button>Symptoms-Veins</button>
						<button>Treatment</button>
						<button>Testimonials</button>
						<button>My Blog</button>
						<button>Contact-Us</button>
					</div>
					<div class="hidden-md-up col row justify-content-end align-self-end">
						<button ><img src="http://www.iconninja.com/files/327/943/625/more-home-menu-hamburger-icon.png" height="80" width="80"alt=""></button>	
					</div> 
				</nav>
			</header>
			<!-- /header -->
