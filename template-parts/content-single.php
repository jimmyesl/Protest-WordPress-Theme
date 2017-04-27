<?php
/**
 * Template part for displaying single posts.
 *
 * @package mybootstrap
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <h3 class="byline">By <?php echo the_author_meta('first_name'); ?> <?php echo the_author_meta('last_name'); ?></h3>
                <?php the_post_thumbnail(); ?> 
	        <div class="entry-meta">
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mybootstrap' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

