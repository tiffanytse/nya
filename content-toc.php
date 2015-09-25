<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <div class="wrapper">
      <?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
      <?php endif; ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      </div>
    </header>
    <div class="wrapper">
      <aside class="toc-container">
        <?php get_sidebar(); ?>
      </aside>
  		<div class="entry-content toc-content">
  			<?php the_content(); ?>
  			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
  		</div><!-- .entry-content -->
  		<footer class="entry-meta">
  			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
  		</footer><!-- .entry-meta -->
		</div>
	</article><!-- #post -->
