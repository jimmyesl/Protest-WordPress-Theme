<?php get_header(); ?>
<div id="post-post">
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8">
			<?php while ( have_posts() ) : the_post(); ?>
                          
                          <?php get_template_part( 'template-parts/content', 'single' ); ?>
        <?php endwhile; wp_reset_query(); ?>
     </div>
     <div class="col-xs-12 col-sm-4">
        <?php get_sidebar('sidebar-1'); ?>
    </div>
    </div>
<div class="blog-footer">
<?php get_footer(); ?>
</div>
</div>



