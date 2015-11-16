<?php if(is_page(7)){ ?>
<div class="divide40"></div><!-- //divide40 -->
<?php } else { ?>
<div class="wh-stripe">
<div id="fr-products">
	<div class="container">
			<div class="row">    
<?php
$fields = CFS()->get('footer',5);
foreach ($fields as $field) { ?>
	<?php echo '<div class="col-md-4">' ?>
	<?php echo '<span class="sm-title">eScholar</span>' ?>
	<?php echo '<h3>'.$field['product_header'].'</h3>' ?>
	<?php echo '<p>'.$field['product_text'].'</p>' ?>
	<?php echo '<a class="btn" href="'.$field['product_link'].'">Learn more</a>' ?>
	<?php echo '<hr class="mobileonly"></div>' ?>
			                        
	<?php $counter++;
	if ($counter % 3 == 0) {
	echo '</div><hr class="desktoponly"><div class="row">';
	} ?>                      
			                    
<?php   }  ?>

			
			</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /fr-products -->
</div><!-- /wh-stripe -->	

<?php   }  ?>




<div class="footer-top">
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php wp_nav_menu( array( 'theme_location' => 'upper-bar' ) ); ?>
      </div><!-- /col-md-9 -->
   <div class="col-md-2 col-sm-3">
	   <a class="btn" href="/schedule-a-demo">Schedule a demo</a><br /><br />
	   <a class="btn" href="/contact-sales">Contact Us</a><br /><br />
	   <div class="social-foot">
		   <a href="https://www.facebook.com/eScholar.eddata" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
		   <a href="https://twitter.com/eScholar" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
		   <a href="http://www.linkedin.com/company/escholar" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
		   <a href="https://www.youtube.com/user/escholarLLC?feature=watch" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
	   </div><!-- /social-foot -->
   </div><!-- /col-md-3 -->
  </div>
</div><!-- /container -->
</div><!-- /footer-top -->

<div class="footer-bot">
	<div class="container">
  <div class="row">
    <div class="col-md-6">
      <p>&copy;1997 - <?php echo date('Y'); ?> <?php bloginfo('name'); ?> LLC, All Rights Reserved</p>
    </div><!-- /col-md-6 -->
    <div class="col-md-6"></div><!-- /col-md-6 -->
  </div><!-- /row -->
</div><!-- /container -->
</div><!-- /footer-bot -->
</div><!-- /max-width -->
<?php wp_footer(); ?>
</body>
</html>
