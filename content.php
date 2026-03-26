
<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">

       <header class=""entry-header>
              <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>'); ?>
              <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g: i a'); ?>, in <?php the_category(); ?></small>
       </header>

       <div class="row">
              <div class="col-sm-12 col-md-4">
                     <div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
              </div><!-- class="col-sm-12 col-md-4" -->

              <div class="col-sm-12 col-md-8">
                     <p><?php the_content(); ?></p>
              </div><!-- class="col-sm-12 col-md-8" -->

       

       </div><!-- class="row" -->
       
       
       

        

        <hr/>

</article>