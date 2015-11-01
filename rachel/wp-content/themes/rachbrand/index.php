<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

   			<div class="content">
	<?php if (have_posts()) : ?>
    		<div id="left" class="green rachel">
                        <div class="intro Rachel">
                	<img src="/wp-content/themes/rachbrand/img/R2a.jpg" alt="Rachel" />
                    <h2><span>re:</span>Rachel</h2>
                    <p>Rachel is a full-time Resident Director at a Minnesota college. This means we are living amongst students on a daily basis.</p> <p><a href="/about">Learn More &gt;</a></p>
                </div><!--/intro-->
	 <?php $my_query = new WP_Query('category_name=Rachel&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
    		
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>-left">
				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<p class="postmetadata">Posted <?php the_time('M/j/Y') ?> <?php the_tags('Tags: ', ', ', '<br />'); ?>  in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
			</div>
           
  <?php endwhile; ?>
  		</div>
		<div id="right" class="brandon red">
                        <div class="intro Brandon">
                	<img src="/wp-content/themes/rachbrand/img/B.jpg" alt="Brandon" />
                    <h2><span>Being</span>Brandon</h2>
                    <p>Brandon is a full-time Web Designer and Developer based in the Twin Cities of Minnesota that enjoys blogging, but not writing this description.</p>
                    <p><a href="/about">Learn More &gt;</a></p>
                </div><!--/intro-->
<?php $my_query = new WP_Query('category_name=Brandon&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>-right">
				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<p class="postmetadata">Posted <?php the_time('M/j/Y') ?> <?php the_tags('Tags: ', ', ', '<br />'); ?>  in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
			</div>
		<?php endwhile; ?>
			</div>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>