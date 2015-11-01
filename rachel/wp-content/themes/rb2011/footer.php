<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<footer id="fwrap" class="container">
	<section id="footer">
			<div id="site-info">
				<ul>
					<li><a href="/" title="Home">Home</i></a></li>
					<li><a href="/about" title="about">About</i></a></li>
					<li><a href="/contact/" title="contact">Contact</a></li>
				</ul>
        <p>&copy; <?php print date("Y")?> rachelbrandon.com - All Rights Reserved.</p>
			</div><!-- #site-info -->
	</section><!-- #footer -->
</footer>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-4857590-1";
urchinTracker();

</script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
