<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.png" />
	<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=230193873669864";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="max-width">
<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->    

<?php
/*
Upper menubar (at screen top)
=============================
Delete this whole <nav>...</nav> block if you don't want it, and delete the line in func/navbar.php that looks like this:
register_nav_menu('upper-bar', __('Screen-top menu'));
*/
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
	      
	     <img alt="eScholar logo" src="<?php bloginfo('template_directory') ?>/img/escholor_logo_white.svg">	      
	      
      </a>
          </div><!-- /.navbar-header -->
    <div class="collapse navbar-collapse upper-navbar">  
	    <a class="home-link" href="/"><i class="fa fa-home fa-2x"></i></a>  
	    <a class="home-link-mobile" href="/">Home</a> 
      <?php				
          $args = array(
            'theme_location' => 'upper-bar',
            'depth' => 0,
            'container'	=> false,
            'fallback_cb' => false,
            'menu_class' => 'nav navbar-nav',
            'walker' => new BootstrapNavMenuWalker()
          );
          wp_nav_menu($args);
      ?>
       <div class="nav-buttons"><a class="btn" href="/schedule-a-demo">Schedule A Demo</a> <a class="btn nvbtn" href="/contact">Contact Us</a>
        <div class="social-top">
		   <a href="https://twitter.com/eScholar" target="_blank"><i class="fa fa-twitter"></i></a>
		   <a href="http://www.linkedin.com/company/escholar" target="_blank"><i class="fa fa-linkedin"></i></a>
		   <a href="https://www.youtube.com/user/escholarLLC?feature=watch" target="_blank"><i class="fa fa-youtube"></i></a>
        </div><!-- /social-top -->
        </div><!-- /nav-buttons -->
        
<div class="clearfix"></div>
	  </div><!-- /.navbar-collapse -->
	 
  </div>
</nav>

 
