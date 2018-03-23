<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Speckyboy_sass
 */

get_header(); ?>

<div class="container-fluid"> 	
		<div class="main">
			<div class="row">
				<div class="col-sm-8 border-right">	
						<?php
						while ( have_posts() ) : the_post();
						?>
						<article class="row border-bottom post-th" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="col-sm-12 px-3 mt-5">	
								<?php
									if ( is_singular() ) :
										the_title('<h1 class="mt-0 text-capitalize">','</h1>');
									else :
										the_title( '<h1>', '</h1>' );
									endif;
								?>
								<div class="post-des border-top border-bottom p-1">
									<span class="text-uppercase post">By <a href=""><?php the_author_link(); ?></a></span> 
									<span class="text-uppercase post d-none d-sm-inline-block">On <?php echo the_time('F jS, Y'); ?></span> 
										<span class="post float-right text-uppercase">
											<?php the_category( ', ' ); ?>
										</span>	
								</div>
							<div class="pt-4 pr-4">
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</article>
						<?php
							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
				</div>
					<div class="col-lg-4 pl-3">
						<?php get_sidebar(); ?>
					</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
