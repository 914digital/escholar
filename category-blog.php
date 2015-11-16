<?php get_template_part('parts/header'); ?>
<div class="blogbanner">
<div class="container">
<div class="row">
<div class="col-md-12">       
<a href="/category/blog">Blog</a>
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
<h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
<h4><span class="text-muted" class="author">By <?php the_author_posts_link(); ?></span><br /></h4>
</header>
<?php the_excerpt(); ?>
<p>Posted:  <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('F jS Y') ?></time></p>
<hr/>
</article>
<?php endwhile; ?>
<ul class="pagination">
<li class="older"><?php next_posts_link('&laquo; Older') ?></li>
<li class="newer"><?php previous_posts_link('Newer &raquo;') ?></li>
</ul>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif;?>      
</div><!-- /col-md-8 -->
<div class="col-md-4" id="sidebar" role="navigation">
<?php get_template_part('parts/sidebar'); ?>
</div>
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /blog -->
<?php get_template_part('parts/footer'); ?>
