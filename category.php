<?php get_header() ?>
   

  <div class="well">
      <div class="container">
          <?php global $cat; ?>
          <h1 class="cat-title"><?php echo get_cat_name($cat); ?></h1>
          <h2><?php echo category_description($cat); $i=0 ?></h2>
          <hr>
          <div class="row">
               <?php while(have_posts()) : the_post(); ?>
                  <?php if($i % 4==0) { echo '<div class="clearfix visible-md visible-lg"></div>'; } ?>
                  <?php if($i % 2==0) { echo '<div class="clearfix visible-sm"></div>'; } ?>
                   <div class="col-sm-6 col-md-3 article">
                       <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                       <div class="thumbnail"><?php the_post_thumbnail(array(300,300))?></div>
                       <p><?php the_excerpt(); ?></p>
                   </div>
               <?php $i+=1; endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>
<?php get_footer() ?>

