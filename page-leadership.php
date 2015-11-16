<?php 
/* 
Template Name: Leadership
*/
?>
<?php get_template_part('parts/header'); ?>
<div class="page-banner" style="background-image:url('<?php echo CFS()->get('interior_banner'); ?>');">
	<div class="page-banner-stripe">
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
	
	</div><!-- /banner -->

<div class="page-banner-stripe-mobile">
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
          
          <?php
          $fields = $cfs->get('person');

          foreach ($fields as $field) {

          ?>
          
          
          <strong><a><img style="float: left; margin: 0 15px 5px 0;" src="<?php echo $field['photo']?>" alt="<?php echo $field['name']?>" width="160" height="197" /></a><?php echo $field['name']?></strong>

<P><?php echo $field['bio']?></P>
<div class="clearfix"></div>
<hr>

          
          
          
          <?php     
          }

          ?>
          
       
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
