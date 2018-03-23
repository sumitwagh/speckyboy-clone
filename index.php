<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Speckyboy_sass
 */

get_header(); ?>
<!-- Post section Start -->
<div class="container-fluid"> 	
		<div class="main">
			<div class="row">
				<div class="col-sm-8 border-right">	
					<?php
					if ( have_posts() ) :
						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

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

					<!-- pagination  -->
				<nav>
					<ul class="pagination justify-content-center pt-5">
						  <li class="pr-2"><a class="page-link" href="#">1</a></li>
						  <li class="pr-2"><a class="page-link" href="#">2</a></li>
						  <li class="pr-2"><a class="page-link" href="#">3</a></li>
						  <li class="pr-2"><a class="page-link" href="#">...</a></li>
						  <li class="pr-2">
							<a class="page-link" href="#" aria-label="Next">
							  <span aria-hidden="true" class="">NEXT</span>
							  <span class="sr-only">Next</span>
							</a>
						  </li>
						</ul>
					  </nav>
				</div>
				<div class="col-lg-4 pl-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Post Section End -->

<?php get_footer(); ?>
