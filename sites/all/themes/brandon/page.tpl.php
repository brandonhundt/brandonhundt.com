  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>
<div id="hwrap">
  <?php print render($page['pre_header']); ?>
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

<div id="cwrap">
<div class="container">  
 <?php if ($page['highlighted']): ?>
	<div class="sixteen columns alpha omega">
		   <?php print render($page['highlighted']); ?>
    </div>
 <?php endif; ?>

  <section id="main" role="main" class="twelve columns alpha">
        <a id="main-content"></a>
            <?php print $messages; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  
  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar" role="complementary" class="sidebar three columns offset-by-one omega">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>
  
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