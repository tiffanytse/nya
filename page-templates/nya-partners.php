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
      <header class="entry-header">
        <div class="wrapper">
  			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
  			<?php endif; ?>
  			<h1 class="entry-title"><?php the_title(); ?></h1>
  			</div>
  		</header>		
			<div class="partner-items wrapper">
					<?php $loop = new WP_Query( array( 'post_type' => 'partners', 'posts_per_page' => 10 ) ); ?>

          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php the_post_thumbnail(); ?>
          <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

          	<div class="entry-content">
          		<?php the_content(); ?>
          	</div>
          <?php endwhile; ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>