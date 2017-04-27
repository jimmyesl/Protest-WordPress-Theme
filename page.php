<?php
/**
 * This is the default page template
 *
 * This is the template for the frong page
 *
 */

get_header(); ?>

<body id="post-page">
<div class="wrap">
	<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
    <!--The Loop -->
    <div class="container">
     <div class="row">
       <div class="col-md-9">
            <?php while(have_posts()) : the_post(); ?>
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <hr>
               <p><?php the_content(); ?></p>
           </div>
    <?php endwhile; wp_reset_query(); ?>
     <div class="col-md-3">
        <?php get_sidebar(); ?>
       </div>
    </div>
    </div>
    </main><!-- #main -->
   </div><!-- #primary -->
 </div>
 
  <!-- .wrap -->


<?php get_footer();
