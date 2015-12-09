<?php get_template_part('parts/header'); ?>

<?php if (in_category('escholar-news')) { ?>
<div class="blogbanner">
<div class="container">
<div class="row">
<div class="col-md-12">       
<a href="/category/escholar-news">News</a>
</div><!--// col-md-12 -->  
</div><!--// row -->  
</div><!--// container -->  
</div><!--// blogbanner -->   
<div class="int-news">
<div class="container">
<div class="row">
<div class="col-md-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1> 
<?php the_content(); ?>
<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	
<div class="row">
<div class="col-md-4"></div><!-- /col-md-4 -->
<div class="col-md-4"><a style="display:block;" class="btn btn-default" href="/category/escholar-news/">View All eScholar News</a></div><!-- /col-md-4 -->
<div class="col-md-4"></div><!-- /col-md-4 -->
</div><!-- /row -->
</div><!-- /col-md-12 -->
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /int-news -->
<?php } else { ?>
<div class="blogbanner">
<div class="container">
<div class="row">
<div class="col-md-12">       
<h1><a href="/category/blog">Blog</a></h1>
</div><!--// col-md-12 -->  
</div><!--// row -->  
</div><!--// container -->  
</div><!--// blogbanner -->   		
<div class="blog-int">
<div class="container">
<div class="row">
<div class="col-md-8">
<?php if(have_posts()): while(have_posts()): the_post();?>
<article role="article" id="post_<?php the_ID()?>">
<header>
<h2><?php the_title()?></h2>
<h4><span class="text-muted author">By <?php the_author_posts_link(); ?></span><br /></h4>
<p><?php the_time('F jS, Y') ?></p> 
<div class="fb-share-button"  style="float:left; margin-right: 10px;" data-href="<?php the_permalink(); ?>" data-layout="button"></div>
<div class="twitter-share-button" style="float:left; margin-right: 10px;">   
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="escholar" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>   
</div>   
<div class="linkedin-share-button" style="float:left; margin-right: 10px;">
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="<?php the_permalink(); ?>"></script>
</div>
<div class="clearfix"></div>
</header>
<?php the_content(); ?>
<div class="row">
<div class="col-md-4"></div><!-- /col-md-4 -->
<div class="col-md-4"><a style="display:block;" class="btn btn-default" href="/blog/">View All Blog Posts</a></div><!-- /col-md-4 -->
<div class="col-md-4"></div><!-- /col-md-4 -->
</div><!-- /row -->
<div class="divide40"></div><!-- //divide40 -->
</article>
<?php comments_template('/parts/comments.php'); ?>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif;?>
</div><!-- /col-md-8 -->
<div class="col-md-4" id="sidebar" role="navigation">
<?php get_template_part('parts/sidebar'); ?>
</div>
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /blog-int -->
<?php } ?>

<?php get_template_part('parts/footer'); ?>
