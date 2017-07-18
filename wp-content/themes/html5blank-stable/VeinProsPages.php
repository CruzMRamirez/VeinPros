<?php /* Template Name: VeinPros Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="content">
			<?php $bgImage = get_the_post_thumbnail_url(); ?>
			<div class="jumbotron row align-items-center justify-content-center" style="background-image:url(<?php echo $bgImage; ?>);">
					<div class="col-12 black_highlight text-center">
							<h1><?php the_title(); ?></h1>
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

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
