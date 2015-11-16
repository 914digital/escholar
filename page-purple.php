<?php
/*
Template Name: Purple Page
*/
?>
<?php get_template_part('parts/header'); ?>


		
<div class="main-content-full">
<div class="container">
  <div class="row">
      	      <div class="col-md-2"></div><!-- /col-md-2 -->
	      <div class="col-md-8">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        
         <h1><?php the_title(); ?></h1>
          <?php the_content()?>
       
        <?php endwhile; ?> 
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
	      </div><!-- .col-md-8 -->
	      <div class="col-md-2"></div><!-- /col-md-2 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /main-content -->

<?php get_template_part('parts/footer'); ?>
