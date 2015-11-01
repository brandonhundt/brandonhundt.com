<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"> 
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="/rachel/wp-content/themes/rb2011/css/1140.css" type="text/css" media="screen" />
<!--[if lte IE 9]>
	<link rel="stylesheet" href="/rachel/wp-content/themes/rb2011/css/ie.css" type="text/css" media="screen" />
<![endif]-->
<link rel="stylesheet" href="/rachel/wp-content/themes/rb2011/css/smallerscreen.css" media="only screen and (max-width: 1023px)" />
<link rel="stylesheet" href="/rachel/wp-content/themes/rb2011/css/mobile.css" media="handheld, only screen and (max-width: 767px)" />
<link rel="stylesheet" href="/rachel/wp-content/themes/rb2011/css/fonts/stylesheet.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/rachel/wp-content/themes/rb2011/css/fonts/font-awesome.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/rachel/wp-content/themes/rb2011/css/screen.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<header id="h-wrap" class="hfeed container">
	<section id="header" class="row">
			<h2><a href="/"><span>Rachel</span>Brandon</a></h2>
        	<!--<div id="site-description"><span>His <span class="green">Wife</span></span> | <span>Her <span class="red">Husband</span></span> | <span>Their <span class="white">blog</span></span></div>-->
    </section><!-- #header -->
</header>
