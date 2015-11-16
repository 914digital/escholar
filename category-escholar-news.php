<?php get_template_part('parts/header'); ?>
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
		    <div class="row">
			     <div class="col-md-3">
				     <div class="news-date">
					     <p><?php the_time('F jS, Y') ?></p>
				     </div><!-- /news-date -->
			     </div><!-- /col-md-3 -->
			      <div class="col-md-9">
				      <div class="news-title">
					      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				      </div><!-- /news-title -->
			      </div><!-- /col-md-9 -->
			    </div><!-- /.row -->
			    <div class="divide20"></div><!-- //divide20 -->
			    
		  <?php endwhile; else : ?>
		  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		  	 <?php endif; ?>	
		   
	  </div><!-- /col-md-12 -->

          </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /news -->

<?php get_template_part('parts/footer'); ?>
