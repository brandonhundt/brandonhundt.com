<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query. 
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Ten
* @since Twenty Ten 1.0
*/

get_header(); ?>

<div id="main" class="home">
  <div class="container">
  <?php if (have_posts()) : ?>
    <div id="left" class="brandon red sixcol">
      <div class="intro brandon">
        <img src="/rachel/wp-content/themes/rb2011/images/img_brandon-home.jpg" alt="Brandon" />   
        <h2><span>Being</span> Brandon</h2>
        <p>You'll typically find Brandon at the intersection of <a href="/category/design">Design</a>, <a href="/category/geography">Geography</a>, and <a href="/category/sports">Sports</a> (ahem <a href="/tags/flags">Flags</a>). Brandon works for Public Radio International and has <a href="http://www.pri.org/people/brandon-hundt">contributed to PRI.org</a>.<br />
        <a href="/category/brandon">See His Archive<i class="icon-chevron-right"></i></a></p>
      </div><!--/intro-->
      <?php $my_query = new WP_Query('category_name=Brandon&posts_per_page=5');
        while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID; ?>
      <article class="featured-post" id="post-<?php the_ID(); ?>-left">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_post_thumbnail();?>
        </a>	
        <div class="featured-post-content">
          <div class="post-categories"><?php the_category('  ') ?></div>
          <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="metadata"><?php the_time('M j, Y') ?></div>
        </div>
      </article>
      <?php endwhile; ?>
    </div>
    <div id="right" class="green rachel sixcol last">
      <div class="intro rachel">
        <img src="/rachel/wp-content/themes/rb2011/images/img_rachel-home.jpg" alt="Rachel" />   
        <h2><span>Re:</span>Rachel</h2>
        <p>Rachel now finds herself 'in between' professional gigs. In the meantime, she's completed a graduate degree and is figuring out first hand what being a stay at home parent means...<br /><a href="/category/rachel">See Her Archive<i class="icon-chevron-right"></i></a></p> 
      </div><!--/intro-->
      <?php $my_query = new WP_Query('category_name=Rachel&posts_per_page=5');
        while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID; ?>
      <article class="featured-post" id="post-<?php the_ID(); ?>-right">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_post_thumbnail();?>
        </a>  
        <div class="featured-post-content">
          <div class="post-categories"><?php the_category('  ') ?></div>
          <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="metadata"><?php the_time('M j, Y') ?></div>
        </div>
      </article>
      <?php endwhile; ?>
    </article>
  <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>
  <?php endif; ?>
  </div>
</div><!-- #main --> 
<?php get_footer(); ?>
