<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Speckyboy_sass
 */

?>
	<!-- footer section  -->
	<div class="mt-5"> 
	<div class="d-flex bg-footer">
		<div class="col pl-5">
			<div class="section text-white justify-content-center">
					<h3 class="text-uppercase pb-2">inspiration</h3>
					<ul class="list-unstyled">
						<li class="pb-1">
							<a href="">eCommerce Web Designs</a>
						</li>
						<li class="pb-1">
							<a href="">Clean Web Design</a>
						</li>
						<li class="pb-1">
							<a href="">Flat Web Design</a>
						</li>
						<li class="pb-1">
							<a href="">Mimimal Web Design</a>
						</li>
						<li class="pb-1">
							<a href="">Portfolio Inspiration</a>
						</li>
						<li class="pb-1">
							<a href="">Simple Logo Design</a>
						</li>
					</ul>
			</div>
		</div>
<div class="col">
	<div class="section text-white">
		<h3 class="text-uppercase pb-2">Resources</h3>
		<ul class="list-unstyled">
			<li class="pb-1">
				<a href="">Free Photo</a>
			</li>
			<li class="pb-1">
				<a href="">Free Font</a>
			</li>
			<li class="pb-1">
				<a href="">Icon Set</a>
			</li>
			<li class="pb-1">
				<a href="">jQuery Plugins</a>
			</li>
			<li class="pb-1">
				<a href="">Mobile UI Kits</a>
			</li>
			<li class="pb-1">
				<a href="">Web UI Kits</a>
			</li>
		</ul>
	</div>
</div>
<div class="col">
	<div class="section text-white">
		<h3 class="text-uppercase pb-2">Templates</h3>
		<ul class="list-unstyled">
			<li class="pb-1" class="">
				<a href="">Bootstrap Dashboard</a>
			</li>
			<li class="pb-1">
				<a href="">Bootstrap Template</a>
			</li>
			<li class="pb-1">
				<a href="">Newslatter Templates</a>
				</a>
			</li>
			<li class="pb-1">
				<a href="">PSD Web Templates</a>
			</li>
			<li class="pb-1">
				<a href="">Resposive Templates</a>
			</li>
			<li class="pb-1">
				<a href="">Wireframe Templates</a>
			</li>
		</ul>
	</div>
</div>
<div class="col">
	<div class="section text-white">
		<h3 class="text-uppercase pb-2">Photoshop</h3>
		<ul class="list-unstyled">
			<li class="pb-1">
				<a href="">Lightroom Presets</a>
			</li>
			<li class="pb-1">
				<a href="">Mockup Templates</a>
			</li>
			<li class="pb-1">
				<a href="">Photo Effects</a>
			</li>
			<li class="pb-1">
				<a href="">Photoshop Actions</a>
			</li>
			<li class="pb-1">
				<a href="">Photoshop Brushes</a>
			</li>
			<li class="pb-1">
				<a href="">Photoshop Tutorials</a>
			</li>
		</ul>
	</div>
</div>
<div class="col">
	<div class="section text-white">
		<h3 class="text-uppercase pb-2">WordPress</h3>
		<ul class="list-unstyled">
			<li class="pb-1">
				<a href="">WordPress eCommerce</a>
			</li>
			<li class="pb-1">
				<a href="">WordPress Frameworks</a>
			</li>
			<li class="pb-1">
				<a href="">WordPress Plugins</a>
			</li>
			<li class="pb-1">
				<a href="">WordPress Starter Themes</a>
			</li>
			<li class="pb-1">
				<a href="">WordPress Themes</a>
			</li>
			<li>
				<a href="">WooCommerce Plugins</a>
			</li>
		</ul>
	</div>
</div>
</div>
<!-- footer navbar -->
<div class="container-fluid bg-secondary">
	<div class="footer-end d-flex justify-content-center">
		<a href="https://speckyboy.com/about/">About</a>
		<a href="https://speckyboy.com/contact/">Contact</a>
		<a href="https://speckyboy.com/advertise-with-us/">Advertise</a>
		<a href="https://speckyboy.com/contribute-an-article/">Contribute</a>
		<a href="https://speckyboy.com/privacy-policy/">Privacy</a>
	</div>
	<!-- footer-end -->
	<div class="footer-end d-flex justify-content-center text-white">
		Copyright © 2018 Speckyboy.com
	</div>
</div>
			<!-- container-fluid -->
	
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'speckyboy' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'speckyboy' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'speckyboy' ), 'speckyboy', '<a href="http://sumit.com">sumit wagh</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
