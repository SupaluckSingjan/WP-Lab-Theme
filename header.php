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
    <div class="container"> 
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary', 
                            'container' => 'false',
                            'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0'
                            )
                        ); 
                        ?>
                        
                    
                    </div>
                </div>
                </nav>
                

            </div><!-- class="col-12" -->
        </div><!-- class="row" -->

   




    
