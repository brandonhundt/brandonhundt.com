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
	</div><!-- #main -->
    </div>
    </div>
	<div id="fwrap" class="container">
	<div id="footer" class="row">
		<div id="colophon" class="ninecol">
			<div id="site-info">
                <p> &copy; <?php print date("Y")?> <a href="/">rachelbrandon.com</a> - All Rights Reserved.  Site Designed and Developed by <a href="http://www.brandonhundt.com">Brandon Hundt</a> <br />Thank you visiting. If you have any suggestions to make this a better blog <a href="/contact">please contact us.</a></p>
			</div><!-- #site-info -->
         </div><!-- #colophon -->
         <div class="threecol last">
         	<ul> 
             <li><a href="/feed/" title="Syndicate this site using RSS 2.0">Subscribe</a></li>
            </ul>
		</div>
	</div><!-- #footer -->
</div>
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
