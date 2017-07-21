<?php /* Template Name: VeinPros Blog Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="content">
            <section class="veincontent">
			<?php $bgImage = get_the_post_thumbnail_url(); ?>
			<div class="jumbotron row align-items-center justify-content-center" style="background-image:url(<?php echo $bgImage; ?>);">
					<div class="col-12 black_highlight text-center">
							<h1><?php the_title(); ?></h1>
					</div>
			</div>
            <h1 class="text-center"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
            <div class="row justify-content-center">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'order' => 'DESC',
                        'posts_per_page' => 6  
                    );
                    $the_query = new WP_Query( $args );
                    if( $the_query -> have_posts() ) : while( $the_query -> have_posts() ) : $the_query -> the_post();
                ?>  
                    <div class="col-10 row justify-content-around blog-post">
                        <div class="col-md-3 blog-min row justify-content-center align-items-center">
                            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_post_thumbnail(array(500,500)); // Declare pixel size you need inside the array ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <hr class="hidden-md-up" style="background-color: white; margin-top: 20px; margin-bottom: 10px; height: 1px; width: 80%;">
                        <div class="col-md-9 blog-min blog-col">
                            <h1 class="text-center"><a id="ucsf-fresno-update-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a></h1>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>