<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 		
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
		

		<?php 
			$mail = carbon_get_theme_option('crb_mail_link');
			$fb = carbon_get_theme_option('crb_facebook_link');
			$instagram = carbon_get_theme_option('crb_instagram_link');
			$logo = carbon_get_theme_option('crb_logo_image');
		?>
		<header role="banner">	
			<div class="container-fluid">
				<div class="menu"> 
					<div class="menu-bar">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</div>
				</div>				
			</div>
			<nav id="navigation"> 
				<img class="navigation-logo" src="<?php echo $logo; ?>" alt="" />
				<div class="cross-wrap">
					<div class="cross"> 
						<span>&nbsp;</span>
						<span>&nbsp;</span>				
					</div>	
				</div>				
				<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
			</nav>
			<div class="social">
				<ul>
					<li><a href="<?php echo $mail; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					<li><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="<?php echo $fb; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</header> <!-- end header -->
		
		<div class="container">