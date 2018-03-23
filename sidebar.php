<!-- News letter Section -->
<div class="news-letter d-inline-block">
			<div class="text-white bg-primary">
				<h6 class="text-center text-uppercase">Weekly Newsletter</h6>
			</div>
			<div class="news-body align-items-center">
				<p class="p-3 news-body m-0">
					Join <b>40,000+ subscribers</b> and get the latest web design resources and tips directly in your inbox every Sunday morning.
				</p>
			</div>
			<div class="text-box px-3">
					<input type="text" class="email m-0 bg-white" placeholder="email@address.com">
					<button class="text-uppercase button bg-primary text-white">Subscribe</button>
			</div>		
	</div>
		<!-- End News Letter -->
	<!-- Popular News letter Section -->
	<div class="news-popular d-inline-block">
		<div class="text-white bg-primary">
			<h6 class="text-center text-uppercase">Currently Popular</h6>
		</div>
		<ul class="list-unstyled">
				<li class="media mx-3 py-3 border-bottom">
					<img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/thumb-1.jpg" alt="Generic placeholder image" height="60px" width="60px">
					<div class="media-body">
					<h5 class="mt-0 mb-1">
					<a class="text-primary" href="http://">10 Bootstrap 4 Code Snippets</a></h5>
					<py class="date m-0">January 23, 2018</py>
					</div> 
				</li>
				<li class="media mx-3 py-3 border-bottom">
					<img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/thumb-2.jpg" alt="Generic placeholder image" height="60px" width="60px">
					<div class="media-body">
					<h5 class="mt-0 mb-1"><a class="text-primary" href="http://">10 JavaScript and CSS Tools to Enhance Your Forms</a></h5>
					<p class="date m-0">January 23, 2018</p>
					</div>
				</li>
				<li class="media mx-3 py-3 border-bottom">
					<img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/thumb-3.jpg" alt="Generic placeholder image" height="60px" width="60px">
					<div class="media-body">
					<h5 class="mt-0 mb-1"><a class="text-primary" href="http://">10 JavaScript and CSS Tools to Enhance Your Forms</a></h5>
					<p class="date m-0">January 23, 2018</p>
					</div>
				</li>
				<li class="media mx-3 py-3 border-bottom">
					<img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/thumb-4.jpg" alt="Generic placeholder image" height="60px" width="60px">
					<div class="media-body">
					<h5 class="mt-0 mb-1"><a class="text-primary" href="http://">10 JavaScript and CSS Tools to Enhance Your Forms</a></h5>
					<p class="date m-0">January 23, 2018</p>
					</div>
				</li>
				<li class="media mx-3 py-3">
					<img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/thumb-3.jpg" alt="Generic placeholder image" height="60px" width="60px">
					<div class="media-body">
					<h5 class="mt-0 mb-1"><a class="text-primary" href="http://">10 JavaScript and CSS Tools to Enhance Your Forms</a></h5>
					<p class="date m-0">January 23, 2018</p>
					</div>
				</li>
				</ul>
		</div> 	<!-- End Popular News -->	
		<!-- blank box -->
		<div class="news-letter d-inline-block">
				<div class="news-body align-items-center">
				
				</div>	
		</div> 	<!-- blank box end  -->		
		<!-- ad banner-->
		<div class="ad d-inline-block">
				<div class="text-white bg-primary">
					<h6 class="text-center text-uppercase">Hosted By kinsta</h6>
					<a href="http://"><img src="<?php echo get_template_directory_uri(); ?>/img/kinsta.jpg" alt="" height="63px"></a>
				</div>
							<?php
							/**
							 * The sidebar containing the main widget area
							 *
							 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
							 *
							 * @package Speckyboy_sass
							 */

							if ( ! is_active_sidebar( 'sidebar-1' ) ) {
								return;
							}
							?>

							<aside id="secondary" class="widget-area">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</aside><!-- #secondary -->
		</div>
</div> <!-- side bar end --> 
