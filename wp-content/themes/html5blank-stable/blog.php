<?php /* Template Name: VeinPros Blog Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
        <section class="veincontent">
			<?php $bgImage = get_the_post_thumbnail_url(); ?>
			<div class="jumbotron row align-items-center justify-content-center" style="background-image:url(<?php echo $bgImage; ?>);">
					<div class="col-12 black_highlight text-center">
							<h1><?php the_title(); ?></h1>
					</div>
			</div>
            
            <div class="paddlt">
                <h1 class="text-center"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
                <div class="row justify-content-center post-container">
                    
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'order' => 'DESC' 
                        );
                        $the_query = new WP_Query( $args );
                        if( $the_query -> have_posts()):
                            while( $the_query -> have_posts() ): $the_query -> the_post();
                                get_template_part('postloopcontent', get_post_format() );
                            endwhile;
                        endif;
                    ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10" style="margin-bottom: 20px;">
                    <?php
                                $count_posts = wp_count_posts();
                                
                                $published_posts = $count_posts->publish;
                                
                                if($published_posts >= 4){
                                    echo '<a class="btn btn-lg btn-block loadbtn" data-url="' . admin_url('admin-ajax.php') . '" data-page="1" style="font-size:30px;"> 
                                            <span class="text">
                                            Load More Posts
                                            </span>
                                          </a>';
                                }
                    ?>
                    </div>
                </div>
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>