<?php if(is_page(7)){ ?>
<div class="divide40"></div><!-- //divide40 -->
<?php } else { ?>
<div class="wh-stripe">
<div id="fr-products" class="desktoponly">
	<div class="container">
			<div class="row">    
				<h2>Our Solutions</h2>
<?php
$fields = CFS()->get('footer',5);
foreach ($fields as $field) { ?>
	<?php echo '<div class="col-md-4">' ?>
	<?php echo '<span class="sm-title">eScholar</span>' ?>
	<?php echo '<h3>'.$field['product_header'].'</h3>' ?>
	<?php echo '<p>'.$field['product_text'].'</p>' ?>
	<?php echo '<a class="btn" href="'.$field['product_link'].'">'.$field['product_button_text'].'</a>' ?>
	<?php echo '<hr class="mobileonly"></div>' ?>
			                        
	<?php $counter++;
	if ($counter % 3 == 0) {
	echo '</div><div class="divide40"></div><div class="row">';
	} ?>                      
			                    
<?php   }  ?>

			
			</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /fr-products -->

<div id="fr-products-mobile" class="mobileonly">
	<div class="container">
			<div class="row">    
				<h2>Our Solutions</h2>
<?php
$fields = CFS()->get('footer',5);
foreach ($fields as $field) { ?>
	
	
	<?php echo '<a class="btn" href="'.$field['product_link'].'"><span class="sm-title">eScholar</span> <h3>'.$field['product_header'].'</h3></a><br />' ?>
	
			                        
	            
			                    
<?php   }  ?>

			
			</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /fr-products-mobile -->


</div><!-- /wh-stripe -->	

<?php   }  ?>




<div class="footer-top">
<div class="container desktoponly">
	<div class="row">
		<div class="col-md-9">
			<?php wp_nav_menu( array( 'theme_location' => 'upper-bar' ) ); ?>
      </div><!-- /col-md-9 -->
   <div class="col-md-2 col-sm-3">
	   <a class="btn" href="/schedule-a-demo">Schedule a demo</a><br /><br />
	   <a class="btn" href="/contact">Contact Us</a><br /><br />
	   <div class="social-foot">
		   <a href="https://www.facebook.com/eScholar.eddata" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
		   <a href="https://twitter.com/eScholar" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
		   <a href="http://www.linkedin.com/company/escholar" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
		   <a href="https://www.youtube.com/user/escholarLLC?feature=watch" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
	   </div><!-- /social-foot -->
   </div><!-- /col-md-3 -->
  </div>
</div><!-- /container -->
<div class="container mobileonly">
<div class="row">
<div class="col-sm-4"><a class="btn" href="/schedule-a-demo">Schedule a demo</a><div class="mdivide20"></div></div><!--// col-md-4 -->
<div class="col-sm-4">	   <a class="btn" href="/contact">Contact Us</a><div class="mdivide20"></div></div><!--// col-md-4 -->
<div class="col-sm-4">
	   <div class="social-foot">
		   <a href="https://www.facebook.com/eScholar.eddata" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
		   <a href="https://twitter.com/eScholar" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
		   <a href="http://www.linkedin.com/company/escholar" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
		   <a href="https://www.youtube.com/user/escholarLLC?feature=watch" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
	   </div><!-- /social-foot -->
</div><!--// col-md-4 -->
</div><!--// row -->     
</div><!--// container --> 
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

<script>
var nt_title = $('.nt_title').newsTicker({
	 			row_height: 30,
                max_rows: 1,
                speed:400,
                duration: 7000,
                pauseOnHover: 0});
</script>
<script type="text/javascript">

 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-3587483-1']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();

</script>
</body>
</html>
