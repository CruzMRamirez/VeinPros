<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="veincontent">

			<!-- article -->
			<article id="post-404">
				<div class="jumbotron row align-items-center justify-content-center" style="background-image:url(<?php echo $bgImage; ?>);">
					<div class="col-12 black_highlight text-center">
						<a href="<?php echo home_url(); ?>" style="color: #fff;"><h1><?php _e( 'Error 404: Page not found', 'html5blank' ); ?></h1></a>
					</div>
				</div>
				<div class="row justify-content-center align-items-center" style="height:250px;">
					<h2 class="text-center">
						<p>Sorry there was an error with the URL please make sure it's correct.</p>
						<a href="<?php echo home_url(); ?>"><?php _e( 'Do you want to Return home?', 'html5blank' ); ?></a>
					</h2>
				</div>
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
