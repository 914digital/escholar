<?php 
/* 
Template Name: News
*/
?>
<?php get_template_part('parts/header'); ?>
<div class="blogbanner">
<div class="container">
<div class="row">
<div class="col-md-12">       
<h1><a href="/company/news">News</a></h1>
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
			 <?php endwhile; ?>
		    
			 <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
				<nav class="prev-next-posts">
				  <div class="prev-posts-link">
					 <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
				  </div>
				  <div class="next-posts-link">
					 <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
				  </div>
				</nav>
			 <?php } ?>
		    
			 <?php else: ?>
				<article>
				  <h1>Sorry...</h1>
				  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				</article>
			 <?php endif; ?>		    
			    

		   
	  </div><!-- /col-md-12 -->

          </div><!-- /.row -->
  
          
</div><!-- /.container -->
</div><!-- /news -->

<?php get_template_part('parts/footer'); ?>
