<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />
	<?php get_template_part('_includes/iOS', 'icons') ?>



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<?php wp_head() ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div id="fh5co-logo"><a href="index.html"><?php bloginfo('name') ?></a></div>
				</div>
				<div class="col-xs-9 text-right menu-1">
					<?php if(has_nav_menu('header_menu')) {  ?>
						<?php wp_nav_menu(array(
							'theme_location' => 'header-menu', 
							'container'=> null)) ?>
					<?php  } ?>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Start Your Journey</h1>
							<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
							<div class="row">
								<form class="form-inline" id="fh5co-header-subscribe">
									<div class="col-md-8 col-md-offset-2">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-default">Join Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>