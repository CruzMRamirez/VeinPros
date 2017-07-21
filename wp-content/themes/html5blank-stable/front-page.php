<?php /* Template Name: VeinPros front-Page Template */ get_header(); ?>
    <div class="front-page">
        <div class="jumbotron row align-items-center justify-content-center">
            <div class="col-12 black_highlight text-center">
                <h1>Welcome to VeinPros</h1>
            </div>
        </div>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <?php the_content(); ?>
            </article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Error 404. Not found.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

        
        <div class="row videoRow hidden-sm-down colorize">
            <div class="col-8">
                <div class="bigVideo"></div>
            </div>
            <div class="col-4">
                <div class="col-md-12 col-sm-6 colorize" style="margin-bottom: 2vw;">
                    <div class="smallVideo"></div>
                </div>
                <div class="col-md-12 col-sm-6 colorize" style="margin-top: 1vw;">
                    <div class="smallVideo"></div>
                </div>
            </div>
        </div>
        <div class="row videoRow hidden-md-up colorize">
            <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                            <div class="bigVideo bigvideomobile"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="bigVideo bigvideomobile"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="bigVideo bigvideomobile"></div>
                            </div>
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>