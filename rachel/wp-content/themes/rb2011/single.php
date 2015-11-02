<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<section id="main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<header class="single-header">
					<?php
					if ( is_singular() && has_post_thumbnail( $post->ID )) :
					   $thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
					   $thumb_url = wp_get_attachment_url($thumb_id); ?>
					   	<div class="single-header-bg"></div>	
							<style type="text/css">
							.single-header-bg { 
							  background: url("<?php echo $thumb_url ;?>") no-repeat center center fixed #000; 
							  -webkit-background-size: cover;
							  -moz-background-size: cover;
							  -o-background-size: cover;
							  background-size: cover;
							  opacity: 0.5;
							  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
							  position: fixed;
							  width: 100%;
							  height: 100%;
							  top: 0;
							  left: 0;
							  z-index: -1;
							}
						</style>
					<?php endif; ?>
					<div class="single-header-content single-container">
						<div class="v-center">
							<?php the_category( $separator, $parents, $post_id ); ?> 
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<div class="metadata"><?php twentyten_posted_on(); ?> </div>
						</div>
					</div>
				</header>

				<div class="entry-content">
					<div class="single-container">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					<p class="post-meta"><?php twentyten_posted_in(); ?> <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?></p>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

			<div class="comments">
				<div class="single-container">
					<?php comments_template( '', true ); ?>
				</div>
			</div>		

			<?php endwhile; // end of the loop. ?>
		</section><!-- #main -->
<?php get_footer(); ?>
