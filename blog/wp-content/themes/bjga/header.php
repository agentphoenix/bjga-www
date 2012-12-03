<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container wrapper">
			<nav class="nav-main hidden-phone">
				<div class="brand"></div>
				
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