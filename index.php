<?php get_header(); ?>

 <img src="<?php header_image(); ?>" 
        height="<?php echo get_custom_header()->height;?>"
        width="<?php echo get_custom_header()->width; ?>" 
        alt=""
    />
<?php 

if(have_posts()): 
    
    while( have_posts()): the_post(); echo "This is post format"; ?>

       <?php get_template_part('content', get_post_format()); ?>

    
    <?php endwhile;

endif;

?>
<?php get_footer(); ?>