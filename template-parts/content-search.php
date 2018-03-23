<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Speckyboy_sass
 */
?>

<article class="row border-bottom post-th" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-sm-4 mt-5 pb-4">
		<?php the_post_thumbnail();  ?>
	</div>
	<div class="col-sm-8 px-3 mt-5">
		<a href="" class="text-primary">
			<?php
				if ( is_singular() ) :
					the_title('<h2 class="mt-0 text-capitalize">','</h2>');
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			?>
		</a>
			<div class="post-des border-top border-bottom p-1">
				<span class="text-uppercase post">By <a href=""><?php the_author_link(); ?></a></span> 
				<span class="text-uppercase post d-none d-sm-inline-block">On <?php echo the_time('F jS, Y'); ?></span> 
					<span class="post float-right text-uppercase">
						<?php the_category( ', ' ); ?>
					</span>	
			</div>
		<div class="pt-2 excerpt">
			<?php echo get_the_excerpt(); ?>	
		</div>
	</div>
</article>