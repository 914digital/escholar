<?php 
/* 
Template Name: News
*/
?>
<?php get_template_part('parts/header'); ?>
<div class="page-banner desktoponly" style="background-image:url('<?php echo CFS()->get('interior_banner'); ?>');">
	<div class="page-banner-stripe">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div><!-- /col-md- -->
				<div class="col-md-8">
					<h1><?php echo CFS()->get('banner_header'); ?></h1>
					<p><?php echo CFS()->get('banner_text'); ?> </p>
									</div><!-- /col-md- -->
				<div class="col-md-2"></div><!-- /col-md- -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /page-banner-stripe -->
	
	</div><!-- /banner -->

<div class="page-banner-stripe-mobile">
<img class="img-responsive" src="<?php echo CFS()->get('interior_banner'); ?>" alt="<?php the_title(); ?>">
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
<?php
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				$query_args = array(
				  'post_type' => 'post',
				  'category_name' => 'escholar-news',
				  'category__not_in' => array( 57,58,59 ),
				  'posts_per_page' => 500,
				  'paged' => $paged
				);
				// create a new instance of WP_Query
				$the_query = new WP_Query( $query_args );
			 ?>
		    
			 <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
<div class="row">
				  <div class="col-md-3">
					  <div class="news-date">
						  <p><?php the_time('F jS, Y') ?></p>
					  </div><!-- /news-date -->
				  </div><!-- /col-md-3 -->
					<div class="col-md-9">
						<div class="news-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span class="pull-right"><br />Read more <strong><i class="glyphicon glyphicon-arrow-right"></i></strong></span>
							<div class="clearfix"></div>
							</a>
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
	      </div><!-- .col-md-8 -->
	      <div class="col-md-2"></div><!-- /col-md-2 -->
  </div><!-- /.row -->
            <div class="row">
          <div class="col-md-12 text-center">       
          <h3>Archived News</h3> <a href="/category/escholar-news/2013/">2013</a> | <a href="/category/escholar-news/2012/">2012</a> | <a href="/category/escholar-news/2011/">2011</a>
          

          </div><!--// col-md-12 -->  
          </div><!--// row --> 
</div><!-- /.container -->
</div><!-- /main-content -->

<?php get_template_part('parts/footer'); ?>
