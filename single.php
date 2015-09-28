<?php get_template_part('parts/header'); ?>
<div class="blog-int">
<div class="container">
  <div class="row">
    
    <div class="col-md-8">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>">
          <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <h4>
              
                <span class="text-muted" class="author">By <?php the_author_posts_link(); ?></span><br />
               
              
            </h4>
          </header>
          <?php the_post_thumbnail(); ?>
         <?php the_content(); ?>
          <p>Posted:  <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('F jS Y') ?></time></p>
          <hr/>
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

<?php get_template_part('parts/footer'); ?>
