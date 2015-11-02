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
        <p>&copy; <?php print date("Y")?> RachelBrandon.com - All Rights Reserved.</p>
			</div><!-- #site-info -->
	</section><!-- #footer -->
</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4857590-1', 'auto');
  ga('send', 'pageview');

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
