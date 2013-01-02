<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/ie.css">
		<![endif]-->
		
		<!--[if IE 7]>
		<style type="text/css">
			.search-query { width: 120px !important; padding-top: 0 !important; padding-bottom: 0 !important; }
			#searchsubmit { padding: 5px 12px 4px 12px !important; }
		</style>
		<![endif]-->
		
		<!--[if IE 8]>
		<style type="text/css">
			.search-query { padding: 0 !important; }
			#searchsubmit { padding: 5px 12px !important; }
		</style>
		<![endif]-->

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container wrapper">
			<nav class="nav-main hidden-phone">
				<a href="http://brianjacobsgolf.com" class="brand"></a>
				
				<h1><a href="<?php bloginfo('wpurl');?>"><?php bloginfo('name');?></a></h1>
			</nav>

			<header class="hidden-phone">
				<div class="row overlay">
					<div class="span5 offset1">
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<h1 class="italic">Take your game inside the ropes...</h1>
					</div>
				</div>
			</header>

			<nav class="nav-sub">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/brianjacobsgolf" target="_blank" class="facebook-icon"></a></li>
					<li><a href="http://twitter.com/BrianJacobsgolf" target="_blank" class="twitter-icon"></a></li>
				</ul>

				<?php //wp_nav_menu( array('menu' => 'Main Menu' )); ?>
				<ul>
					<li class="header">Categories:</li>
					<?php wp_list_categories(array('title_li' => '', 'exclude' => '1'));?>
				</ul>
			</nav>