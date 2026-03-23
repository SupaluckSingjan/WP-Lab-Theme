
<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">

       <header class=""entry-header>
              <h1> <?php the_title(); ?> </h1>
              <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g: i a'); ?>, in <?php the_category(); ?></small>
       </header>
       <div class="thumbnail-img"><?php the_post_thumbnail(); ?></div>
       

        <p><?php the_content(); ?></p>

        <hr/>

</article>