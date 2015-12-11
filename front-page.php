<?php get_template_part('parts/header'); ?>
<div class="desktoponly">
<div class="banner" style="background-image:url('<?php echo CFS()->get('banner_image'); ?>');">
<?php if ('' != $cfs->get('news_ticker_loop')) : ?>

	<div class="web-stripe desktoponly">
	<div class="container">
	  <div class="row">
	 <div class="col-md-12">
		<ul class="nt_title">
						
															
		     <?php $fields = CFS()->get('news_ticker_loop');
		                      foreach ($fields as $field) { ?>
		                      <?php echo '<li><span class="web-stripe-text"><strong>'.$field['ticker_text'].'</strong></span>' ?>
		                      <?php echo '<a class="btn" href="'.$field['ticker_link'].'">'.$field['ticker_button_text'].'</a></li>' ?>
		                     
		                   <?php   }  ?>
		                   		                   
		</ul><!-- /newsticker -->
		
		
		 
		</div><!-- /col-md-12 -->
		
					
	
		</div><!-- /row -->
	</div><!-- /container -->
	</div><!-- /web-stripe -->

<?php endif; ?>
	
	<div class="banner-stripe">
		<div class="container">
			<div class="row">
    <div class="col-md-4">
	    <h3><?php echo CFS()->get('banner_stripe_header_1'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_1'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_1'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_1'); ?></a><div class="mdivide20"></div>
    </div><!-- /col-md-4 -->
     <div class="col-md-4">
	        <h3><?php echo CFS()->get('banner_stripe_header_2'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_2'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_2'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_2'); ?></a><div class="mdivide20"></div>
     </div><!-- /col-md-4 -->
      <div class="col-md-4">
	        <h3><?php echo CFS()->get('banner_stripe_header_3'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_3'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_3'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_3'); ?></a><div class="mdivide20"></div>
      </div><!-- /col-md-4 -->
</div><!-- /.row -->
</div><!-- /.container -->
	</div><!-- /banner-stripe -->

<div class="container">
  <div class="row">

    <div class="col-md-6">
	      <div class="banner-text desktoponly">
	     <h2><?php echo CFS()->get('banner_text_header'); ?></h2>
	   <p><?php echo CFS()->get('banner_text_copy'); ?>
	     </p>
	   	     </div><!-- /banner-text -->
     </div><!-- /.col-md-6 -->
     
    
     <div class="col-md-6">
	    
     </div><!-- /.col-md-6 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /banner -->

<div class="wh-stripe">
		<div class="container">
			<div class="row">
    <div class="col-md-6">
	    <h4><?php echo CFS()->get('row_1_header'); ?></h4>
	    <p><?php echo CFS()->get('row_1_text'); ?></p><br />
	    <a class="btn" href="<?php echo CFS()->get('row_1_link'); ?>"><?php echo CFS()->get('row_1_button_copy'); ?></a>
    </div><!-- /col-md-6 -->
     <div class="mdivide20"></div><!-- /mdivide20 -->
    <div class="col-md-6 desktoponly"><a href="<?php echo CFS()->get('row_1_link'); ?>"><img src="<?php echo CFS()->get('row_1_image'); ?>" alt="<?php echo CFS()->get('row_1_header'); ?>"></a></div><!-- /col-md-6 -->
 </div><!-- /.row -->
 </div><!-- /.container -->
</div><!-- /wh-stripe -->

<div class="gr-stripe">
	<div class="container">
			<div class="row">
    <div class="col-md-6 desktoponly"><a href="<?php echo CFS()->get('row_2_link'); ?>"><img alt="<?php echo CFS()->get('row_2_header'); ?>" src="<?php echo CFS()->get('row_2_image'); ?>"></a></div>
     <div class="mdivide20"></div><!-- /mdivide20 -->
     <div class="col-md-6"><h4><?php echo CFS()->get('row_2_header'); ?></h4>
     <p><?php echo CFS()->get('row_2_text'); ?></p><br />
      <a class="btn" href="<?php echo CFS()->get('row_2_link'); ?>"><?php echo CFS()->get('row_2_button_copy'); ?></a>
     </div>
 </div><!-- /.row -->
 </div><!-- /container -->
</div><!-- /gr-stripe -->

<div class="wh-stripe testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>What Our Clients Are Saying</h4>
					<p><?php echo CFS()->get('testimonial_copy'); ?></p>
	    </div><!-- /col-md-6 -->
    <div class="col-md-6 desktoponly"><img alt="eScholar Client Testimonial" src="<?php echo CFS()->get('testimonial_image'); ?>" />
	    </div><!-- /col-md-6 -->
 </div><!-- /.row -->
 </div><!-- /.container -->
</div><!-- /wh-stripe -->


<div class="wh-stripe proven">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div><!-- /col-md-2 -->
					<div class="col-md-8"><h1><?php echo CFS()->get('row_3_header'); ?></h1>
										<p><?php echo CFS()->get('row_3_text'); ?></p><br />
										</div><!-- /col-md-8 -->
				
				<div class="col-md-2"></div><!-- /col-md-2 -->
			</div><!-- /row -->		
	</div><!-- /container -->
	</div><!-- /wh-stripe -->
</div><!-- /desktoponly -->



<!-- ***************************************  Mobile Only *************************************** -->
<div class="mobileonly">
<div class="web-stripe-mobile text-center">
			<div class="page-banner-stripe-mobile">
<img class="img-responsive" src="<?php echo CFS()->get('banner_image'); ?>" alt="eScholar Header Image">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div><!-- /col-md- -->
				<div class="col-md-8">
				<div class="block1">	
					<h3><?php echo CFS()->get('banner_text_header'); ?></h3>
					<p><?php echo CFS()->get('banner_text_copy'); ?> </p>
				</div>
									</div><!-- /col-md- -->
				<div class="col-md-2"></div><!-- /col-md- -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /page-banner-stripe -->
			
			
			
			
			
	<div class="container">
   
	
	  <div class="row">
	 <div class="col-md-12"> 
<div class="block2">	 
<h3>News & Events</h3>
															
<?php $fields = CFS()->get('news_ticker_loop');
foreach ($fields as $field) { ?>
<?php echo '<div class="item"><a class="web-stripe-text-mobile" href="'.$field['ticker_link'].'" >'.$field['ticker_text'].'</a></div>' ?>
<?php   }  ?>
</div>
	</div><!-- /col-md-12 -->
		
					
	
		</div><!-- /row -->
		
		</div><!--// container --> 		

<div class="banner-stripe-mobile">
		<div class="container">
			<div class="row">
    <div class="col-md-4">
	    <h3><?php echo CFS()->get('banner_stripe_header_1'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_1'); ?></p>
<a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_1'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_1'); ?></a>
    </div><!-- /col-md-4 -->

    <div class="col-md-4">
	     <h3><?php echo CFS()->get('banner_stripe_header_2'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_2'); ?></p>
<a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_2'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_2'); ?></a>
     </div><!-- /col-md-4 -->

       <div class="col-md-4">
	       <h3><?php echo CFS()->get('banner_stripe_header_3'); ?></h3>
	    <p><?php echo CFS()->get('banner_stripe_text_3'); ?></p>
<a class="btn" href="<?php echo CFS()->get('banner_stripe_button_link_3'); ?>"><?php echo CFS()->get('banner_stripe_button_copy_3'); ?></a>

      </div><!-- /col-md-4 -->
</div><!-- /.row -->
</div><!-- /.container -->
	</div><!-- /banner-stripe-mobile -->
	
<div class="block4">	 	
			<div class="container">	
		<div class="row">
		<div class="col-md-4"><h3><a href="<?php echo CFS()->get('row_1_link'); ?>"><?php echo CFS()->get('row_1_header'); ?></a></h3>
<p><?php echo CFS()->get('row_1_text'); ?></p>
<a class="btn" href="<?php echo CFS()->get('row_1_link'); ?>"><?php echo CFS()->get('row_1_button_copy'); ?></a>
</div><!--// col-md-4 -->
		<div class="col-md-4"><h3><a  href="<?php echo CFS()->get('row_2_link'); ?>"><?php echo CFS()->get('row_2_header'); ?></a></h3>
<p><?php echo CFS()->get('row_2_text'); ?></p>
<a class="btn" href="<?php echo CFS()->get('row_2_link'); ?>"><?php echo CFS()->get('row_2_button_copy'); ?></a>
</div><!--// col-md-4 -->
		<div class="col-md-4"><h3><a  href="/company/our-customers/">What Our Clients Are Saying</a></h3>
<p><?php echo CFS()->get('testimonial_copy'); ?></p></div><!--// col-md-4 -->
		</div><!--// row -->     
		
		<div class="row">
		<div class="col-md-12">       
		
 

	   
<h3><?php echo CFS()->get('row_3_header'); ?></h3>
<p><?php echo CFS()->get('row_3_text'); ?></p>
		</div><!--// col-md-12 -->  
		</div><!--// row -->     
		
	</div><!-- /container -->
</div>
	</div><!-- /web-stripe -->



</div>	
	


<?php get_template_part('parts/footer'); ?>
