<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Theme</title>
    <?php wp_head(); ?>
</head>

<?php 

    if(is_front_page()):
        $wp_lab_classes = array('lab-class', 'my-class');
    else: 
        $wp_lab_classes = array('no-lab-class');
    endif;

?>
<body <?php body_class($wp_lab_classes); ?>>
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    
