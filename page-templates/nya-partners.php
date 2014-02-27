<?php
/**
 * Template Name: NYA Partners Page Template
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <div class="wrapper">
      	<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
      	<?php endif; ?>
      	<h1 class="entry-title"><?php the_title(); ?></h1>
      	</div>
      </header>
      <div class="wrapper">

      	<div class="entry-content">    
      		<?php the_content(); ?>
      		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
      	</div><!-- .entry-content -->
      	<footer class="entry-meta">
      		<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
      	</footer><!-- .entry-meta -->
 	      <hr>
      </div>
		<?php endwhile; // end of the loop. ?>
 
  		
  		
			<div class="partner-items wrapper">
					<?php $loop = new WP_Query( array( 'post_type' => 'partners', 'posts_per_page' => 10 ) ); ?>

          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="item"><?php the_post_thumbnail('thumbnail'); ?>
          <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

          	<div class="entry-content">
          		<?php the_content(); ?>
          	</div>
          </div>
          <?php endwhile; ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>