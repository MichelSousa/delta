<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Casanova</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width">

        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
        
        <!-- start stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/src/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/css/core.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/css/custom.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/src/tooltipster/tooltipster.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/src/swipebox/swipebox.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/src/rs-plugin/css/settings.css">
        <!-- end stylesheets -->

        <!-- start scripts -->
        <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/modernizr/modernizr.custom.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/jquery/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.13&amp;sensor=false&amp;libraries=geometry&amp;1343675513"></script>
        <!-- end scripts -->
    </head>

    <body>

        <!-- start header -->
        <header id="site-header" class="header section light">

            <!-- start container -->
            <div class="container">

                <!-- start row -->
                <div class="row">

                    <!-- start logo -->
                    <div id="logo" class="col-29">
                        <h1 class="site-title">
                            <a href="<?php echo get_option("home")?>">
                               <img src="<?php echo get_theme_mod("logo_image") ?>" alt="casanova">
                           </a>
                        </h1>
                    </div>
                    <!-- end logo -->

                    <!-- start header widgets -->
                    <div id="header-widgets" class="col-7">

                        <!-- start social icons -->
                        <nav id="header-social" class="text-right">
                            <a href="#" class="icon circle tooltip" title="Find us on Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            
                            <a href="#" class="icon circle tooltip" title="Follow us on Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="icon circle tooltip" title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </nav>
                        <!-- end social icons -->

                        <!-- start site nav -->
                        <nav id="site-nav" class="nav horizontal text-right">
                           
                                <?php  

                                   wp_nav_menu(array(
                                    
                                    'container' => '<ul>',
                                    'container_class' => 'dropdown',
                                    'container_id' => '',
                                   'menu_class' => 'nav navbar-nav menu',
                                    'echo' => true,
                                    'menu_id' => '',
                                    'before' => '',
                                    'after' =>'',
                                    'link_before' =>'',
                                    'link_after' =>'',
                                    'depth' => 0,
                                    'walker' =>'',
                                    ) );
                                  ?>
                        </nav>
                        <!-- end site nav -->

                    </div>
                    <!-- end header widgets -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </header>
        <!-- end header -->