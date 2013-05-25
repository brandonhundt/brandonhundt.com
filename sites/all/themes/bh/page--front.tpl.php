<div id="container" class="clearfix">

<div id="hwrap" class="clearfix">
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>

  <header id="header" role="banner" class="limiter">
    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="site-name-slogan">
        <?php if ($site_name): ?>
          <h2 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
          </h2>
        <?php endif; ?>
        <h3>Web Design &amp; Development<br /><span>Freelance Portfolio</span> </h3>
      </hgroup>
    <?php endif; ?>

    <?php print render($page['header']); ?>

   
    <?php if ($main_menu || $secondary_menu || !empty($page['navigation'])): ?>
      <nav id="navigation" role="navigation" class="limiter">
        <?php if (!empty($page['navigation'])): ?> <!--if block in navigation region, override $main_menu and $secondary_menu-->
          <?php print render($page['navigation']); ?>
        <?php endif; ?>
        <?php if (empty($page['navigation'])): ?>
		  <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
		  <?php print theme('links__system_secondary_menu', array(
            'links' => $secondary_menu,
            'attributes' => array(
              'id' => 'secondary-menu',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Secondary menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        <?php endif; ?>
      </nav> <!-- /#navigation -->
      <a class="head-link">Contact</a>
    <?php endif; ?>
    </header> <!-- /#header -->
</div>
<div id="fwrap" class="clearfix">
	<div class="lines"><div class="bars">
		<div id="featured" class="limiter">
		<div class="text">	
			<h2>Well Traveled <span>Design</span></h2>
			<p>Based in Minneapolis</p>
			<p><a href="#">Learn More ></a></p>		
		</div>
	</div>
	<div id="gmap">
		<iframe width="2000" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=206344122255366932544.0004b73e8e27b2b4e00f2&amp;ie=UTF8&amp;t=m&amp;vpsrc=6&amp;ll=43.100983,-81.166992&amp;spn=5.61489,43.945313&amp;z=6&amp;output=embed"></iframe>
	</div>

	</div>
	</div>
</div>
<div id="cwrap" class="clearfix">
  <div class="limiter">
    <section id="main" role="main">
    <?php /*print $messages;*/ ?>
    <h1>Freelance Web Design</h1>
    <a href="/web-design" class="more-link">See More ></a>
    <?php print render($page['content']); ?>
  </section> <!-- /#main --> 
  
  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_second']); ?>
    </aside>  <!-- /#sidebar-second -->
  <?php endif; ?>
  </div>
</div>

<div id="footwrap" class="clearfix">
  <footer id="footer" class="limiter" role="contentinfo">
    <?php print render($page['footer']) ?>
    <?php print $feed_icons ?>
  </footer> <!-- /#footer -->
</div>
</div> <!-- /#container -->
