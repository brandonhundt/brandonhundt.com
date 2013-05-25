  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>
<div id="hwrap">
	<div class="container">    
		<header id="header" class="sixteen columns alpha omega" role="banner">		
        	<div class="six columns alpha">
        		<h2 id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><i class="icon-map-marker"></i>Brandon <span>Hundt</span></a>
        		</h2>
        	</div>  
        <nav id="navigation" class="ten columns omega" role="navigation">
      		<ul>
	      		<li><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Home</a></li>
	      		<li><a href="/portfolio" title="View Portfolio">Portfolio</a></li>	
	      		<li><a href="/about" title="About Brandon">About</a></li>
	      		<li><a href="/contact" title="Contact Brandon">Contact</a></li>
	      	</ul>
	      </nav> <!-- /#navigation -->
  </header> <!-- /#header -->	
</div><!-- /#container -->
</div><!-- /#hwrap -->
<div id="gmap">
		<div class="map">
		 <?php print render($page['pre_header']); ?> 
		</div>
		<div class="container">
			<div class="sixteen columns alpha omega">	
				<h3><span>Well Traveled</span> Design</h3>
				<div class="protector">
					<p class="ribbon"><strong class="ribbon-content"><i class="icon-asterisk"></i>Based in MPLS <i class="icon-asterisk"></i></strong></p>
				</div>
			</div>
		</div>

</div>

<div id="cwrap">
<div class="container">  

  <section id="main" role="main" class="sixteen columns alpha omega">
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  
</div><!-- /#container -->
</div><!-- /#cwrap -->

<div id="fwrap">
<div class="container">  
  
  <footer id="footer" role="contentinfo" class="sixteen columns alpha omega">

   <div class="eight columns alpha"><p>&copy;<?php print date("Y")?> Brandon Hundt. All Rights Reserved.</p></div>
    <div class="eight columns omega"> <?php print render($page['footer']) ?></div>

  </footer> <!-- /#footer -->

</div> <!-- /#container -->
</div> <!-- /#fwrap -->