<?php get_header(); ?>

 <img src="<?php header_image(); ?>" 
        height="<?php echo get_custom_header()->height;?>"
        width="<?php echo get_custom_header()->width; ?>" 
        alt=""
    />

<div class="row">
    <div class="col-sm-8">
        <?php 

        if(have_posts()): 
            
            while( have_posts()): the_post(); echo "This is post format"; ?>

            <?php get_template_part('content', get_post_format()); ?>

            
            <?php endwhile;

        endif;

        ?>

    </div><!-- class="col-sm-8" -->

    <div class="col-sm-4">
        <?php get_sidebar(); ?>
    </div><!-- class="col-sm-4" -->
</div><!-- class="row" -->




<?php get_footer(); ?>