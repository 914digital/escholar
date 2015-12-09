<?php get_template_part('parts/header'); ?>
<div class="page-banner desktoponly" style="background-image:url('<?php echo CFS()->get('interior_banner'); ?>');">
	<div class="page-banner-stripe">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div><!-- /col-md- -->
				<div class="col-md-8">
					<h1><?php echo CFS()->get('banner_header'); ?></h1>
					<p><?php echo CFS()->get('banner_text'); ?> </p>
									</div><!-- /col-md- -->
				<div class="col-md-2"></div><!-- /col-md- -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /page-banner-stripe -->
	
	</div><!-- /banner -->

<div class="page-banner-stripe-mobile">
<img class="img-responsive" src="<?php echo CFS()->get('interior_banner'); ?>" alt="<?php the_title(); ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div><!-- /col-md- -->
				<div class="col-md-8">
					<h3><?php echo CFS()->get('banner_header'); ?></h3>
					<p><?php echo CFS()->get('banner_text'); ?> </p>
									</div><!-- /col-md- -->
				<div class="col-md-2"></div><!-- /col-md- -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /page-banner-stripe -->

		
<div class="main-content">
<div class="container">
  <div class="row">
      	      <div class="col-md-2"></div><!-- /col-md-2 -->
	      <div class="col-md-8">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        
         
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
