<?php if(is_page(7)){ ?>
<div class="divide40"></div><!-- //divide40 -->
<?php } else { ?>


<div class="wh-stripe">
<div id="fr-products">
	<div class="container">
			<div class="row">    <?php
			                     $fields = CFS()->get('footer',5);
			                     foreach ($fields as $field) { ?>
			                     <?php echo '<div class="col-md-4">' ?>
			                     <?php echo '<span class="sm-title">eScholar</span>' ?>
			                     <?php echo '<h3>'.$field['product_header'].'</h3>' ?>
			                     <?php echo '<p>'.$field['product_text'].'</p>' ?>
			                     <?php echo '<a class="btn" href="'.$field['product_link'].'">Learn more</a>' ?>
			                     
			                     
			                        <?php echo '</div>' ?>
			                        
			                          <?php $counter++;
			                        if ($counter % 3 == 0) {
			                        echo '</div><hr><div class="row">';
			                            } ?>
			                        
			                    
			                  <?php   }  ?>
			
			</div>
</div><!-- /container -->
			</div><!-- /fr-products -->
</div><!-- /wh-stripe -->	

<?php   }  ?>


<div class="footer-top">
<div class="container">
	<div class="row">
   <div class="col-md-4 col-sm-4">
	   <ul>
		   <li><a href="/solutions/escholar-mytrack/">eScholar myTrack®</a></li>
<li><a href="/solutions/escholar-complete-data-warehouse">eScholar Complete Data Warehouse®</a></li>
<li><a href="/soultions/escholar-uniq-id">eScholar Uniq-ID®</a></li>
<li><a href="/solutions/eden-edfacts/">EDEN/EdFacts Solution</a></li>
<li><a href="/solutions/professional-services/">Professional Services</a></li>
<li><a href="/solutions/customer-education/">Customer Education</a></li>
	   </ul>
   </div><!-- /col-md-3 -->
   <div class="col-md-3 col-sm-3">
	   <ul>
		   <li><a href="/company/leadership">Leadership</a></li>
<li><a href="/company/news-events">News and Events</a></li>
<li><a href="/company/security-privacy">Security and Privacy</a></li>
<li><a href="/company/our-customers">Our Customers</a></li>
<li><a href="/company/working-at-escholar">Working at eScholar</a></li>
	   </ul>
   </div><!-- /col-md-3 -->
   <div class="col-md-3 col-sm-2">
	   <ul>
		  <li><strong><a href="#">Home</a></strong></li>   
<li><strong><a href="/solutions">Solutions</a></strong></li>     
<li><strong><a href="/company">Company</a></strong></li>  
<li><strong><a href="/support">Support</a></strong></li>  
<li><strong><a href="/blog">Blog</a></strong></li>  
	   </ul>
   </div><!-- /col-md-3 -->
   <div class="col-md-2 col-sm-3">
	   <a class="btn" href="/schedule-a-demo">Schedule a demo</a><br /><br />
	   <a class="btn" href="/contact-sales">Contact Sales</a><br /><br />
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
<?php wp_footer(); ?>
</body>
</html>
