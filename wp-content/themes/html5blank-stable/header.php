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
		<?php $page = "Home"?>
	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="pagewrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<nav class="navbar navbar-toggleable-md navbar-light row justify-content-between">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
					<a class="img" href="#"><img src="/wp-content/uploads/2017/07/editedLogo.png" height="110" width="170" alt="Logo"></a>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse align-self-end" id="navbarNav2">
						<div class="hidden-lg-up row justify-content-center">
							<div class="col">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'VeinPro-Main-Menu',
										'container_class' => 'custom-menu-class',
										'walker' => new Walker_Nav_Primary()
										) 
									 );
								?>
							</div>
						</div>
					</div>
					<div class="collapse navbar-collapse align-self-end" id="navbarNav">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'VeinPro-Main-Menu',
								'container_class' => 'custom-menu-class',
								'walker' => new Walker_Nav_Primary() 
							 	) 
							);
						?>
					</div>
				</nav>

			</header>
			<!-- /header -->
