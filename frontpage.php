<?php
/**
 * Template Name: Front Page Template
 *
 * This is the template for the frong page
 *
 */

get_header(); ?>


<!--Home Widget section to add slide or hero image-->
  <div class="home-hero">
    <?php if(is_active_sidebar('home-slide') ) dynamic_sidebar( 'home-slide' ); ?>
  </div>

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




   
    
    <?php get_footer(); ?>




    
    
    
    
    
    