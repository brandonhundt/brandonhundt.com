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
				<?php if (have_posts()) : ?>
                            <div id="left" class="green rachel sixcol">
                                        <div class="intro rachel">
                                     <img src="/wp-content/themes/rb2011/images/img_rachel-home.jpg" alt="Rachel" />   
                                    <h2><span>re:</span>rachel</h2>
                                    <p>Rachel now finds herself 'in between' professional gigs. In the meantime, she's working on a graduate degree and is figuring out first hand what being a stay at home parent means...<br /><a href="/category/rachel">See Her Archive<i class="icon-chevron-right"></i></a></p> 
                                   <!-- <p class="right"><a href="/about">Learn More &gt;</a></p>-->
                                </div><!--/intro-->
                     <?php $my_query = new WP_Query('category_name=Rachel&posts_per_page=3');
                  while ($my_query->have_posts()) : $my_query->the_post();
                  $do_not_duplicate = $post->ID; ?>
                            
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>-left">
  								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail();?></a>	
                                <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                <div class="entry">
                                    <?php the_content('Continue Reading &raquo;'); ?>
                                </div>
                                <p class="postmetadata"><span>Posted on:</span> <?php the_time('M/j/Y') ?> | <?php the_tags('<span>Tags:</span> ', ', ', ''); ?> | <span>Category(s):</span> <?php the_category(', ') ?> | <?php comments_popup_link('0', '1', '%'); ?><i class="icon-comment"></i> <?php edit_post_link('Edit', '', ' | '); ?> </p>
                            </div>
                           
                  <?php endwhile; ?>
                        </div>

                        <div id="right" class="brandon red sixcol last">
                                        <div class="intro brandon">
                                        <img src="/wp-content/themes/rb2011/images/img_brandon-home.jpg" alt="Brandon" />   
                                    <h2><span>being</span>brandon</h2>
                                    <p>Brandon is a full-time Web Designer and Developer turned Project Manager based in the Twin Cities. He enjoys blogging, but not writing this description. <br />
                                    <a href="/category/brandon">See His Archive<i class="icon-chevron-right"></i></a></p>
                                </div><!--/intro-->
                <?php $my_query = new WP_Query('category_name=Brandon&posts_per_page=3');
                  while ($my_query->have_posts()) : $my_query->the_post();
                  $do_not_duplicate = $post->ID; ?>
                    
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>-right">
   								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail();?></a>
                                <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                <div class="entry">
                                    <?php the_content('Continue Reading &raquo;'); ?>
                                </div>
                                <p class="postmetadata"><span>Posted on:</span> <?php the_time('M/j/Y') ?> | <?php the_tags('<span>Tags:</span> ', ', ', ''); ?> | <span>Category(s):</span> <?php the_category(', ') ?> | <?php comments_popup_link('0', '1', '%'); ?><i class="icon-comment"></i><?php edit_post_link('Edit', '', ' | '); ?> </p>
                            </div>
                        <?php endwhile; ?>
                            </div>
                
                    <?php else : ?>
                
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                        <?php get_search_form(); ?>
                
                    <?php endif; ?>
		</div><!-- #main -->
        </div>
        </div>
        </div>
        <div id="xtra" class="container">
        	<div class="row">
        		<?php get_sidebar( 'footer' ); ?> 
                <div>  
<?php get_footer(); ?>
