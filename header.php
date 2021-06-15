<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<div class="header"> 
		<div class="top-header"> 
			<div class="mid"> 
				<div class="top-left"> 
					<ul>
						<li><a href="#">Call : 019665554444</a></li>
						<li><a href="#">|</a></li>
						<li><a href="#">Email : arifzaman@gmail</a></li>
					</ul>
				</div>
				<div class="top-right"> 
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mid"> 
			<div class="logo"> 
				<a href="#"><?php the_custom_logo(); ?></a>
			</div>
			<div class="menu"> 

				<?php 

				  wp_nav_menu([

				  	'theme_location'     => 'main_menu',
				  	'container_class'    =>  '',
				  	'container_id'       =>  '',
				  	'menu_class'         =>  '',
				  	'menu_id'            =>  '',
 

				  ]);



				 ?>
     


				<!---<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Contact</a></li>
				</ul>--->
			</div>
		</div>
	</div>