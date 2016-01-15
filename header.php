<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title( '/', true, 'right' ); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" type="text/css">
        <script src="<?php bloginfo('template_directory') ?>js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logotype" src="<?php bloginfo('template_directory') ?>/img/logotyp_massage.png" /></a>
            <?php wp_nav_menu( array( 'menu_class' => 'menu', 'depth' => 1 , 'container' => 'nav', 'container_class' => 'main-menu', 'container_id' => 'main-menu', 'fallback_cb' => false) ); ?> 
        </header>
        
       
              

<code><?php if(function_exists('chi_display_header')) { chi_display_header(); } ?></code>