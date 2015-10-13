

<?php get_template_part('parts/header'); ?>

<div class="banner" style="background-image:url('<?php echo CFS()->get('banner_image'); ?>');">
	<div class="banner-stripe">
		<div class="container">
			<div class="row">
    <div class="col-md-4">
	    <h3><?php echo CFS()->get('banner_stripe_header_1'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_1'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_1'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_1'); ?></a>
    </div><!-- /col-md-4 -->
     <div class="col-md-4">
	        <h3><?php echo CFS()->get('banner_stripe_header_2'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_2'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_2'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_2'); ?></a>
     </div><!-- /col-md-4 -->
      <div class="col-md-4">
	        <h3><?php echo CFS()->get('banner_stripe_header_3'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_3'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_3'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_3'); ?></a>
      </div><!-- /col-md-4 -->
</div><!-- /.row -->
</div><!-- /.container -->
	</div><!-- /banner-stripe -->

<div class="container">
  <div class="row">

    <div class="col-md-6">
     </div><!-- /.col-md-6 -->
     
    
     <div class="col-md-6">
	      <div class="banner-text">
	     <h2><?php echo CFS()->get('banner_text_header'); ?></h2>
	     <p><?php echo CFS()->get('banner_text_copy'); ?>
	     </p>
	     <a class="btn" href="<?php echo CFS()->get('banner_text_button_link'); ?>"><?php echo CFS()->get('banner_text_button_copy'); ?></a>
	     </div><!-- /banner-text -->
     </div><!-- /.col-md-6 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /banner -->

<div class="banner-stripe-mobile">
		<div class="container">
			<div class="row">
    <div class="col-md-4">
	    <h3><?php echo CFS()->get('banner_stripe_header_1'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_1'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_1'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_1'); ?></a>
    </div><!-- /col-md-4 -->
    <div class="mdivide20"></div><!-- /mdivide20 -->
    <div class="col-md-4">
	     <h3><?php echo CFS()->get('banner_stripe_header_2'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_2'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_2'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_2'); ?></a>
     </div><!-- /col-md-4 -->
      <div class="mdivide20"></div><!-- /mdivide20 -->
       <div class="col-md-4">
	       <h3><?php echo CFS()->get('banner_stripe_header_3'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_3'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_3'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_3'); ?></a>

      </div><!-- /col-md-4 -->
</div><!-- /.row -->
</div><!-- /.container -->
	</div><!-- /banner-stripe-mobile -->
	
	

<div class="wh-stripe">
		<div class="container">
			<div class="row">
    <div class="col-md-6">
	    <h4><?php echo CFS()->get('row_1_header'); ?></h4>
	    <p><?php echo CFS()->get('row_1_text'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('row_1_link'); ?>"><?php echo CFS()->get('row_1_button_copy'); ?></a>
    </div><!-- /col-md-6 -->
     <div class="mdivide20"></div><!-- /mdivide20 -->
    <div class="col-md-6"><img src="<?php echo CFS()->get('row_1_image'); ?>"></div><!-- /col-md-6 -->
 </div><!-- /.row -->
 </div><!-- /.container -->
</div><!-- /wh-stripe -->

<div class="gr-stripe">
	<div class="container">
			<div class="row">
    <div class="col-md-6"><img src="<?php echo CFS()->get('row_2_image'); ?>"></div>
     <div class="mdivide20"></div><!-- /mdivide20 -->
     <div class="col-md-6"><h4><?php echo CFS()->get('row_2_header'); ?></h4>
     <p><?php echo CFS()->get('row_2_text'); ?></p><br />
      <a class="btn" href="<?php echo CFS()->get('row_2_link'); ?>"><?php echo CFS()->get('row_2_button_copy'); ?></a>
     </div>
 </div><!-- /.row -->
 </div><!-- /container -->
</div><!-- /gr-stripe -->


<div class="wh-stripe padding-bot">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div><!-- /col-md-2 -->
					<div class="col-md-8"><h1><?php echo CFS()->get('row_3_header'); ?></h1>
										<p><?php echo CFS()->get('row_3_text'); ?></p><br />
										<a class="btn" href="<?php echo CFS()->get('row_3_link'); ?>"><?php echo CFS()->get('row_3_button_copy'); ?></a></div><!-- /col-md-8 -->
				
				<div class="col-md-2"></div><!-- /col-md-2 -->
			</div><!-- /row -->		
	</div><!-- /container -->
	</div><!-- /wh-stripe -->

<?php get_template_part('parts/footer'); ?>
