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
<link rel="stylesheet" href="/wp-content/themes/rb2011/css/1140.css" type="text/css" media="screen" />
<!--[if lte IE 9]>
	<link rel="stylesheet" href="/wp-content/themes/rb2011/css/ie.css" type="text/css" media="screen" />
<![endif]-->
<link rel="stylesheet" href="/wp-content/themes/rb2011/css/smallerscreen.css" media="only screen and (max-width: 1023px)" />
<link rel="stylesheet" href="/wp-content/themes/rb2011/css/mobile.css" media="handheld, only screen and (max-width: 767px)" />
<link rel="stylesheet" href="/wp-content/themes/rb2011/css/fonts/stylesheet.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/rb2011/css/fonts/font-awesome.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/rb2011/css/screen.css" type="text/css" media="screen" />
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
<div id="h-wrap" class="hfeed container">
	<div id="header" class="row">
        <div class="sixcol">
			<h2><a href="/">RachelBrandon.com</a></h2>
        	<div id="site-description"><span>His <span class="green">Wife</span></span> | <span>Her <span class="red">Husband</span></span> | <span>Their <span class="white">blog</span></span></div>
        </div>
        <div class="sixcol last">
<ul id="menu-primary-menu" class="menu">
<li id="menu-item-653" class="menu-item menu-item-type-custom menu-item-home menu-item-653"><a href="/" title="home"><i class="icon-home"></i></a></li>
<li id="menu-item-654" class="menu-item menu-item-type-post_type menu-item-654"><a href="/about" title="about"><i class="icon-info-sign"></i></a></li>
<li id="menu-item-657" class="menu-item menu-item-type-post_type menu-item-657"><a href="/video/" title="video"><i class="icon-facetime-video"></i></a></li>
<li id="menu-item-655" class="menu-item menu-item-type-post_type menu-item-655"><a href="/contact/" title="contact"><i class="icon-envelope-alt"></i></a></li>
</ul>
        </div>
    </div><!-- #header -->
</div>
<div id="c-contain">
<div id="c-contain-bot" class="container">
	<div id="cwrap" class="row">
