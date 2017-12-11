<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mbswp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!--Font-->
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp" rel="stylesheet">

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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mbswp' ); ?></a>

	

	<div id="content" class="site-content">
