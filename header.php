<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Speckyboy_sass
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body class="bg-body" <?php body_class(); ?>>
<div id="page" class="site">
<!-- navbar area -->
<header id="masthead" class="site-header">	
			<nav class="bg-primary">
				<ul class="nav pl-2">
					<li class="nav-item dropdown left-border" id="dropdownMenuButton">
						<a class="nav-link text-white" href="#">
							<span class="dashicons dashicons-menu pt-1"></span>
							<span class="d-none d-sm-inline-block">Categories</span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/css">CSS</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/fonts">Fonts</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/freelance">Freelance</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/icons">Icons</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/graphic">Graphic</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/logodesign">Logo Design</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/javascript">Javascript</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/jquery">JQuery</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/marketing">Marketing</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/mobiledesign">Mobile Design</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/photography">Phtography</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/photoshop">Photoshop</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/uidesignu">UI Design</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/uxdesign">UX Design</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/webdesign">Web Design</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/webinspiration">Web Inspiration</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/wireframe">Wireframe</a></li>
							<li><a class="dropdown-item text-white" href="https://wordpress.test/category/wordpress">Wordpress</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link text-white" href="#">
							<span class="dashicons dashicons-search pt-1"></span>
							<span class="d-none d-sm-inline-block">Search</span>
						</a>
						<ul class="dropdown-menu">
							<div class="menu-box p-3">
								<form method="get" action="<?php echo esc_url(home_url('/')); ?>" role="search">
									<input type="text" name="s" placeholder="Enter your search terms" required="" value="<?php the_search_query(); ?>">
									<input type="submit" value="Search" id="searchsubmit" class="text-uppercase btn bg-primary text-white px-4">
								</form>
							</div> 
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white d-none d-sm-inline-block" href="#">News</a>
					</li>
					<ul class="nav ml-auto flex-row-reverse pr-3">
						<li class="nav-item">
							<a class="nav-link text-white rss color" target="_blank" href="https://speckyboy.com/feed/">
								<span class="dashicons dashicons-rss"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white facebook" target="_blank" href="https://www.facebook.com/SpeckyboyDesignMagazine">
								<span class="dashicons dashicons-facebook-alt"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white googleplus" target="_blank" href="https://plus.google.com/104643859933913409798/">
								<span class="dashicons dashicons-googleplus"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white twitter" target="_blank" href="https://twitter.com/speckyboy">
								<span class="dashicons dashicons-twitter"></span>
							</a>
						</li>
					</ul>
				</ul>
			</nav>
<!-- logo section area -->
<div class="container-fluid">
		<div class="logo-section mt-5 pb-5 border-bottom">
			<div class="logo-area">
				<div class="row ">
					<div class="col-sm-4 d-flex align-items-center">
						<a href="http://bootstrap.test/" class="img-fluid">
							<?php the_custom_logo(); ?>
						</a> 
					</div>
					<div class="col-sm-8 pl-5 d-none d-sm-block">
						<a href="https://speckyboy.com/visit/fullstory-free-forever/" class="pl-5">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/fullstory.png" alt="image" height="90px" width="728px">
						</a>
					</div>
				</div>
			</div>
		</div> <!-- logo-section end -->
</header><!-- #masthead -->
