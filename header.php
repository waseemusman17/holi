<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css" >

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <!-- Header -->
    <header class="site-header">
        <div class="container-fluid">
            <div class="header-content">

                <div class="logo-box">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <img src="<?php echo $image[0]; ?>" alt="">
                    </a>
                </div>

                <div class="menu-items">
                    <nav>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'header-menu' ) 
                            ); 
                        ?>
                    </nav>
                </div>
                
                <div class="header-btn">
                    <a href="#" class="header-download-btn">Downlaod</a>
                </div>

                <div class="nav-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </header>