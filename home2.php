
<?php
/**
 * Template Name: Home 2
 *
 * This is an alternative template for frontpage
 *
 */

get_header(); ?>


<?php include( get_template_directory() . '/includes/stage.php'); ?>


<!--Home Widget Sections to use your creativity-->
 <div class="home-section-1">
	<?php if( is_active_sidebar('home-1') ) dynamic_sidebar( 'home-1' ); ?>
   </div>

   <div class="home-section-2">
	<?php if( is_active_sidebar('home-2') ) dynamic_sidebar( 'home-2' ); ?>
   </div>

   <div class="home-section-3">
	<?php if( is_active_sidebar('home-3') ) dynamic_sidebar( 'home-3' ); ?>
   </div>



<!-- Main jumbotron for a primary marketing message or call to action 
  <?php query_posts('posts_per_page=4'); while(have_posts()) : the_post(); ?>
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-8">
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <p><?php the_excerpt(); ?></p>
        </div>
        <div class="col-md-4">
            <a href="<?php the_permalink(); ?>"><p class="img-circle"><?php the_post_thumbnail('archive-size'); ?></p></a>
       </div>
     </div>
    </div>
   <?php endwhile;  wp_reset_query(); ?>
   
   
   
    
    <?php get_footer(); ?>


