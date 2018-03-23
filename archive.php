<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Speckyboy_sass
 */
get_header(); ?>
<div class="container-fluid"> 	
		<div class="main">
			<div class="row">
				<div class="col-sm-8 border-right">	
					<div id="primary" class="content-area">
						<main id="main" class="site-main">
							<?php
							if ( have_posts() ) : ?>
								<header class="page-header pr-4">
									<h4 class="text-uppercase archive-subtitle">category archives
										<a href="" class="float-right rss-feed">
											<span class="dashicons dashicons-rss"></span>
											<?php the_archive_title() ?>
										</a>
									<?php
										the_archive_title( '<h1 class="pt-4">', '</h1>' );
										the_archive_description( '<p class="archive-description border-top">', '</p>' );
									?>
									</h4>
								</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
			<div class="col-lg-4 pl-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>


