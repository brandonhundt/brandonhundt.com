<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/rachbrand/css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/rachbrand/css/screen.css" />
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" media="screen" href="/wp-content/themes/rachbrand/css/ie7.css" />
    <![endif]-->

 <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<script type="text/javascript" src="/wp-content/themes/rachbrand/js/cufon.js"></script>
<script type="text/javascript" src="/wp-content/themes/rachbrand/js/TwCenturyCondensed_400.font.js"></script>
<script type="text/javascript">
			Cufon.replace ('div#right h2 a');
			Cufon.replace ('div#left h2 a');
			Cufon.replace ('div#menu ul li h2');
			Cufon.replace ('div#footer h3');
			Cufon.replace ('div.content h1');
			Cufon.replace ('div.content h2');
			Cufon.replace ('div.content h3');
			Cufon.replace ('div.content h4');
			Cufon.replace ('div.content h5');
			Cufon.replace ('div.content h6');
			Cufon.replace ('div#left div.intro h2');
			Cufon.replace ('div#right div.intro h2');
			Cufon.replace ('div#main h1');
			Cufon.replace ('div#main h2');
			Cufon.replace ('div#main h3');
			Cufon.replace ('div#main h4');
			Cufon.replace ('div#main h5');
			Cufon.replace ('div#main h6');
            Cufon.replace ('h1');
			Cufon.replace ('h2');
			Cufon.replace ('h3');
			Cufon.replace ('h4');
			Cufon.replace ('h5');
			Cufon.replace ('h6');
        </script>
        <script type="text/javascript" src="http://w.sharethis.com/button/sharethis.js#publisher=a285c291-7a1b-4418-a944-08b4e561a7cc&amp;type=website&amp;button=false"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="bkgd" class="<?php the_author(); ?>">
    <div id="wrap">
    <!--[if IE 6]>
    <div class="conditional comment">
		<h2>WARNING!</h2><p>You are using IE7. <a href="/warning-do-not-use-internet-explorer/">This web browser is out of date.</a> You should upgrade to a Modern web browser to enjoy this website, and others, as intended.</p>
        <ul>
        	<li>Here is a list of recent browsers</li>
        	<li>Not Recommended: <a href="http://www.microsoft.com/windows/internet-explorer/worldwide-sites.aspx">IE 8</a></li>
            <li>Recommended: <a href="http://www.mozilla.com/en-US/products/download.html">Firefox</a></li>
            <li>Recommended: <a href="http://www.google.com/chrome">Google Chrome</a></li>
        </ul>
    </div>
<![endif]-->
<!--[if IE 7]>
	    <div class="conditional comment">
		<h2>WARNING!</h2><p>You are using IE7. <a href="/warning-do-not-use-internet-explorer/">This web browser is out of date.</a> You should upgrade to a Modern web browser to enjoy this website, and others, as intended.</p>
        <ul>
        	<li>Here is a list of recent browsers</li>
        	<li>Not Recommended: <a href="http://www.microsoft.com/windows/internet-explorer/worldwide-sites.aspx">IE 8</a></li>
            <li>Recommended: <a href="http://www.mozilla.com/en-US/products/download.html">Firefox</a></li>
            <li>Recommended: <a href="http://www.google.com/chrome">Google Chrome</a></li>
        </ul>
    </div>
<![endif]-->

        <div id="logo">
            <h2><a href="/">RachelBrandon.com - His Wife, Her Husband, Their Blog</a></h2>
        </div><!--/logo-->
  <div id="header">
            <ul>
                <li><a class="first" href="/" title="Home">Home</a></li>
                <li><a class="second" href="/about" title="About Rachel">About Rachel</a></li>
                <li><a class="third" href="/about" title="About Brandon">About Brandon</a></li>
                <li><a class="fourth" href="/contact" title="Contact Us">Contact</a></li>
                <li><a class="fifth" href="/photos" title="View Photos">Photos</a></li>
                <li><a class="sixth" href="/video" title="View Video">Video</a></li>
                <li><a class="seventh" href="http://www.facebook.com/sharer.php?u=http://www.rachelbrandon.com&amp;=RachelBrandon.com: His Wife Her Husband Their Blog" title="Share on Facebook">Facebook</a></li>
                <li><a class="last" href="/feed" title="Subscribe to our Blog">RSS</a></li>
            </ul>
        </div><!--/header-->
