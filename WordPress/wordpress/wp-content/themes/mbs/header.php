<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MBS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=false">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!--Font-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		
	<!--Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		
	<!--Fading when scroll & Affix Nav Bar-->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fading.css" rel="stylesheet">
		
	<!--Scroll down angle-->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/scroll-down.css" rel="stylesheet">
	
	<?php wp_head(); ?>
		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<!--[endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mbs' ); ?></a>

	<!-- HEADER -->
		<!--Greeting Video with fading down function -->
		<header class="row begin" style="background-color:black">
			<video muted src="https://zuelligindustrial-my.sharepoint.com/personal/kulvaree_chankrachang_zuelligindustrial_com/_layouts/15/guestaccess.aspx?docid=0f6fa7a8c418d4003b6f0ced6cbf1d576&authkey=AXKFCkqBf42OT93JRA5vy6A" 
					type="video/mp4" autoplay loop class="inline mx-auto"
			></video>
			<img class="logowhite" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-white-transparent.png" alt="Mattia Baldi Studio"
				data-anchor-target=".begin"
				data-bottom-top="transform: translateY(0px); opacity: 1;"
				data-top-bottom="transform: translateY(250px); opacity: .2"
			></img>
			<!--Angle down anchor -->
			<section id="section01" class="demo" 
				style="position:relative; left:0; top:1px;"
			><a href="#section02"><span></span></a>
			</section>
		</header>
		<!-- END ============ header-->
		<!-- nav bar with fade up function fade-in fade-ani-->
        <div class="navbar-wrapper fade-in fade-ani" id="section02" data-spy="affix" data-offset-top="775" >
            <nav class="navbar navbar-light navbar-inverse" style="opacity:0.9;background-color:white" >
                <a class="navbar-brand" href="home.html" id="logoblack">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Mattia Baldi Studio"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
				
				<?php
					wp_nav_menu(array(
						'theme_location'	=> 'primary',
						'container'			=> 'nav',
						'container_class'	=> 'navbar-collapse collapse',
						'menu_class'		=> 'navbar navbar-light navbar-inverse'
						
					));
				?>
				
                </div>
            </nav>
		</div><!-- END ================== nav bar with fade up function -->