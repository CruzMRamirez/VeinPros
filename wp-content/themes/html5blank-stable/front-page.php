<?php /* Template Name: VeinPros front-Page Template */ get_header(); ?>
    <div class="front-page">
    <?php $bgImage = get_the_post_thumbnail_url(); ?>
        <div class="jumbotron row align-items-center justify-content-center" style="background-image:url(<?php echo $bgImage; ?>);">
            <video class="homepage--video hidden-sm-down" src="" autoplay="autoplay" loop="loop" muted></video>
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

        
        <div class="row videoRow hidden-sm-down">
            <div class="col-8">
                <video class="bigVideo" poster="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros-m4v-image.jpg" allowfullscreen controls>
                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/08/Vein-Pros.m4v" type="video/m4v">
                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros.mp4" type="video/mp4">
                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros.ogg" type="video/ogg">
                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros.webm" type="video/webm">
                </video>
            </div>
            <div class="col-4">
                <div class="col-md-12 col-sm-6" style="margin-bottom: 2vw;">
                    <video class="smallVideo" poster="<?php echo home_url(); ?>/wp-content/uploads/2017/08/Web-Loop-m4v-image.jpg" allowfullscreen controls>
                        <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/08/Web-loop.m4v" type="video/m4v">
                        <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Web-loop.mp4" type="video/mp4">
                        <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Web-loop.ogg" type="video/ogg">
                        <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Web-loop.webm" type="video/webm">
                    </video>
                </div>
                <div class="col-md-12 col-sm-6" style="margin-top: 1vw;">
                    <iframe class="smallVideo" src="https://www.youtube.com/embed/JwWlLTzXtdo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row videoRow hidden-md-up">
            <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <video class="bigVideo bigvideomobile" poster="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros-m4v-image.jpg" allowfullscreen controls>
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/08/Vein-Pros.m4v" type="video/m4v">
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros.mp4" type="video/mp4">
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros.ogg" type="video/ogg">
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Vein-Pros.webm" type="video/webm">
                                </video>
                            </div>
                            <div class="carousel-item">
                                <video class="bigVideo bigvideomobile" poster="<?php echo home_url(); ?>/wp-content/uploads/2017/08/Web-Loop-m4v-image.jpg" allowfullscreen controls>
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/08/Web-loop.m4v" type="video/m4v"> 
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Web-loop.mp4" type="video/mp4">
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Web-loop.ogg" type="video/ogg">
                                    <source src="<?php echo home_url(); ?>/wp-content/uploads/2017/09/Web-loop.webm" type="video/webm">
                                </video>
                            </div>
                            <div class="carousel-item">
                                <iframe class="bigVideo bigvideomobile" src="https://www.youtube.com/embed/JwWlLTzXtdo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
    <script>
        jQuery(document).ready(function() {
        var width = jQuery(window).width();
        if(width <= 767){
                jQuery(".homepage--video").removeAttr("src");
            }
            else {
                jQuery(".homepage--video").attr("src", "<?php echo home_url(); ?>/wp-content/uploads/2017/08/Web-loop.m4v");
            }
        }); 
        jQuery(window).on('resize', function(){
        if(jQuery(this).width() <= 767){
            jQuery(".homepage--video").removeAttr("src");
        }
        else {
            jQuery(".homepage--video").attr("src", "<?php echo home_url(); ?>/wp-content/uploads/2017/08/Web-loop.m4v");
        }
        });
    </script>
<?php get_footer();?>