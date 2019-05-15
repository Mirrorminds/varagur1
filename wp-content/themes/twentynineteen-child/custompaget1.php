<?php /* Template Name: Sub page */ get_header();
?>

<section id="primary1" class="innerpage">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<main class="site-inner">

					<div id="left-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
            </div>
		</main><!-- #main -->

			</div>
			<div class="col-lg-3">
			   <div id="right-sub" class="wid-inner">
				<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
<?php endif; ?>
            </div>
			</div>
		</div>
	</div>
			</section><!-- #primary -->

<?php
get_footer();
